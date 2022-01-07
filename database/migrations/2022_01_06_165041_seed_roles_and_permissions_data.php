<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeedRolesAndPermissionsData extends Migration
{
    public function up()
    {
        // 需清除缓存，否则会报错
        app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // 先创建权限
        $permissions = [
            [
                "name" => "控制台",
                "guard_name" => "api",
                "uri" => "Admin/Index/index",
                "pid" => 0
            ],
            [
                "name" => "系统设置",
                "guard_name" => "api",
                "uri" => "Admin/Conf",
                "pid" => 0
            ],
            [
                "name" => "菜单管理",
                "guard_name" => "api",
                "uri" => "Admin/Menu/index",
                "pid" => 2
            ],
            [
                "name" => "基本设置",
                "guard_name" => "api",
                "uri" => "Admin/SysConfig/index",
                "pid" => 2
            ],
            [
                "name" => "内容管理",
                "guard_name" => "api",
                "uri" => "Admin/Article",
                "pid" => 0
            ],
            [
                "name" => "栏目管理",
                "guard_name" => "api",
                "uri" => "Admin/Category/manage",
                "pid" => 5
            ],
            [
                "name" => "文章管理",
                "guard_name" => "api",
                "uri" => "Admin/Article/mange",
                "pid" => 5
            ],
            [
                "name" => "广告管理",
                "guard_name" => "api",
                "uri" => "Admin/Ad/manage",
                "pid" => 5
            ],
            [
                "name" => "权限设置",
                "guard_name" => "api",
                "uri" => "Admin/Rule",
                "pid" => 0
            ],
            [
                "name" => "权限管理",
                "guard_name" => "api",
                "uri" => "Admin/Rule/mange",
                "pid" => 9
            ],
            [
                "name" => "权限列表",
                "guard_name" => "api",
                "uri" => "Admin/Rule/index",
                "pid" => 10
            ],
            [
                "name" => "添加权限",
                "guard_name" => "api",
                "uri" => "Admin/Rule/add",
                "pid" => 10
            ],
            [
                "name" => "修改权限",
                "guard_name" => "api",
                "uri" => "Admin/Rule/edit",
                "pid" => 10
            ],
            [
                "name" => "删除权限",
                "guard_name" => "api",
                "uri" => "Admin/Rule/delete",
                "pid" => 10
            ],
            [
                "name" => "用户组管理",
                "guard_name" => "api",
                "uri" => "Admin/Rule/group_manage",
                "pid" => 9
            ],
            [
                "name" => "用户组列表",
                "guard_name" => "api",
                "uri" => "Admin/Rule/group",
                "pid" => 15
            ],
            [
                "name" => "添加用户组",
                "guard_name" => "api",
                "uri" => "Admin/Rule/add_group",
                "pid" => 15
            ],
            [
                "name" => "修改用户组",
                "guard_name" => "api",
                "uri" => "Admin/Rule/edit_group",
                "pid" => 15
            ],
            [
                "name" => "删除用户组",
                "guard_name" => "api",
                "uri" => "Admin/Rule/delete_group",
                "pid" => 15
            ],
            [
                "name" => "管理员管理",
                "guard_name" => "api",
                "uri" => "Admin/Rule/user_manage",
                "pid" => 9
            ],
            [
                "name" => "管理员列表",
                "guard_name" => "api",
                "uri" => "Admin/Rule/user",
                "pid" => 20
            ],
            [
                "name" => "分配权限",
                "guard_name" => "api",
                "uri" => "Admin/Rule/rule_group",
                "pid" => 15
            ],
            [
                "name" => "添加管理员",
                "guard_name" => "api",
                "uri" => "Admin/Rule/add_user",
                "pid" => 20
            ],
            [
                "name" => "添加成员",
                "guard_name" => "api",
                "uri" => "Admin/Rule/check_user",
                "pid" => 15
            ],
            [
                "name" => "修改管理员",
                "guard_name" => "api",
                "uri" => "Admin/Rule/edit_user",
                "pid" => 20
            ],
            [
                "name" => "栏目列表",
                "guard_name" => "api",
                "uri" => "Admin/Category/index",
                "pid" => 6
            ],
            [
                "name" => "添加栏目",
                "guard_name" => "api",
                "uri" => "Admin/Category/add",
                "pid" => 6
            ],
            [
                "name" => "修改栏目",
                "guard_name" => "api",
                "uri" => "Admin/Category/edit",
                "pid" => 6
            ],
            [
                "name" => "删除栏目",
                "guard_name" => "api",
                "uri" => "Admin/Category/del",
                "pid" => 6
            ],
            [
                "name" => "文章列表",
                "guard_name" => "api",
                "uri" => "Admin/Article/index",
                "pid" => 7
            ],
            [
                "name" => "添加文章",
                "guard_name" => "api",
                "uri" => "Admin/Article/add",
                "pid" => 7
            ],
            [
                "name" => "修改文章",
                "guard_name" => "api",
                "uri" => "Admin/Article/edit",
                "pid" => 7
            ],
            [
                "name" => "删除文章",
                "guard_name" => "api",
                "uri" => "Admin/Article/del",
                "pid" => 7
            ],
            [
                "name" => "广告列表",
                "guard_name" => "api",
                "uri" => "Admin/Ad/index",
                "pid" => 8
            ],
            [
                "name" => "添加广告",
                "guard_name" => "api",
                "uri" => "Admin/Ad/add",
                "pid" => 8
            ],
            [
                "name" => "修改广告",
                "guard_name" => "api",
                "uri" => "Admin/Ad/edit",
                "pid" => 8
            ],
            [
                "name" => "删除广告",
                "guard_name" => "api",
                "uri" => "Admin/Ad/del",
                "pid" => 8
            ],
            [
                "name" => "销售",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo",
                "pid" => 0
            ],
            [
                "name" => "订单管理",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/manage",
                "pid" => 38
            ],
            [
                "name" => "订单审核",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/check",
                "pid" => 39
            ],
            [
                "name" => "客户信息管理",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/manage",
                "pid" => 38
            ],
            [
                "name" => "客户信息列表",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/index",
                "pid" => 41
            ],
            [
                "name" => "客户详细信息",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/detail",
                "pid" => 41
            ],
            [
                "name" => "添加客户信息",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/add",
                "pid" => 41
            ],
            [
                "name" => "编辑客户信息",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/edit",
                "pid" => 41
            ],
            [
                "name" => "编辑客户接待记录",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/receive",
                "pid" => 41
            ],
            [
                "name" => "删除客户信息",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/del",
                "pid" => 41
            ],
            [
                "name" => "日志管理",
                "guard_name" => "api",
                "uri" => "Admin/OperationLog",
                "pid" => 0
            ],
            [
                "name" => "购墓人信息管理",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/mange",
                "pid" => 38
            ],
            [
                "name" => "购墓人信息列表",
                "guard_name" => "api",
                "uri" => "Admin/CustomerInformation/purchaser",
                "pid" => 49
            ],
            [
                "name" => "添加客户接待记录",
                "guard_name" => "api",
                "uri" => "Admin/Record/add",
                "pid" => 41
            ],
            [
                "name" => "客户接待记录",
                "guard_name" => "api",
                "uri" => "Admin/Record/manage",
                "pid" => 38
            ],
            [
                "name" => "客户接待记录列表",
                "guard_name" => "api",
                "uri" => "Admin/Record/index",
                "pid" => 52
            ],
            [
                "name" => "编辑客户接待记录2",
                "guard_name" => "api",
                "uri" => "Admin/Record/edit",
                "pid" => 52
            ],
            [
                "name" => "删除客户接待记录",
                "guard_name" => "api",
                "uri" => "Admin/Record/del",
                "pid" => 52
            ],
            [
                "name" => "订单详细信息",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/info",
                "pid" => 39
            ],
            [
                "name" => "订单列表",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/index",
                "pid" => 39
            ],
            [
                "name" => "修改订单备注",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/editnote",
                "pid" => 39
            ],
            [
                "name" => "修改价格",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/editprice",
                "pid" => 39
            ],
            [
                "name" => "修改使用时间",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/editusetime",
                "pid" => 39
            ],
            [
                "name" => "订单打折",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/discount",
                "pid" => 39
            ],
            [
                "name" => "订单收款",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/pay",
                "pid" => 39
            ],
            [
                "name" => "选择支付方式",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/editpaytype",
                "pid" => 39
            ],
            [
                "name" => "确认订单",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/process",
                "pid" => 39
            ],
            [
                "name" => "废弃订单",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/del",
                "pid" => 39
            ],
            [
                "name" => "逝者信息管理",
                "guard_name" => "api",
                "uri" => "Admin/TombDead/manage",
                "pid" => 38
            ],
            [
                "name" => "添加使用人信息",
                "guard_name" => "api",
                "uri" => "Admin/TombDead/process",
                "pid" => 66
            ],
            [
                "name" => "逝者信息列表",
                "guard_name" => "api",
                "uri" => "Admin/TombDead/index",
                "pid" => 66
            ],
            [
                "name" => "编辑逝者",
                "guard_name" => "api",
                "uri" => "Admin/TombDead/edit",
                "pid" => 66
            ],
            [
                "name" => "碑文管理",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/manage",
                "pid" => 38
            ],
            [
                "name" => "碑文列表",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/fontlist",
                "pid" => 70
            ],
            [
                "name" => "碑文详细信息",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/detail",
                "pid" => 70
            ],
            [
                "name" => "确认碑文已刻出",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/updConfirm",
                "pid" => 70
            ],
            [
                "name" => "商品销售管理",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/manage",
                "pid" => 38
            ],
            [
                "name" => "销售商品列表",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/shop",
                "pid" => 74
            ],
            [
                "name" => "购买商品",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/shoporder",
                "pid" => 74
            ],
            [
                "name" => "打印墓证",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/printcard",
                "pid" => 39
            ],
            [
                "name" => "影雕管理",
                "guard_name" => "api",
                "uri" => "Admin/TombShadow/manage",
                "pid" => 38
            ],
            [
                "name" => "影雕列表",
                "guard_name" => "api",
                "uri" => "Admin/TombShadow/shadowlist",
                "pid" => 78
            ],
            [
                "name" => "确认影雕完成",
                "guard_name" => "api",
                "uri" => "Admin/TombShadow/updTime",
                "pid" => 78
            ],
            [
                "name" => "编辑影雕记录",
                "guard_name" => "api",
                "uri" => "Admin/TombShadow/edit",
                "pid" => 78
            ],
            [
                "name" => "编辑影雕",
                "guard_name" => "api",
                "uri" => "Admin/TombShadow/doedit",
                "pid" => 78
            ],
            [
                "name" => "墓位信息管理",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition",
                "pid" => 0
            ],
            [
                "name" => "墓位管理",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/manage",
                "pid" => 83
            ],
            [
                "name" => "墓位列表",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/index",
                "pid" => 84
            ],
            [
                "name" => "可视化列表",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/visual",
                "pid" => 84
            ],
            [
                "name" => "删除墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/delete",
                "pid" => 84
            ],
            [
                "name" => "批量删除墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/deltomb",
                "pid" => 100
            ],
            [
                "name" => "可视化编辑墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/edittomb",
                "pid" => 84
            ],
            [
                "name" => "业务操作中预留保留墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/updateStatus",
                "pid" => 84
            ],
            [
                "name" => "业务操作2",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/option",
                "pid" => 84
            ],
            [
                "name" => "墓位中编辑墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/update",
                "pid" => 84
            ],
            [
                "name" => "一墓一档",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/detail",
                "pid" => 84
            ],
            [
                "name" => "关联购墓人",
                "guard_name" => "api",
                "uri" => "Admin/TombPosition/process",
                "pid" => 84
            ],
            [
                "name" => "大区管理",
                "guard_name" => "api",
                "uri" => "Admin/TombType/manage",
                "pid" => 83
            ],
            [
                "name" => "大区列表",
                "guard_name" => "api",
                "uri" => "Admin/TombType/index",
                "pid" => 95
            ],
            [
                "name" => "添加大区",
                "guard_name" => "api",
                "uri" => "Admin/TombType/add",
                "pid" => 95
            ],
            [
                "name" => "修改大区",
                "guard_name" => "api",
                "uri" => "Admin/TombType/edit",
                "pid" => 95
            ],
            [
                "name" => "删除大区",
                "guard_name" => "api",
                "uri" => "Admin/TombType/del",
                "pid" => 95
            ],
            [
                "name" => "墓区管理",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/manage",
                "pid" => 83
            ],
            [
                "name" => "墓区列表",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/index",
                "pid" => 100
            ],
            [
                "name" => "添加墓区",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/addTombCategory",
                "pid" => 100
            ],
            [
                "name" => "批量添加墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/addtomb",
                "pid" => 100
            ],
            [
                "name" => "编辑墓区",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/edit",
                "pid" => 100
            ],
            [
                "name" => "删除墓区",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/del",
                "pid" => 100
            ],
            [
                "name" => "墓碑管理",
                "guard_name" => "api",
                "uri" => "Admin/TombStone/manage",
                "pid" => 83
            ],
            [
                "name" => "碑形列表",
                "guard_name" => "api",
                "uri" => "Admin/TombStone/index",
                "pid" => 106
            ],
            [
                "name" => "添加碑形",
                "guard_name" => "api",
                "uri" => "Admin/TombStone/addTombStone",
                "pid" => 106
            ],
            [
                "name" => "修改碑形",
                "guard_name" => "api",
                "uri" => "Admin/TombStone/edit",
                "pid" => 106
            ],
            [
                "name" => "删除碑形",
                "guard_name" => "api",
                "uri" => "Admin/TombStone/del",
                "pid" => 106
            ],
            [
                "name" => "碑文模版管理",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/manage",
                "pid" => 83
            ],
            [
                "name" => "碑文模版分类列表",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/index",
                "pid" => 111
            ],
            [
                "name" => "添加碑文模版分类",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/add",
                "pid" => 111
            ],
            [
                "name" => "编辑碑文模版分类",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/edit",
                "pid" => 111
            ],
            [
                "name" => "碑文模版分类详情",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/detail",
                "pid" => 111
            ],
            [
                "name" => "删除碑文模版",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/delete",
                "pid" => 111
            ],
            [
                "name" => "编辑碑文模版",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/detailCom",
                "pid" => 111
            ],
            [
                "name" => "商品管理",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory",
                "pid" => 0
            ],
            [
                "name" => "商品分类管理",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory/manage",
                "pid" => 118
            ],
            [
                "name" => "分类列表",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory/index",
                "pid" => 119
            ],
            [
                "name" => "添加分类",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory/add",
                "pid" => 119
            ],
            [
                "name" => "修改分类",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory/edit",
                "pid" => 119
            ],
            [
                "name" => "删除分类",
                "guard_name" => "api",
                "uri" => "Admin/ShopCategory/del",
                "pid" => 119
            ],
            [
                "name" => "商品信息管理",
                "guard_name" => "api",
                "uri" => "Admin/ShopGood/manage",
                "pid" => 118
            ],
            [
                "name" => "商品信息列表",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/index",
                "pid" => 124
            ],
            [
                "name" => "商品信息添加",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/add",
                "pid" => 124
            ],
            [
                "name" => "商品信息详情",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/goodsInfo",
                "pid" => 124
            ],
            [
                "name" => "删除商品信息",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/del",
                "pid" => 124
            ],
            [
                "name" => "商品信息恢复",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/update",
                "pid" => 124
            ],
            [
                "name" => "商品信息修改",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/edit",
                "pid" => 124
            ],
            [
                "name" => "商品进出货记录",
                "guard_name" => "api",
                "uri" => "Admin/ShopGoods/stocklist",
                "pid" => 124
            ],
            [
                "name" => "库存管理",
                "guard_name" => "api",
                "uri" => "Admin/ShopStock/manage",
                "pid" => 118
            ],
            [
                "name" => "库存列表",
                "guard_name" => "api",
                "uri" => "Admin/ShopStock/index",
                "pid" => 132
            ],
            [
                "name" => "商品操作",
                "guard_name" => "api",
                "uri" => "Admin/ShopStock/addgoods",
                "pid" => 132
            ],
            [
                "name" => "批量入库",
                "guard_name" => "api",
                "uri" => "Admin/ShopStock/add",
                "pid" => 132
            ],
            [
                "name" => "业务管理",
                "guard_name" => "api",
                "uri" => "Admin/TombBury",
                "pid" => 0
            ],
            [
                "name" => "预葬记录管理",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/manage",
                "pid" => 136
            ],
            [
                "name" => "预葬记录列表",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/index",
                "pid" => 137
            ],
            [
                "name" => "预定安葬日期",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/process",
                "pid" => 137
            ],
            [
                "name" => "修改预葬记录",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/prebury",
                "pid" => 137
            ],
            [
                "name" => "取消预葬",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/del",
                "pid" => 137
            ],
            [
                "name" => "确认安葬",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/dobury",
                "pid" => 137
            ],
            [
                "name" => "安葬记录管理",
                "guard_name" => "api",
                "uri" => "Admin/TombBury/bury",
                "pid" => 137
            ],
            [
                "name" => "定制碑文",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/index",
                "pid" => 70
            ],
            [
                "name" => "首页",
                "guard_name" => "api",
                "uri" => "Admin/Index/controlindex",
                "pid" => 1
            ],
            [
                "name" => "碑文图片上传",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/imageupload",
                "pid" => 70
            ],
            [
                "name" => "自定义碑文",
                "guard_name" => "api",
                "uri" => "Admin/TombStonefont/fabric",
                "pid" => 70
            ],
            [
                "name" => "打印墓位收据",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/tombReceipt",
                "pid" => 39
            ],
            [
                "name" => "打印墓证收据",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/tombCardReceipt",
                "pid" => 39
            ],
            [
                "name" => "打印定金收据",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/bookreceipt",
                "pid" => 39
            ],
            [
                "name" => "打印商品收据",
                "guard_name" => "api",
                "uri" => "Admin/OrderInfo/goodsreceipt",
                "pid" => 39
            ],
            [
                "name" => "编辑墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/edittomb",
                "pid" => 100
            ],
            [
                "name" => "代销员管理",
                "guard_name" => "api",
                "uri" => "Admin/Agent/manage",
                "pid" => 9
            ],
            [
                "name" => "代销员列表",
                "guard_name" => "api",
                "uri" => "Admin/Agent/index",
                "pid" => 153
            ],
            [
                "name" => "添加代销员",
                "guard_name" => "api",
                "uri" => "Admin/Agent/add",
                "pid" => 153
            ],
            [
                "name" => "代销员编辑",
                "guard_name" => "api",
                "uri" => "Admin/Agent/edit",
                "pid" => 153
            ],
            [
                "name" => "销售统计",
                "guard_name" => "api",
                "uri" => "Admin/SalesStatistics/index",
                "pid" => 38
            ],
            [
                "name" => "退墓管理",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/manage",
                "pid" => 38
            ],
            [
                "name" => "退墓列表",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/index",
                "pid" => 158
            ],
            [
                "name" => "墓位退墓/退定金",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/refund",
                "pid" => 158
            ],
            [
                "name" => "确认退墓",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/confirmRefund",
                "pid" => 158
            ],
            [
                "name" => "确认退定金",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/confirmRefundbook",
                "pid" => 158
            ],
            [
                "name" => "退墓详情",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/info",
                "pid" => 158
            ],
            [
                "name" => "取消退墓\\退定金",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/cancelRefund",
                "pid" => 158
            ],
            [
                "name" => "打印退墓单",
                "guard_name" => "api",
                "uri" => "Admin/RefundTomb/tombFefundPrint",
                "pid" => 158
            ],
            [
                "name" => "退款管理",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/manage",
                "pid" => 38
            ],
            [
                "name" => "退款列表",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/index",
                "pid" => 166
            ],
            [
                "name" => "商品退款",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/refundgoods",
                "pid" => 166
            ],
            [
                "name" => "确认商品退款",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/refundoption",
                "pid" => 166
            ],
            [
                "name" => "退款详情",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/info",
                "pid" => 166
            ],
            [
                "name" => "打印退款单",
                "guard_name" => "api",
                "uri" => "Admin/RefundGoods/goodsFefundPrint",
                "pid" => 166
            ],
            [
                "name" => "欠款管理",
                "guard_name" => "api",
                "uri" => "Admin/Arrears/manage",
                "pid" => 38
            ],
            [
                "name" => "订单欠款列表",
                "guard_name" => "api",
                "uri" => "Admin/Arrears/index",
                "pid" => 172
            ],
            [
                "name" => "拖延欠款期限",
                "guard_name" => "api",
                "uri" => "Admin/Arrears/editUsetime",
                "pid" => 172
            ],
            [
                "name" => "寄存骨灰",
                "guard_name" => "api",
                "uri" => "Admin/Deposit",
                "pid" => 0
            ],
            [
                "name" => "寄存室管理",
                "guard_name" => "api",
                "uri" => "Admin/DepositType/manage",
                "pid" => 175
            ],
            [
                "name" => "添加寄存室",
                "guard_name" => "api",
                "uri" => "Admin/DepositType/add",
                "pid" => 176
            ],
            [
                "name" => "修改寄存室",
                "guard_name" => "api",
                "uri" => "Admin/DepositType/edit",
                "pid" => 176
            ],
            [
                "name" => "寄存室列表",
                "guard_name" => "api",
                "uri" => "Admin/DepositType/index",
                "pid" => 176
            ],
            [
                "name" => "删除寄存室",
                "guard_name" => "api",
                "uri" => "Admin/DepositTYpe/del",
                "pid" => 176
            ],
            [
                "name" => "寄存区管理",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/manage",
                "pid" => 175
            ],
            [
                "name" => "寄存区列表",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/index",
                "pid" => 181
            ],
            [
                "name" => "添加寄存区",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/add",
                "pid" => 181
            ],
            [
                "name" => "编辑寄存区",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/edit",
                "pid" => 181
            ],
            [
                "name" => "删除寄存区",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/del",
                "pid" => 181
            ],
            [
                "name" => "批量添加寄存区",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/adddeposit",
                "pid" => 181
            ],
            [
                "name" => "批量修改寄存位",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/editdeposit",
                "pid" => 181
            ],
            [
                "name" => "寄存位管理",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/manage",
                "pid" => 175
            ],
            [
                "name" => "寄存位可视化",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/index",
                "pid" => 188
            ],
            [
                "name" => "编辑寄存位",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/editdeposit",
                "pid" => 188
            ],
            [
                "name" => "删除寄存位",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/deldeposit",
                "pid" => 188
            ],
            [
                "name" => "寄存骨灰盒",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/process",
                "pid" => 188
            ],
            [
                "name" => "取出骨灰盒",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/delprocess",
                "pid" => 188
            ],
            [
                "name" => "寄存管理",
                "guard_name" => "api",
                "uri" => "Admin/DepositInfo/manage",
                "pid" => 175
            ],
            [
                "name" => "骨灰寄存列表",
                "guard_name" => "api",
                "uri" => "Admin/DepositInfo/index",
                "pid" => 194
            ],
            [
                "name" => "取出骨灰盒2",
                "guard_name" => "api",
                "uri" => "Admin/DepositInfo/deldeposit",
                "pid" => 194
            ],
            [
                "name" => "编辑寄存信息",
                "guard_name" => "api",
                "uri" => "Admin/DepositInfo/editdeposit",
                "pid" => 194
            ],
            [
                "name" => "打印骨灰寄存凭证",
                "guard_name" => "api",
                "uri" => "Admin/DepositInfo/printcard",
                "pid" => 194
            ],
            [
                "name" => "预定墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/savebury",
                "pid" => 100
            ],
            [
                "name" => "批量保留墓位",
                "guard_name" => "api",
                "uri" => "Admin/TombCategory/baoliuTomb",
                "pid" => 100
            ],
            [
                "name" => "批量删除寄存位",
                "guard_name" => "api",
                "uri" => "Admin/DepositCategory/deldeposit",
                "pid" => 181
            ],
            [
                "name" => "业务操作",
                "guard_name" => "api",
                "uri" => "Admin/DepositPosition/option",
                "pid" => 188
            ],
            [
                "name" => "统计",
                "guard_name" => "api",
                "uri" => "Admin/Count",
                "pid" => 0
            ],
            [
                "name" => "接待统计",
                "guard_name" => "api",
                "uri" => "Admin/Count/recordcount",
                "pid" => 203
            ],
            [
                "name" => "销售统计2",
                "guard_name" => "api",
                "uri" => "Admin/Count/salecount",
                "pid" => 203
            ],
            [
                "name" => "墓区销售统计",
                "guard_name" => "api",
                "uri" => "Admin/Count/categorycount",
                "pid" => 203
            ],
            [
                "name" => "代销销售统计",
                "guard_name" => "api",
                "uri" => "Admin/Count/agentcount",
                "pid" => 203
            ],
            [
                "name" => "部门管理",
                "guard_name" => "api",
                "uri" => "Admin/Department/mange",
                "pid" => 9
            ],
            [
                "name" => "部门列表",
                "guard_name" => "api",
                "uri" => "Admin/Department/index",
                "pid" => 208
            ],
            [
                "name" => "添加部门",
                "guard_name" => "api",
                "uri" => "Admin/Department/add",
                "pid" => 208
            ],
            [
                "name" => "修改部门",
                "guard_name" => "api",
                "uri" => "Admin/Department/edit",
                "pid" => 208
            ],
            [
                "name" => "操作日志",
                "guard_name" => "api",
                "uri" => "Admin/OperationLog/manage",
                "pid" => 48
            ],
            [
                "name" => "删除操作日志",
                "guard_name" => "api",
                "uri" => "Admin/OperationLog/del",
                "pid" => 212
            ],
            [
                "name" => "登录日志",
                "guard_name" => "api",
                "uri" => "Admin/LoginLog/manage",
                "pid" => 48
            ],
            [
                "name" => "删除登录日志",
                "guard_name" => "api",
                "uri" => "Admin/LoginLog/del",
                "pid" => 214
            ],
            [
                "name" => "操作日志列表",
                "guard_name" => "api",
                "uri" => "Admin/OperationLog/index",
                "pid" => 212
            ],
            [
                "name" => "登录日志列表",
                "guard_name" => "api",
                "uri" => "Admin/LoginLog/index",
                "pid" => 214
            ],
            [
                "name" => "批量删除日志",
                "guard_name" => "api",
                "uri" => "Admin/LoginLog/batchDetele",
                "pid" => 214
            ],
            [
                "name" => "修改密码",
                "guard_name" => "api",
                "uri" => "Admin/Rule/editpsw",
                "pid" => 145
            ],
            [
                "name" => "设置个性头像",
                "guard_name" => "api",
                "uri" => "Admin/Rule/editphoto",
                "pid" => 145
            ],
            [
                "name" => "清除缓存",
                "guard_name" => "api",
                "uri" => "Admin/Cache/clear",
                "pid" => 145
            ],
            [
                "name" => "选项列表",
                "guard_name" => "api",
                "uri" => "Admin/SysConfig/optionList",
                "pid" => 2
            ],
            [
                "name" => "保存碑文模板",
                "guard_name" => "api",
                "uri" => "Admin/TombTemplate/save",
                "pid" => 111
            ]
        ];
        foreach ($permissions as $permission){
            Permission::create($permission);
        }


        Role::create(['name' => '系统管理员', 'guard_name' => 'api']);
        Role::create(['name' => '财务管理员', 'guard_name' => 'api']);
        Role::create(['name' => '业务管理员', 'guard_name' => 'api']);
        Role::create(['name' => '仓储管理员', 'guard_name' => 'api']);

    }

    public function down()
    {
        // 需清除缓存，否则会报错
        app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // 清空所有数据表数据
        $tableNames = config('permission.table_names');

        Model::unguard();
        DB::table($tableNames['role_has_permissions'])->delete();
        DB::table($tableNames['model_has_roles'])->delete();
        DB::table($tableNames['model_has_permissions'])->delete();
        DB::table($tableNames['roles'])->delete();
        DB::table($tableNames['permissions'])->delete();
        Model::reguard();
    }
}
