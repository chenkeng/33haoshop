<?php
/**
 * The AJAX call member information
 *
 *
 *
 * * @随行商城 (c) 2015-2018 shopsx Inc. (http://www.intexh.com)
 * @license    http://www.33 hao.c om
 * @link       交流群号：138182377
 * @since      随行商城提供技术支持 授权请购买随行商城授权
 */

class member_cardControl extends BaseCircleControl{
    public function mcard_infoOp(){
        $uid    = intval($_GET['uid']);
        $member_list = Model()->table('circle_member')->field('member_id,circle_id,circle_name,cm_level,cm_exp')->where(array('member_id'=>$uid,'cm_state'=>1))->select();
        if(empty($member_list)){
            echo 'false';exit;
        }
        echo json_encode($member_list);exit;
    }
}
