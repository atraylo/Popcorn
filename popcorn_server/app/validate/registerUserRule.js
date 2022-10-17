'use strict';

module.exports = {
  username: {
    type: 'string',
    trim: true,
    required: true,
    max: 16,
    format: /^[_0-9a-z\u4e00-\u9fa5]{1,16}$/i,
    message: 'User name format is wrong',
  },
  email: {
    type: 'string',
    trim: true,
    format: /^[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)+$/i,
    message: 'Incorrect email format',
  },
  password: {
    type: 'string',
    trim: true,
    format: /^[a-z0-9_-]{6,16}$/i,
    message: 'Password at least 6 characters',
  },
};
