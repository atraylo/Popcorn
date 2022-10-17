'use strict';

module.exports = {
  username: {
    type: 'string',
    trim: true,
    required: false,
    max: 16,
    format: /^[_0-9a-z\u4e00-\u9fa5]{2,16}$/i,
    message: 'Wrong account name format',
  },
  email: {
    type: 'string',
    required: false,
    trim: true,
    format: /^[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)+$/i,
    message: 'Incorrect email format',
  },
  avatar: {
    type: 'string',
    required: false,
    allowEmpty: false,
    // format: /^(https?:\/\/)([a-z0-9]+\.?)+(\:\d+)?[a-z0-9:\/~.&$]*$/i,
    message: 'The address of the avatar is failed',
  },
  status: {
    type: 'enum',
    required: false,
    values: [0, 1],
    message: 'The status failed',
  },
  password: {
    type: 'string',
    required: false,
    trim: true,
    format: /^[a-z0-9_-]{6,16}$/i,
    message: 'Password at least 6 characters',
  },
};
