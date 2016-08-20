# Пример окружения для разработки frontend

Состоит из gruntjs, requirejs.

## Установка 
Для установки надо иметь nodejs&npm. В корневой папке запустить `nmp install`.

## Структура проекта
* Папка [static](static) - папка с ресурсами js, css
  * [entries](static/entries) - входные скрипты каждой страницы, только они должны загружаться в html
  * [libs](static/libs) - сторонние библиотеки
  * [modules](static/modules) - скрипты отдельных приложений, например чат, окно входа и т.д. Структура папки может отличаться от используемой архитектуры и фреймворка
  * [require](static/require) - модули requirejs, например для динамической подгрузки css виджетов
  * [styles](static/styles) - стили 
  * [build.js](static/build.js) - настройки компиляции проекта для прода, сжатие всех скриптов и css в один файл
  * [common.js](static/common.js) - настройки requirejs
  * [require.js](static/require.js) - библиотека requirejs
* [static_build](static_build) - папка куда складываются сжатые, скомпилированные ресурсы для `production`
* [Gruntfile.js](Gruntfile.js) - задачи grunt, очистка build папки, компиляция проекта
* [package.json](package.json) - зависимости npm 

## Компиляция проекта
Из корневой папки запустить `node_modules/.bin/grunt` 
