<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:102:"D:\phpstudy\phpstudy_pro\WWW\homestay\homestay-admin\public/../application/index\view\index\lists.html";i:1618481652;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $person["name"]; ?>
index---Index---lists
<ul>
    <?php if(is_array($skill) || $skill instanceof \think\Collection || $skill instanceof \think\Paginator): $i = 0; $__LIST__ = $skill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <li><?php echo $item; ?></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<ul>
    <?php if(is_array($student) || $student instanceof \think\Collection || $student instanceof \think\Paginator): $i = 0; $__LIST__ = $student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <li><?php echo $item['name']; ?>  <?php echo $item['sex']; ?></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>
</html>