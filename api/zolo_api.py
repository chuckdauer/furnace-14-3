# -*- coding: utf-8 -*-

"""
Created on Jul 2, 2019

@author: WOODWARDB
"""

from flask import Flask, Response
from flask_restful import Api
import textwrap
import dbconfig as cfg
import pyodbc
import json

app = Flask(__name__)
api = Api(app)


# REST method
@app.route('/zolo_metrics/<furnace_number>', methods=['GET'])
def get_zolo_data(furnace_number):
    try:
        dl = get_zolo_furnace_data(furnace_number)
        return dl
    except Exception as e:
        invalid_input_error_msg = {"error": e}
        return Response(json.dumps(invalid_input_error_msg), status=500, mimetype="application/json")
    
def get_zolo_furnace_data(furnace_number):
    if furnace_number == '14':
        query = textwrap.fill(textwrap.dedent(textwrap.dedent(cfg.get_query_14)).replace("\n", " "))
        return __get_data(query)
    return str.format('{0} not implemented on ZOLO yet', furnace_number)

# 
def __get_data(query):
    cnxn = pyodbc.connect(cfg.cnxn)
    cursor = cnxn.cursor()
    cursor.execute(query)

    for row in cursor:
        if row is None:
            return row

        results = dict()
        results['DateTime'] = row.DateTime
        path_num = 1
        for col_idx in range(0, 100, 5):
            laser_path = dict()
            laser_path['Path' + str(path_num).zfill(2) +'_14.CO_Concentration'] = row[col_idx + 1]
            laser_path['Path' + str(path_num).zfill(2) +'_14.O2_Concentration'] = row[col_idx + 2]
            laser_path['Path' + str(path_num).zfill(2) +'_14.SignalStrength'] = row[col_idx + 3]
            laser_path['Path' + str(path_num).zfill(2) +'_14.Status'] = row[col_idx + 4]
            laser_path['Path' + str(path_num).zfill(2) +'_14.TempF'] = row[col_idx + 5]
            results['Path' + str(path_num).zfill(2) + '_14'] = laser_path
            path_num += 1
        return json.dumps(results, indent=4)
   
    
# If debugging, then run on port 5001
if __name__ == '__main__':
    app.run(debug=True, port=5001)
    
