<?php

if (!function_exists('admin_dict')) {
    /**
     * 数据字典
     *
     * @return \Slowlyo\SlowDict\AdminDict
     */
    function admin_dict()
    {
        return app('admin.dict');
    }
}
