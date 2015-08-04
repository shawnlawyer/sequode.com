USE sequode_app;


UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'aggregate_info') as t2
) WHERE `name`= 'aggregation_info'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bdiff') as t2
) WHERE `name`= 'xdiff_file_diff_binary'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_file_bpatch') as t2
) WHERE `name`= 'xdiff_file_patch_binary'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'CairoMatrix::initTranslate') as t2
) WHERE `name`= 'cairo_matrix_create_translate'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'rtrim') as t2
) WHERE `name`= 'chop'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_get') as t2
) WHERE `name`= 'com_propget'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propput'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'com_set') as t2
) WHERE `name`= 'com_propset'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::add') as t2
) WHERE `name`= 'date_add'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::__construct') as t2
) WHERE `name`= 'date_create'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::createFromFormat') as t2
) WHERE `name`= 'date_create_from_format'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setDate') as t2
) WHERE `name`= 'date_date_set'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::diff') as t2
) WHERE `name`= 'date_diff'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::format') as t2
) WHERE `name`= 'date_format'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getLastErrors') as t2
) WHERE `name`= 'date_get_last_errors'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::createFromDateString') as t2
) WHERE `name`= 'date_interval_create_from_date_string'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateInterval::format') as t2
) WHERE `name`= 'date_interval_format'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setISODate') as t2
) WHERE `name`= 'date_isodate_set'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::modify') as t2
) WHERE `name`= 'date_modify'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getOffset') as t2
) WHERE `name`= 'date_offset_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::sub') as t2
) WHERE `name`= 'date_sub'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimestamp') as t2
) WHERE `name`= 'date_timestamp_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimestamp') as t2
) WHERE `name`= 'date_timestamp_set'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::getTimezone') as t2
) WHERE `name`= 'date_timezone_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTimezone') as t2
) WHERE `name`= 'date_timezone_set'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTime::setTime') as t2
) WHERE `name`= 'date_time_set'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'disk_free_space') as t2
) WHERE `name`= 'diskfreespace'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'checkdnsrr') as t2
) WHERE `name`= 'dns_check_record'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'getmxrr') as t2
) WHERE `name`= 'dns_get_mx'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'floatval') as t2
) WHERE `name`= 'doubleval'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fbsql_table_name') as t2
) WHERE `name`= 'fbsql_tablename'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'fwrite') as t2
) WHERE `name`= 'fputs'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ftp_close') as t2
) WHERE `name`= 'ftp_quit'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'get_included_files') as t2
) WHERE `name`= 'get_required_files'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gmp_div_q') as t2
) WHERE `name`= 'gmp_div'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'gzwrite') as t2
) WHERE `name`= 'gzputs'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'idn_to_utf8') as t2
) WHERE `name`= 'idn_to_unicode'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_headerinfo') as t2
) WHERE `name`= 'imap_header'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_list') as t2
) WHERE `name`= 'imap_listmailbox'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_lsub') as t2
) WHERE `name`= 'imap_listsubscribed'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'imap_listscan') as t2
) WHERE `name`= 'imap_scanmailbox'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ini_set') as t2
) WHERE `name`= 'ini_alter'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_double'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_integer'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_int') as t2
) WHERE `name`= 'is_long'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_float') as t2
) WHERE `name`= 'is_real'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'is_writable') as t2
) WHERE `name`= 'is_writeable'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'implode') as t2
) WHERE `name`= 'join'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'ldap_unbind') as t2
) WHERE `name`= 'ldap_close'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'set_magic_quotes_runtime') as t2
) WHERE `name`= 'magic_quotes_runtime'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb::close_long_data'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_param') as t2
) WHERE `name`= 'maxdb_bind_param'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_bind_result') as t2
) WHERE `name`= 'maxdb_bind_result'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_character_set_name') as t2
) WHERE `name`= 'maxdb_client_encoding'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_close_long_data') as t2
) WHERE `name`= 'maxdb_close_long_data'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_real_escape_string') as t2
) WHERE `name`= 'maxdb_escape_string'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_execute') as t2
) WHERE `name`= 'maxdb_execute'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_fetch') as t2
) WHERE `name`= 'maxdb_fetch'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_result_metadata') as t2
) WHERE `name`= 'maxdb_get_metadata'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_param_count') as t2
) WHERE `name`= 'maxdb_param_count'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_stmt_send_long_data') as t2
) WHERE `name`= 'maxdb_send_long_data'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'maxdb_options') as t2
) WHERE `name`= 'maxdb_set_opt'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_db_query') as t2
) WHERE `name`= 'msql'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_create_db') as t2
) WHERE `name`= 'msql_createdb'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_dbname'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_flags') as t2
) WHERE `name`= 'msql_fieldflags'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_len') as t2
) WHERE `name`= 'msql_fieldlen'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_name') as t2
) WHERE `name`= 'msql_fieldname'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_table') as t2
) WHERE `name`= 'msql_fieldtable'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_field_type') as t2
) WHERE `name`= 'msql_fieldtype'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_fields') as t2
) WHERE `name`= 'msql_numfields'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_num_rows') as t2
) WHERE `name`= 'msql_numrows'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sql_regcase') as t2
) WHERE `name`= 'msql_regcase'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'msql_result') as t2
) WHERE `name`= 'msql_tablename'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_character_set_name') as t2
) WHERE `name`= 'mysqli_client_encoding'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli::__construct') as t2
) WHERE `name`= 'mysqli_connect'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_real_escape_string') as t2
) WHERE `name`= 'mysqli_escape_string'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'mysqli_options') as t2
) WHERE `name`= 'mysqli_set_opt'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_import') as t2
) WHERE `name`= 'OCI-Lob::saveFile'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_lob_export') as t2
) WHERE `name`= 'OCI-Lob::writeToFile'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_bind_by_name') as t2
) WHERE `name`= 'ocibindbyname'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_cancel') as t2
) WHERE `name`= 'ocicancel'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicloselob'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollappend'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassign'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollassignelem'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollgetelem'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollmax'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicollsize'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocicolltrim'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_is_null') as t2
) WHERE `name`= 'ocicolumnisnull'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_name') as t2
) WHERE `name`= 'ocicolumnname'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_precision') as t2
) WHERE `name`= 'ocicolumnprecision'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_scale') as t2
) WHERE `name`= 'ocicolumnscale'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_size') as t2
) WHERE `name`= 'ocicolumnsize'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type') as t2
) WHERE `name`= 'ocicolumntype'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_field_type_raw') as t2
) WHERE `name`= 'ocicolumntyperaw'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_commit') as t2
) WHERE `name`= 'ocicommit'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_define_by_name') as t2
) WHERE `name`= 'ocidefinebyname'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_error') as t2
) WHERE `name`= 'ocierror'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_execute') as t2
) WHERE `name`= 'ociexecute'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch') as t2
) WHERE `name`= 'ocifetch'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_fetch_all') as t2
) WHERE `name`= 'ocifetchstatement'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreecollection'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreecursor'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocifreedesc'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_free_statement') as t2
) WHERE `name`= 'ocifreestatement'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_internal_debug') as t2
) WHERE `name`= 'ociinternaldebug'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociloadlob'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_close') as t2
) WHERE `name`= 'ocilogoff'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_connect') as t2
) WHERE `name`= 'ocilogon'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_collection') as t2
) WHERE `name`= 'ocinewcollection'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_cursor') as t2
) WHERE `name`= 'ocinewcursor'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_descriptor') as t2
) WHERE `name`= 'ocinewdescriptor'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_new_connect') as t2
) WHERE `name`= 'ocinlogon'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_fields') as t2
) WHERE `name`= 'ocinumcols'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_parse') as t2
) WHERE `name`= 'ociparse'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_pconnect') as t2
) WHERE `name`= 'ociplogon'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_result') as t2
) WHERE `name`= 'ociresult'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_rollback') as t2
) WHERE `name`= 'ocirollback'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_num_rows') as t2
) WHERE `name`= 'ocirowcount'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelob'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ocisavelobfile'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_server_version') as t2
) WHERE `name`= 'ociserverversion'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_set_prefetch') as t2
) WHERE `name`= 'ocisetprefetch'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'oci_statement_type') as t2
) WHERE `name`= 'ocistatementtype'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritelobtofile'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'Alias of') as t2
) WHERE `name`= 'ociwritetemporarylob'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_exec') as t2
) WHERE `name`= 'odbc_do'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'odbc_field_len') as t2
) WHERE `name`= 'odbc_field_precision'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_private') as t2
) WHERE `name`= 'openssl_get_privatekey'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'openssl_pkey_get_public') as t2
) WHERE `name`= 'openssl_get_publickey'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'current') as t2
) WHERE `name`= 'pos'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'posix_get_last_error') as t2
) WHERE `name`= 'posix_errno'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'exif_read_data') as t2
) WHERE `name`= 'read_exif_data'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'recode_string') as t2
) WHERE `name`= 'recode'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'session_write_close') as t2
) WHERE `name`= 'session_commit'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_write_buffer') as t2
) WHERE `name`= 'set_file_buffer'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'set_socket_blocking'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'highlight_file') as t2
) WHERE `name`= 'show_source'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SimpleXMLElement::asXML') as t2
) WHERE `name`= 'SimpleXMLElement::saveXML'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'count') as t2
) WHERE `name`= 'sizeof'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_get_meta_data') as t2
) WHERE `name`= 'socket_get_status'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_blocking') as t2
) WHERE `name`= 'socket_set_blocking'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_set_timeout') as t2
) WHERE `name`= 'socket_set_timeout'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::fgets') as t2
) WHERE `name`= 'SplFileObject::getCurrentLine'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'SplFileObject::current') as t2
) WHERE `name`= 'SplFileObject::__toString'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'sqlite_fetch_single') as t2
) WHERE `name`= 'sqlite_fetch_string'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'strstr') as t2
) WHERE `name`= 'strchr'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'stream_wrapper_register') as t2
) WHERE `name`= 'stream_register_wrapper'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bdiff') as t2
) WHERE `name`= 'xdiff_string_diff_binary'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'xdiff_string_bpatch') as t2
) WHERE `name`= 'xdiff_string_patch_binary'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listAbbreviations') as t2
) WHERE `name`= 'timezone_abbreviations_list'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::listIdentifiers') as t2
) WHERE `name`= 'timezone_identifiers_list'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getLocation') as t2
) WHERE `name`= 'timezone_location_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getName') as t2
) WHERE `name`= 'timezone_name_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getOffset') as t2
) WHERE `name`= 'timezone_offset_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::__construct') as t2
) WHERE `name`= 'timezone_open'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'DateTimeZone::getTransitions') as t2
) WHERE `name`= 'timezone_transitions_get'
 LIMIT 1; 
    

UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = 'trigger_error') as t2
) WHERE `name`= 'user_error'
 LIMIT 1; 
    
