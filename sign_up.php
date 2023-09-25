<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
		body {
			background-color: #f2f2f2;
		}
		.form-container {
			background-color: #fff;
			margin-top: 50px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		.form-container h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		.form-group label {
			font-weight: bold;
		}
		.form-group input {
			border-radius: 5px;
			padding: 10px;
			border: 1px solid #ccc;
			width: 100%;
			margin-bottom: 20px;
		}
		.form-group select {
			border-radius: 5px;
			padding: 10px;
			border: 1px solid #ccc;
			width: 100%;
			margin-bottom: 20px;
		}
		.btn-register {
			background-color: #007bff;
			color: #fff;
			border-radius: 5px;
			padding: 10px 20px;
			border: none;
			cursor: pointer;
		}
		.btn-register:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="form-container">
					<h2>Đăng ký tài khoản</h2>
					<form>
						<div class="form-group">
							<label>Họ và tên:</label>
							<input type="text" name="fullname" required>
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" required>
						</div>
						<div class="form-group">
							<label>Mật khẩu:</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu:</label>
							<input type="password" name="confirm_password" required>
						</div>
                        <div class="form-group">
                            <label for="">Email của bạn:</label>
                            <input type="email" name="email" required>
                        </div>
						<div class="form-group">
							<label>Giới tính:</label>
							<select name="gender" required>
								<option value="">--Chọn giới tính--</option>
								<option value="male">Nam</option>
								<option value="female">Nữ</option>
								<option value="other">Khác</option>
							</select>
						</div>
						<div class="form-group">
							<label>Ngày sinh:</label>
							<input type="date" name="dob" required>
						</div>
						<button type="submit" class="summit">Đăng ký</button>
