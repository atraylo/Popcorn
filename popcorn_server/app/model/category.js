'use strict';

module.exports = app => {
  const { STRING, INTEGER } = app.Sequelize;
  const CategoryData = app.model.define(
    'category',
    {
      id: { type: INTEGER, primaryKey: true, autoIncrement: true },
      name: STRING(32),
      sort: STRING(32),
      desc: STRING(255),
    },
    {
      tableName: 'category',
      timestamps: true, // Enable timestamp(createdAt, updatedAt)
      updatedAt: 'updated_at', //  updatedAt
      createdAt: 'created_at', //  createdAt, but perfer created_at (nah)
    }
  );
  return CategoryData;
};
