<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="nhanvien/muonsach/danhsach">Công việc nhân viên thư viện</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <?php if(isset($thongtindangnhap)): ?>
                <li><a><i class="fa fa-user fa-fw"></i> <?php echo e($thongtindangnhap->HoTen); ?></a>
                </li>
                
                <li class="divider"></li>
                <li><a href="nhanvien/dangxuat"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
                <?php endif; ?>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <?php echo $__env->make('nhanvien.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar-static-side -->
</nav><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/nhanvien/layout/header.blade.php ENDPATH**/ ?>