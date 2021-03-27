# softdd/requestlog
生成open api文档
## Installation
```bash
composer require softdd/docmaker
php artisan vendor:publish --provider="SoftDD\DocMaker\DocMakerServiceProvider
```
该扩展仅仅是对zircote/swagger-php的包装

### 配置说明
```php
//softDDRequestLog.php
return [
    'apiScanPath'=>app_path()."/Api",
    'docType'=>'json', //json or yaml
    'docPath'=>storage_path('docs')."/doc.json",
    'uri'=>'/api/docs',
    'middleware'=>[],
];
```
- apiScanPath 生成文档需要扫描的目录
- docType  生成文档的类型, json or yaml
- docPath  稳定保存的目录，注意需要有读写权限
- uri 访问文档的路径，注意不可和已经路由冲突。force参数可强制更新
- middleware 文档路由的中间件，可增加相关处理，比如授权等。默认为空
