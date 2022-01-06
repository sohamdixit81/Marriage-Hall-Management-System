<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: right;
        margin-right: 30px;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
        background-color: #111;
    }
</style>
<ul>
     <li><a href="admin.php?option=logout">logout</a></li>
    <li><a href="admin.php?option=display">Display List</a>
     <li><a href="admin.php?option=user">Display Users</a></li>
    <li><a href="admin.php">Home</a></li>
</ul>