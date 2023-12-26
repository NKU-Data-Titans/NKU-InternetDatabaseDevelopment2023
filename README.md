# NKU-InternetDatabaseDevelopment2023

![License](https://img.shields.io/badge/License-GPL--3.0-yellow)

南开大学2023互联网数据库开发课程大作业

> We are NKU-Data-Titans, we build impossible out of nothing.

## 部署说明

可以参考 `部署文档` 进行部署。

也可以采用 `composer` 进行部署：

在 `yii2` 文件夹下，运行 `composer install` 安装依赖。

```bash
composer install
```

该命令会读取 `composer.json` 和 `composer.lock` 文件，下载并安装所有列出的依赖到 `vendor` 文件夹。如果 `vendor` 文件夹不存在，它会被自动创建。

**需要注意的是**，本项目仓库中已经包含了 `vendor` 文件夹，如果不想麻烦也可以直接使用本项目的 `vendor` 文件夹，因此也可以直接按照 `部署文档` 进行，而不采用 `composer` 。

<!-- 在 `yii2` 文件夹下，运行 `php init` 初始化项目。

```bash
php init
```

在 `yii2` 文件夹下，运行 `php yii migrate` 进行数据库迁移。

```bash
php yii migrate
```

在 `yii2` 文件夹下，运行 `php yii serve` 启动服务器。

```bash
php yii serve
``` -->
