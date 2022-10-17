'use strict';

module.exports = {
  old_password: {
    type: 'string',
    trim: true,
    required: true,
    format: /^[a-z0-9_-]{6,16}$/i,
    message: 'Password at least 6 characters',
  },
  new_password: {
    type: 'string',
    trim: true,
    required: true,
    format: /^[a-z0-9_-]{6,16}$/i,
    message: 'Password at least 6 characters',
  },
};
