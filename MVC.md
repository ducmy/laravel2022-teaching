# Note laravel

### 3. MVC là gì?

#### MVC?

*Model (Kiểu mẫu)

- mỗi model liên kết với một bảng trong mysql

*View (Giao diện)
- phần front-end (HTML/CSS/Javascript)

*Controller (Điều hương)

- Điều hướng những yêu cầu (request) của người dùng trả lại những kết quả mà người dùng mong muốn
- Xử lý dữ liệu của người dùng và trả về kết quả tương thích

TCP (Giao tiếp database)
SSH (truy cập qua port 22)

##### The HTTP Verbs

HTTP (Giao thức Web)
Common(thường xuyên)
- GET
  + Yêu cầu tài nguyên (lấy danh sách sản phẩm or lấy chi tiết sản phẩm)
- POST
  + Yêu cầu thêm một cái header-version
- PUT
- DELETE
- PATCH
- HEAD
- OPTIONS

BT: Nghiên cứu thêm những method khác.

Trong laravel thường sử dụng những cái method nào của giao thức HTTP:
- Hình gửi trong nhóm ()

#### REST là gì?

- The Basic of REST like JSON APIS (dùng xây dụng API)


#### Route

web.php viết trả về html

api trả về JSON

Cơ bản về Route

Thực hành 1:
Tạo route với url /đuongdanmoi trả về view kiemtra

làm với 3 route

#### Route Verbs

get
post (xử lý POST http requst method)
put (xủa put)
delete
any
match
- kết hợp get với post

##### Route Handing

```php

Route::get('/', 'WelcomeController@index');

```
##### Route Parameter

```php

Route::get('user/{id}, function($id) {
    //
})

```

##### Route Names
Đặt tên cho route

Next lession
##### Route Groups

##### middleware

path prefiex















