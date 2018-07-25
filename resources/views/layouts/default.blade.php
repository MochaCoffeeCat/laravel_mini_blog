<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Mini Blog') - Mini Blog</title>
</head>
<body>
	{{-- 此内容将会被继承自default视图的子视图定义 --}}
	@yield('content')
</body>
</html>