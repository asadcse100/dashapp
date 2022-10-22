<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB;

class ExpertList extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'category_id' => 1,
        'subcategory_id' => -1
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $category_id = $this->config['category_id'];
        $subcategory_id = $this->config['subcategory_id'];

        $data = [];
        if(!empty($category_id) && $subcategory_id > 0 ){
            $data['expert_list'] = DB::select('select * from users u
            INNER join user_profiles up on up.user_id=u.id
            inner join freelancer_services fs on fs.user_id= u.id
            where fs.product_category_id=? and product_service_id= ? LIMIT 8', [$category_id, $subcategory_id]);
        }elseif(!empty($category_id)){
            $data['expert_list'] = DB::select('select * from users u
            inner join professional_types pt on u.professional_type_id =pt.id
            INNER join user_profiles up on up.user_id=u.id
            where pt.category_id=? LIMIT 8', [$category_id]);

        }else{
            return false;
        }


        //-- // this query will be in use when no subquery
        // select * from users u
        // inner join professional_types pt on u.professional_type_id =pt.id
        // INNER join user_profiles up on up.user_id=u.id
        // where pt.category_id=?
        // ;
        //
        // -- // this query will be in use when  sub service has been provided
        // select * from users u
        // -- inner join professional_types pt on u.professional_type_id =pt.id
        // INNER join user_profiles up on up.user_id=u.id
        // inner join freelancer_services fs on fs.user_id= u.id
        // where fs.product_category_id=? and product_service_id= ?;
        ///

        return view('widgets.expert_list', $data);
    }
}
