'use strict';
module.exports = {
  // Successful response
  success(data = null, code = 200, msg = '') {
    msg = msg || this.helper.errorCode[code] || 'Success';
    this.status = code;
    this.body = {
      success: true,
      code,
      msg,
      data,
    };
  },

  // Failure to respond
  error(code = 500, msg = '', data = null) {
    msg = msg || this.helper.errorCode[code] || 'Fail';
    this.status = code;
    this.body = {
      success: false,
      code,
      msg,
      data,
    };
  },
};
