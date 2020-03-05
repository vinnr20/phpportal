<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class=" nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-tasks"></i>
            <span>&nbsp; Checklist Engineer</span>
        </a>
    </li>
    <li class=" nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/shift') ?>">
            <i class="fas fa-users"></i>
            <span>&nbsp; Shift Engineer</span>
        </a>
    </li>
</ul>