// This file is created by egg-ts-helper@1.33.0
// Do not modify this file!!!!!!!!!

import 'egg';
import ExportAlarmConfig = require('../../../app/controller/alarmConfig');
import ExportAlarmData = require('../../../app/controller/alarmData');
import ExportAssign = require('../../../app/controller/assign');
import ExportCategory = require('../../../app/controller/category');
import ExportCustomer = require('../../../app/controller/customer');
import ExportHome = require('../../../app/controller/home');
import ExportInstance = require('../../../app/controller/instance');
import ExportInstanceData = require('../../../app/controller/instanceData');
import ExportInstanceDataFuture = require('../../../app/controller/instanceDataFuture');
import ExportMap = require('../../../app/controller/map');
import ExportPermission = require('../../../app/controller/permission');
import ExportProduct = require('../../../app/controller/product');
import ExportRegister = require('../../../app/controller/register');
import ExportRole = require('../../../app/controller/role');
import ExportRx = require('../../../app/controller/rx');
import ExportUpload = require('../../../app/controller/upload');
import ExportUser = require('../../../app/controller/user');

declare module 'egg' {
  interface IController {
    alarmConfig: ExportAlarmConfig;
    alarmData: ExportAlarmData;
    assign: ExportAssign;
    category: ExportCategory;
    customer: ExportCustomer;
    home: ExportHome;
    instance: ExportInstance;
    instanceData: ExportInstanceData;
    instanceDataFuture: ExportInstanceDataFuture;
    map: ExportMap;
    permission: ExportPermission;
    product: ExportProduct;
    register: ExportRegister;
    role: ExportRole;
    rx: ExportRx;
    upload: ExportUpload;
    user: ExportUser;
  }
}
