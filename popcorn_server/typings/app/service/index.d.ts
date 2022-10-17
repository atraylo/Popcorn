// This file is created by egg-ts-helper@1.33.0
// Do not modify this file!!!!!!!!!

import 'egg';
type AnyClass = new (...args: any[]) => any;
type AnyFunc<T = any> = (...args: any[]) => T;
type CanExportFunc = AnyFunc<Promise<any>> | AnyFunc<IterableIterator<any>>;
type AutoInstanceType<T, U = T extends CanExportFunc ? T : T extends AnyFunc ? ReturnType<T> : T> = U extends AnyClass ? InstanceType<U> : U;
import ExportAlarmConfig = require('../../../app/service/alarmConfig');
import ExportAlarmData = require('../../../app/service/alarmData');
import ExportCategory = require('../../../app/service/category');
import ExportCustomer = require('../../../app/service/customer');
import ExportInstance = require('../../../app/service/instance');
import ExportInstanceData = require('../../../app/service/instanceData');
import ExportInstanceDataFuture = require('../../../app/service/instanceDataFuture');
import ExportMap = require('../../../app/service/map');
import ExportPermission = require('../../../app/service/permission');
import ExportProduct = require('../../../app/service/product');
import ExportRegister = require('../../../app/service/register');
import ExportRole = require('../../../app/service/role');
import ExportRx = require('../../../app/service/rx');
import ExportUser = require('../../../app/service/user');

declare module 'egg' {
  interface IService {
    alarmConfig: AutoInstanceType<typeof ExportAlarmConfig>;
    alarmData: AutoInstanceType<typeof ExportAlarmData>;
    category: AutoInstanceType<typeof ExportCategory>;
    customer: AutoInstanceType<typeof ExportCustomer>;
    instance: AutoInstanceType<typeof ExportInstance>;
    instanceData: AutoInstanceType<typeof ExportInstanceData>;
    instanceDataFuture: AutoInstanceType<typeof ExportInstanceDataFuture>;
    map: AutoInstanceType<typeof ExportMap>;
    permission: AutoInstanceType<typeof ExportPermission>;
    product: AutoInstanceType<typeof ExportProduct>;
    register: AutoInstanceType<typeof ExportRegister>;
    role: AutoInstanceType<typeof ExportRole>;
    rx: AutoInstanceType<typeof ExportRx>;
    user: AutoInstanceType<typeof ExportUser>;
  }
}
