<?php 
namespace wstmart\admin\validate;
use think\Validate;
/**
 * ============================================================================
 * WSTMart多用户商城
 * 版权所有 2016-2066 广州商淘信息科技有限公司，并保留所有权利。
 * 官网地址:http://www.wstmart.net
 * 交流社区:http://bbs.shangtaosoft.com
 * 联系QQ:153289970
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！未经本公司授权您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * 广告位置验证器
 */
class AdPositions extends Validate{
	protected $rule = [
	    ['positionName|max:30'  ,'require','请输入位置名称|位置名称不能超过10个字符'],
	    ['positionCode|max:60'  ,'require','请输入位置代码|位置代码不能超过20个字符'],
		['positionType'  ,'require','请选择位置类型'],
	    ['positionWidth'  ,'require','请输入建议宽度'],
	    ['positionHeight'  ,'require','请输入建议高度'],
    ];

    protected $scene = [
        'add'   =>  ['positionName','positionCode','positionType','positionWidth','positionHeight'],
        'edit'  =>  ['positionName','positionCode','positionType','positionWidth','positionHeight'],
    ]; 
}