# -*- coding: utf-8 -*-
"""
Created on Wed Jul  3 14:13:36 2019

@author: WOODWARB
"""

cnxn = "Driver={SQL Server Native Client 11.0};Server=jztul0ww06;"  \
      "Database=Runtime; uid=wwUser; pwd=wwUser;"

get_query_14 = """
    SET QUOTED_IDENTIFIER OFF 
    SELECT top 1 * FROM OPENQUERY(INSQL, "
    SELECT DateTime = convert(nvarchar, DateTime, 21) ,
    [Path01_14.CO_Concentration],
    [Path01_14.O2_Concentration],
    [Path01_14.SignalStrength],
    [Path01_14.Status],
    [Path01_14.TempF],
    [Path02_14.CO_Concentration],
    [Path02_14.O2_Concentration],
    [Path02_14.SignalStrength],
    [Path02_14.Status],
    [Path02_14.TempF],
    [Path03_14.CO_Concentration],
    [Path03_14.O2_Concentration],
    [Path03_14.SignalStrength],
    [Path03_14.Status],
    [Path03_14.TempF],
    [Path04_14.CO_Concentration],
    [Path04_14.O2_Concentration],
    [Path04_14.SignalStrength],
    [Path04_14.Status],
    [Path04_14.TempF],
    [Path05_14.CO_Concentration],
    [Path05_14.O2_Concentration],
    [Path05_14.SignalStrength],
    [Path05_14.Status],
    [Path05_14.TempF],
    [Path06_14.CO_Concentration],
    [Path06_14.O2_Concentration],
    [Path06_14.SignalStrength],
    [Path06_14.Status],
    [Path06_14.TempF],
    [Path07_14.CO_Concentration],
    [Path07_14.O2_Concentration],
    [Path07_14.SignalStrength],
    [Path07_14.Status],
    [Path07_14.TempF],
    [Path08_14.CO_Concentration],
    [Path08_14.O2_Concentration],
    [Path08_14.SignalStrength],
    [Path08_14.Status],
    [Path08_14.TempF],
    [Path09_14.CO_Concentration],
    [Path09_14.O2_Concentration],
    [Path09_14.SignalStrength],
    [Path09_14.Status],
    [Path09_14.TempF],
    [Path10_14.CO_Concentration],
    [Path10_14.O2_Concentration],
    [Path10_14.SignalStrength],
    [Path10_14.Status],
    [Path10_14.TempF],
    [Path11_14.CO_Concentration],
    [Path11_14.O2_Concentration],
    [Path11_14.SignalStrength],
    [Path11_14.Status],
    [Path11_14.TempF],
    [Path12_14.CO_Concentration],
    [Path12_14.O2_Concentration],
    [Path12_14.SignalStrength],
    [Path12_14.Status],
    [Path12_14.TempF],
    [Path13_14.CO_Concentration],
    [Path13_14.O2_Concentration],
    [Path13_14.SignalStrength],
    [Path13_14.Status],
    [Path13_14.TempF],
    [Path14_14.CO_Concentration],
    [Path14_14.O2_Concentration],
    [Path14_14.SignalStrength],
    [Path14_14.Status],
    [Path14_14.TempF],
    [Path15_14.CO_Concentration],
    [Path15_14.O2_Concentration],
    [Path15_14.SignalStrength],
    [Path15_14.Status],
    [Path15_14.TempF],
    [Path16_14.CO_Concentration],
    [Path16_14.O2_Concentration],
    [Path16_14.SignalStrength],
    [Path16_14.Status],
    [Path16_14.TempF],
    [Path17_14.CO_Concentration],
    [Path17_14.O2_Concentration],
    [Path17_14.SignalStrength],
    [Path17_14.Status],
    [Path17_14.TempF],
    [Path18_14.CO_Concentration],
    [Path18_14.O2_Concentration],
    [Path18_14.SignalStrength],
    [Path18_14.Status],
    [Path18_14.TempF],
    [Path19_14.CO_Concentration],
    [Path19_14.O2_Concentration],
    [Path19_14.SignalStrength],
    [Path19_14.Status],
    [Path19_14.TempF],
    [Path20_14.CO_Concentration],
    [Path20_14.O2_Concentration],
    [Path20_14.SignalStrength],
    [Path20_14.Status],
    [Path20_14.TempF]
     FROM WideHistory
     WHERE DateTime >= DateAdd(second,-5,GetDate())
     AND DateTime <= GetDate()
     ")
"""
    