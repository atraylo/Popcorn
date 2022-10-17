// This file is created by egg-ts-helper@1.33.0
// Do not modify this file!!!!!!!!!

import 'egg';
import ExportAlarmConfig = require('../../../app/model/alarmConfig');
import ExportAlarmData = require('../../../app/model/alarmData');
import ExportCategory = require('../../../app/model/category');
import ExportCustomer = require('../../../app/model/customer');
import ExportInstance = require('../../../app/model/instance');
import ExportInstanceData = require('../../../app/model/instanceData');
import ExportInstanceDataFuture = require('../../../app/model/instanceDataFuture');
import ExportMap = require('../../../app/model/map');
import ExportPermission = require('../../../app/model/permission');
import ExportProduct = require('../../../app/model/product');
import ExportRegister = require('../../../app/model/register');
import ExportRole = require('../../../app/model/role');
import ExportRolePermission = require('../../../app/model/rolePermission');
import ExportRx = require('../../../app/model/rx');
import ExportUser = require('../../../app/model/user');
import ExportUserRole = require('../../../app/model/userRole');

declare module 'egg' {
  interface IModel {
    AlarmConfig: ReturnType<typeof ExportAlarmConfig>;
    AlarmData: ReturnType<typeof ExportAlarmData>;
    Category: ReturnType<typeof ExportCategory>;
    Customer: ReturnType<typeof ExportCustomer>;
    Instance: ReturnType<typeof ExportInstance>;
    InstanceData: ReturnType<typeof ExportInstanceData>;
    InstanceDataFuture: ReturnType<typeof ExportInstanceDataFuture>;
    Map: ReturnType<typeof ExportMap>;
    Permission: ReturnType<typeof ExportPermission>;
    Product: ReturnType<typeof ExportProduct>;
    Register: ReturnType<typeof ExportRegister>;
    Role: ReturnType<typeof ExportRole>;
    RolePermission: ReturnType<typeof ExportRolePermission>;
    Rx: ReturnType<typeof ExportRx>;
    User: ReturnType<typeof ExportUser>;
    UserRole: ReturnType<typeof ExportUserRole>;
  }
}
