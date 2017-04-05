<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Role;
use App\User;
use App\Permission;
use App\RoleUser;
use App\PermissionRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        Model::reguard();
    }
}

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("permission_role")->delete();

//        for ($j = 1; $j < 6; $j++) {
//            PermissionRole::create(["permission_id" => $j, "role_id" => 1]);
//        }
//
//        for ($i = 2; $i < 3; $i++) {
//            for ($j = 12; $j < 6; $j++) {
//                PermissionRole::create(["permission_id" => $j, "role_id" => 2]);
//            }
//        }

        /**
         * 权限role
         */
        for ($role = 1; $role <= 2; $role++) {
            for ($permission = 1; $permission <= 6; $permission++) {
                PermissionRole::create(["permission_id" => $permission, "role_id" => $role]);
            }
        }
    }
}

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("role_user")->delete();

        RoleUser::create(["user_id" => 1, "role_id" => 1]);
        RoleUser::create(["user_id" => 2, "role_id" => 2]);
        RoleUser::create(["user_id" => 3, "role_id" => 2]);
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->delete();

        User::create(["name" => "admin", "email" => "admin@admin.com", "password" => bcrypt(123456)]);
        User::create(["name" => "leng", "email" => "leng@admin.com", "password" => bcrypt(123456)]);
        User::create(["name" => "fu", "email" => "fu@admin.com", "password" => bcrypt(123456)]);
    }
}

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("menus")->delete();

//        Menu::create(["parent_id" => "0", "name" => "权限管理", "url" => "permission.index", "description" => "管理权限的新增、编辑、删除"]);
//        Menu::create(["parent_id" => "7", "name" => "权限列表", "url" => "permission.index", "description" => "管理权限的新增、编辑、删除"]);
//        Menu::create(["parent_id" => "7", "name" => "新增权限", "url" => "permission.create", "description" => "新增权限的页面"]);
//        Menu::create(["parent_id" => "7", "name" => "编辑权限", "url" => "permission.edit", "description" => "编辑权限的页面", "is_hide" => 1]);

        Menu::create(["parent_id" => "0", "name" => "首页管理", "url" => "index", "description" => "展示系统的各项基础数据"]); //id：1

//        Menu::create(["parent_id" => "0", "name" => "系统管理", "url" => "role.index", "description" => "管理角色的新增、编辑、删除"]); // id:2
//        Menu::create(["parent_id" => "2", "name" => "角色列表", "url" => "role.index", "description" => "管理角色的新增、编辑、删除"]);
//        Menu::create(["parent_id" => "2", "name" => "新增角色", "url" => "role.create", "description" => "新增角色的页面", "is_hide" => 1]);
//        Menu::create(["parent_id" => "2", "name" => "编辑角色", "url" => "role.edit", "description" => "编辑角色的页面", "is_hide" => 1]);
//        Menu::create(["parent_id" => "2", "name" => "角色赋权", "url" => "role.show", "description" => "编辑角色的页面", "is_hide" => 1]);
//
//        Menu::create(["parent_id" => "2", "name" => "用户列表", "url" => "user.index", "description" => "管理用户的新增、编辑、删除"]);
//        Menu::create(["parent_id" => "2", "name" => "新增用户", "url" => "user.create", "description" => "新增用户的页面", "is_hide" => 1]);
//        Menu::create(["parent_id" => "2", "name" => "编辑用户", "url" => "user.edit", "description" => "编辑用户的页面", "is_hide" => 1]);

        Menu::create(["parent_id" => "0", "name" => "系统管理", "url" => "system.index", "description" => ""]); //id:2
        Menu::create(["parent_id" => "2", "name" => "菜单管理", "url" => "menu.index", "description" => ""]);

    }
}

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("roles")->delete();

        Role::create(["name" => "admin", "display_name" => "User Administrator", "description" => "User is allowed to manage and edit other users"]);
        Role::create(["name" => "owner", "display_name" => "Project Owner", "description" => "User is the owner of a given project"]);
    }
}

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("permissions")->delete();

        Permission::create(["display_name" => "首页管理", "name" => "index"]); // id:1

        Permission::create(["display_name" => "系统管理", "name" => "system.index"]); // id:2
        Permission::create(["display_name" => "菜单列表", "name" => "menu.index"]);
        Permission::create(["display_name" => "新增菜单", "name" => "menu.create"]);
        Permission::create(["display_name" => "编辑菜单", "name" => "menu.edit"]);
        Permission::create(["display_name" => "删除菜单", "name" => "menu.show"]);
        
        // id:37
    }
}
