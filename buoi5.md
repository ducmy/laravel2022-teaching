## Buổi 5

Bài tập:
1.
- Viết lại định nghĩa của các thư mục trong laravel (mỗi thư mục dùng cho mục đích gì)

. theo folder
. theo files


### Route Groups

- Những route được gom chưng một nhóm nhóm và những route này có chung một đặc điểm gì đó? (middleware)


### Middle ware
- dùng để giới hạn truy cập của người
- Hạn chế quyền truy cập dựa vào phân quyền

## Path prefixes
- Tiền tố

```php
// Path Prefixes
Route::prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return 'dashboard/';
    });

    Route::get('/users', function() {
        return '/dashboard/user';
    });

    Route::get('/message',function(){
        return '/dashboard/message';
    });

});

```

