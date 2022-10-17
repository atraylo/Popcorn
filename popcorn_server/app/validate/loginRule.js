'use strict';

module.exports = {
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
