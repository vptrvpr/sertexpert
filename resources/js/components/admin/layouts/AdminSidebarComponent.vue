<template>
    <!-- partial -->

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <span class="menu-title">Статьи</span>
                    <i class="mdi mdi-calendar-text menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/create-article">
                    <span class="menu-title">Новая статья</span>
                    <i class="mdi mdi-calendar-multiple-check menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/questions">
                    <span class="menu-title">Вопросы</span>
                    <i class="mdi mdi-help menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/contacts">
                    <span class="menu-title">Контакты</span>
                    <i class="mdi mdi-account-convert menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {

    }
</script>
