'use strict';

module.exports = app => {
  const { STRING, INTEGER } = app.Sequelize;
  const CategoryData = app.model.define(
    'category',
    {
      id: { type: INTEGER, primaryKey: true, autoIncrement: true },
      url: STRING(32),
      link_url: STRING(32),
      desc: STRING(255),
    },
    {
      tableName: 'category',
      timestamps: true, // Enable timestamp(createdAt, updatedAt)
      updatedAt: 'updated_at', //  updatedAt
      createdAt: 'created_at', //  createdAt 
    }
  );
  return CategoryData;
};
