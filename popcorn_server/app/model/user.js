'use strict';
const bcrypt = require('bcryptjs');

module.exports = app => {
  const { STRING, INTEGER } = app.Sequelize;
  const User = app.model.define(
    'user',
    {
      id: { type: INTEGER, primaryKey: true, autoIncrement: true },
      username: STRING(32),
      email: STRING(64),
      avatar: STRING(128),
      status: INTEGER(1),
      password: {
        type: STRING(255),
        set(val) {
          // Encrypt user passwords using the bcrypt encryption algorithm 
          const password = bcrypt.hashSync(val, 10);
          this.setDataValue('password', password);
        },
      },
    },
    {
      tableName: 'users',
      timestamps: true, // Enable timestamp
      updatedAt: false, // updatedAt
      createdAt: 'created_at', // createdAt 
    }
  );
  return User;
};
