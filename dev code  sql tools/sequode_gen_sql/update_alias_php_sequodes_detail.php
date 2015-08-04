<?php 
$text = '
 aggregation_info()
     Alias of aggregate_info
array apache_get_modules()
     Get a list of loaded Apache modules
array apache_request_headers()
     Fetch all HTTP request headers
array apache_response_headers()
     Fetch all HTTP response headers
array apc_add(string $key [, mixed $var = `` [, int $ttl = ``, array $values [, mixed $unused = ``]]])
     Cache a variable in the data store
array apc_cache_info([string $cache_type = `` [, bool $limited = false]])
     Retrieves cached information from APC`s data store
array apc_sma_info([bool $limited = false])
     Retrieves APC`s Shared Memory Allocation information
array apc_store(string $key, mixed $var [, int $ttl = ``, array $values [, mixed $unused = ``]])
     Cache a variable in the data store
array apd_callstack()
     Returns the current call stack as an array
array apd_dump_persistent_resources()
     Return all persistent resources as an array
array apd_dump_regular_resources()
     Return all current regular resources as an array
array apd_get_active_symbols()
     Get an array of the current variables names in the local scope
array array([mixed $... = ``])
     Create an array
array ArrayIterator::current()
     Return current array entry
array ArrayIterator::getArrayCopy()
     Get array copy
array ArrayIterator::valid()
     Check whether array contains more entries
array ArrayObject::getArrayCopy()
     Creates a copy of the ArrayObject.
array array_change_key_case(array $input [, int $case = CASE_LOWER])
     Changes all keys in an array
array array_chunk(array $input, int $size [, bool $preserve_keys = false])
     Split an array into chunks
array array_combine(array $keys, array $values)
     Creates an array by using one array for keys and another for its values
array array_count_values(array $input)
     Counts all the values of an array
array array_diff(array $array1, array $array2 [, array $ ... = ``])
     Computes the difference of arrays
array array_diff_assoc(array $array1, array $array2 [, array $... = ``])
     Computes the difference of arrays with additional index check
array array_diff_key(array $array1, array $array2 [, array $... = ``])
     Computes the difference of arrays using keys for comparison
array array_diff_uassoc(array $array1, array $array2 [, array $... = ``, callback $key_compare_func])
     Computes the difference of arrays with additional index check which is performed by a user supplied callback function
array array_diff_ukey(array $array1, array $array2 [, array $ ... = ``, callback $key_compare_func])
     Computes the difference of arrays using a callback function on the keys for comparison
array array_fill(int $start_index, int $num, mixed $value)
     Fill an array with values
array array_fill_keys(array $keys, mixed $value)
     Fill an array with values, specifying keys
array array_filter(array $input [, callback $callback = ``])
     Filters elements of an array using a callback function
array array_intersect(array $array1, array $array2 [, array $ ... = ``])
     Computes the intersection of arrays
array array_intersect_assoc(array $array1, array $array2 [, array $ ... = ``])
     Computes the intersection of arrays with additional index check
array array_intersect_key(array $array1, array $array2 [, array $ ... = ``])
     Computes the intersection of arrays using keys for comparison
array array_intersect_uassoc(array $array1, array $array2 [, array $ ... = ``, callback $key_compare_func])
     Computes the intersection of arrays with additional index check, compares indexes by a callback function
array array_intersect_ukey(array $array1, array $array2 [, array $... = ``, callback $key_compare_func])
     Computes the intersection of arrays using a callback function on the keys for comparison
array array_keys(array $input [, mixed $search_value = `` [, bool $strict = false]])
     Return all the keys or a subset of the keys of an array
array array_map(callback $callback, array $arr1 [, array $... = ``])
     Applies the callback to the elements of the given arrays
array array_merge(array $array1 [, array $array2 = `` [, array $... = ``]])
     Merge one or more arrays
array array_merge_recursive(array $array1 [, array $... = ``])
     Merge two or more arrays recursively
array array_pad(array $input, int $pad_size, mixed $pad_value)
     Pad array to the specified length with a value
array array_pop(array $array)
     Pop the element off the end of array
array array_replace(array $array, array $array1 [, array $array2 = `` [, array $... = ``]])
     Replaces elements from passed arrays into the first array
array array_replace_recursive(array $array, array $array1 [, array $array2 = `` [, array $... = ``]])
     Replaces elements from passed arrays into the first array recursively
array array_reverse(array $array [, bool $preserve_keys = false])
     Return an array with elements in reverse order
array array_shift(array $array)
     Shift an element off the beginning of array
array array_slice(array $array, int $offset [, int $length = `` [, bool $preserve_keys = false]])
     Extract a slice of the array
array array_splice(array $input, int $offset [, int $length = `` [, mixed $replacement = ``]])
     Remove a portion of the array and replace it with something else
array array_udiff(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func])
     Computes the difference of arrays by using a callback function for data comparison
array array_udiff_assoc(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func])
     Computes the difference of arrays with additional index check, compares data by a callback function
array array_udiff_uassoc(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func, callback $key_compare_func])
     Computes the difference of arrays with additional index check, compares data and indexes by a callback function
array array_uintersect(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func])
     Computes the intersection of arrays, compares data by a callback function
array array_uintersect_assoc(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func])
     Computes the intersection of arrays with additional index check, compares data by a callback function
array array_uintersect_uassoc(array $array1, array $array2 [, array $ ... = ``, callback $data_compare_func, callback $key_compare_func])
     Computes the intersection of arrays with additional index check, compares data and indexes by a callback functions
array array_unique(array $array [, int $sort_flags = SORT_STRING])
     Removes duplicate values from an array
array array_values(array $input)
     Return all the values of an array
array bson_decode(string $bson)
     Deserializes a BSON object into a PHP array
array bzerror(resource $bz)
     Returns the bzip2 error number and error string in an array
array Cairo::availableFonts()
     Retrieves the availables font types
array Cairo::availableSurfaces()
     Retrieves all available surfaces
array CairoContext::clipExtents(CairoContext $context)
     Computes the area inside the current clip
array CairoContext::clipRectangleList(CairoContext $context)
     Retrieves the current clip as a list of rectangles
array CairoContext::deviceToUser(float $x, float $y, CairoContext $context)
     Transform a coordinate
array CairoContext::deviceToUserDistance(float $x, float $y, CairoContext $context)
     Transform a distance
array CairoContext::fillExtents(CairoContext $context)
     Computes the filled area
array CairoContext::fontExtents(CairoContext $context)
     Get the font extents
array CairoContext::getCurrentPoint(CairoContext $context)
     The getCurrentPoint purpose
array CairoContext::getDash(CairoContext $context)
     The getDash purpose
array CairoContext::pathExtents(CairoContext $context)
     The pathExtents purpose
array CairoContext::strokeExtents(CairoContext $context)
     The strokeExtents purpose
array CairoContext::textExtents(string $text, CairoContext $context)
     The textExtents purpose
array CairoContext::userToDevice(string $x, string $y, CairoContext $context)
     The userToDevice purpose
array CairoContext::userToDeviceDistance(string $x, string $y, CairoContext $context)
     The userToDeviceDistance purpose
array CairoGradientPattern::getColorStopRgba(string $index)
     The getColorStopRgba purpose
array CairoLinearGradient::getPoints()
     The getPoints purpose
array CairoMatrix::transformDistance(string $dx, string $dy)
     The transformDistance purpose
array CairoMatrix::transformPoint(string $dx, string $dy)
     The transformPoint purpose
array CairoPsSurface::getLevels()
     The getLevels purpose
array CairoRadialGradient::getCircles()
     The getCircles purpose
array CairoScaledFont::extents()
     The extents purpose
array CairoScaledFont::glyphExtents(string $glyphs)
     The glyphExtents purpose
array CairoScaledFont::textExtents(string $text, CairoContext $context)
     The textExtents purpose
array CairoSolidPattern::getRgba()
     The getRgba purpose
array CairoSurface::getDeviceOffset()
     The getDeviceOffset purpose
array CairoSvgSurface::getVersions()
     Used to retrieve a list of supported SVG versions
array cairo_available_fonts()
     Retrieves the availables font types
array cairo_available_surfaces()
     Retrieves all available surfaces
array cairo_clip_extents(CairoContext $context)
     Computes the area inside the current clip
array cairo_clip_rectangle_list(CairoContext $context)
     Retrieves the current clip as a list of rectangles
array cairo_device_to_user(float $x, float $y, CairoContext $context)
     Transform a coordinate
array cairo_device_to_user_distance(float $x, float $y, CairoContext $context)
     Transform a distance
array cairo_fill_extents(CairoContext $context)
     Computes the filled area
array cairo_font_extents(CairoContext $context)
     Get the font extents
array cairo_get_current_point(CairoContext $context)
     The getCurrentPoint purpose
array cairo_get_dash(CairoContext $context)
     The getDash purpose
array cairo_matrix_transform_distance(CairoMatrix $matrix, float $dx, float $dy)
     Description
array cairo_matrix_transform_point(CairoMatrix $matrix, float $dx, float $dy)
     Description
array cairo_path_extents(CairoContext $context)
     The pathExtents purpose
array cairo_pattern_get_color_stop_rgba(CairoGradientPattern $pattern, int $index)
     Description
array cairo_pattern_get_linear_points(CairoLinearGradient $pattern)
     Description
array cairo_pattern_get_radial_circles(CairoRadialGradient $pattern)
     Description
array cairo_pattern_get_rgba(CairoSolidPattern $pattern)
     Description
array cairo_ps_get_levels()
     Description
array cairo_scaled_font_extents(CairoScaledFont $scaledfont)
     Description
array cairo_scaled_font_glyph_extents(CairoScaledFont $scaledfont, array $glyphs)
     Description
array cairo_scaled_font_text_extents(CairoScaledFont $scaledfont, string $text)
     Description
array cairo_stroke_extents(CairoContext $context)
     The strokeExtents purpose
array cairo_surface_get_device_offset(CairoSurface $surface)
     Description
array cairo_svg_surface_get_versions()
     Used to retrieve a list of supported SVG versions
array cairo_text_extents(string $text, CairoContext $context)
     The textExtents purpose
array cairo_text_extents(string $text, CairoContext $context)
     The textExtents purpose
array cairo_user_to_device(string $x, string $y, CairoContext $context)
     The userToDevice purpose
array cairo_user_to_device_distance(string $x, string $y, CairoContext $context)
     The userToDeviceDistance purpose
array cal_from_jd(int $jd, int $calendar)
     Converts from Julian Day Count to a supported calendar
array cal_info([int $calendar = -1])
     Returns information about a particular calendar
array classkit_import(string $filename)
     Import new class method definitions from a file
array class_implements(mixed $class [, bool $autoload = true])
     Return the interfaces which are implemented by the given class
array class_parents(mixed $class [, bool $autoload = true])
     Return the parent classes of the given class
array compact(mixed $varname [, mixed $... = ``])
     Create array containing variables and their values
array cubrid_column_names(resource $req_identifier)
     Get the column names in result
array cubrid_column_types(resource $req_identifier)
     Get column types in result
array cubrid_col_get(resource $conn_identifier, string $oid, string $attr_name)
     Get contents of collection type column using OID
array cubrid_fetch_array(resource $result [, int $type = CUBRID_BOTH])
     Fetch a result row as an associative array, a numeric array, or both
array cubrid_fetch_assoc(resource $result)
     Return the associative array that corresponds to the fetched row
array cubrid_fetch_lengths(resource $result)
     Return an array with the lengths of the values of each field from the current row
array cubrid_fetch_row(resource $result)
     Return a numerical array with the values of the current row
array cubrid_get_db_parameter(resource $conn_identifier)
     Returns the CUBRID database parameters
array cubrid_list_dbs(resource $conn_identifier)
     Return an array with the list of all existing CUBRID databases
array cubrid_lob_get(resource $conn_identifier, string $SQL)
     Get BLOB/CLOB data
array cubrid_schema(resource $conn_identifier, int $schema_type [, string $class_name = `` [, string $attr_name = ``]])
     Get the requested schema information
array curl_multi_info_read(resource $mh [, int $msgs_in_queue = ``])
     Get information about the current transfers
array curl_version([int $age = CURLVERSION_NOW])
     Gets cURL version information
array cyrus_query(resource $connection, string $query)
     Send a query to a Cyrus IMAP server
array datefmt_localtime(string $value [, int $position = ``, IntlDateFormatter $fmt])
     Parse string to a field-based time value
array DateTime::getLastErrors()
     Returns the warnings and errors
array DateTimeZone::getLocation(DateTimeZone $object)
     Returns location information for a timezone
array DateTimeZone::getTransitions([int $timestamp_begin = `` [, int $timestamp_end = ``, DateTimeZone $object]])
     Returns all transitions for the timezone
array DateTimeZone::listAbbreviations()
     Returns associative array containing dst, offset and the timezone name
array DateTimeZone::listIdentifiers([int $what = DateTimeZone::ALL [, string $country = ``]])
     Returns numerically index array with all timezone identifiers
array date_parse(string $date)
     Returns associative array with detailed info about given date
array date_parse_from_format(string $format, string $date)
     Get info about given date formatted according to the specified format
array date_sun_info(int $time, float $latitude, float $longitude)
     Returns an array with information about sunset/sunrise and twilight begin/end
array db2_fetch_array(resource $stmt [, int $row_number = -1])
     Returns an array, indexed by column position, representing a row in a result set
array db2_fetch_assoc(resource $stmt [, int $row_number = -1])
     Returns an array, indexed by column name, representing a row in a result set
array db2_fetch_both(resource $stmt [, int $row_number = -1])
     Returns an array, indexed by both column name and position, representing a row in a result set
array dbase_get_header_info(int $dbase_identifier)
     Gets the header info of a database
array dbase_get_record(int $dbase_identifier, int $record_number)
     Gets a record from a database as an indexed array
array dbase_get_record_with_names(int $dbase_identifier, int $record_number)
     Gets a record from a database as an associative array
array dba_handlers([bool $full_info = false])
     List all the handlers available
array dba_list()
     List all open database files
array dbplus_resolve(string $relation_name)
     Resolve host information for relation
array debug_backtrace([int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT [, int $limit = ``]])
     Generates a backtrace
array dio_stat(resource $fd)
     Gets stat information about the file descriptor fd
array dns_get_record(string $hostname [, int $type = DNS_ANY [, array $authns = `` [, array $addtl = ``]]])
     Fetch DNS Resource Records associated with a hostname
array DomDocumentType::entities()
     Returns list of entities
array DomDocumentType::notations()
     Returns list of notations
array DomElement::get_elements_by_tagname(string $name)
     Gets elements by tagname
array each(array $array)
     Return the current key and value pair from an array and advance the array cursor
array enchant_broker_describe(resource $broker)
     Enumerates the Enchant providers
array enchant_dict_suggest(resource $dict, string $word)
     Will return a list of values if any of those pre-conditions are not met
array error_get_last()
     Get the last occurred error
array exif_read_data(string $filename [, string $sections = `` [, bool $arrays = false [, bool $thumbnail = false]]])
     Reads the EXIF headers from JPEG or TIFF
array explode(string $delimiter, string $string [, int $limit = ``])
     Split a string by string
array fam_next_event(resource $fam)
     Get next pending FAM event
array fbsql_fetch_array(resource $result [, int $result_type = ``])
     Fetch a result row as an associative array, a numeric array, or both
array fbsql_fetch_assoc(resource $result)
     Fetch a result row as an associative array
array fbsql_fetch_lengths(resource $result)
     Get the length of each output in a result
array fbsql_fetch_row(resource $result)
     Get a result row as an enumerated array
array fbsql_get_autostart_info([resource $link_identifier = ``])
     
array fdf_get_attachment(resource $fdf_document, string $fieldname, string $savepath)
     Extracts uploaded file embedded in the FDF
array fgetcsv(resource $handle [, int $length = `` [, string $delimiter = `,` [, string $enclosure = `\"` [, string $escape = `\\`]]]])
     Gets line from file pointer and parse for CSV fields
array file(string $filename [, int $flags = `` [, resource $context = ``]])
     Reads entire file into an array
array filter_list()
     Returns a list of all supported filters
array fstat(resource $handle)
     Gets information about a file using an open file pointer
array ftp_nlist(resource $ftp_stream, string $directory)
     Returns a list of files in the given directory
array ftp_raw(resource $ftp_stream, string $command)
     Sends an arbitrary command to an FTP server
array ftp_rawlist(resource $ftp_stream, string $directory [, bool $recursive = false])
     Returns a detailed list of files in the given directory
array func_get_args()
     Returns an array comprising a function`s argument list
array gd_info()
     Retrieve information about the currently installed GD library
array GearmanClient::doStatus()
     Get the status for the running task
array GearmanClient::jobStatus(string $job_handle)
     Get the status of a background job
array GearmanTask::recvData(int $data_len)
     Read work or result data into a buffer for a task
array gearman_job_status(string $job_handle)
     Get the status of a background job
array geoip_db_get_all_info()
     Returns detailed information about all GeoIP database types
array geoip_record_by_name(string $hostname)
     Returns the detailed City information found in the GeoIP Database
array geoip_region_by_name(string $hostname)
     Get the country code and region
array getallheaders()
     Fetch all HTTP request headers
array getdate([int $timestamp = time()])
     Get date/time information
array gethostbynamel(string $hostname)
     Get a list of IPv4 addresses corresponding to a given Internet host   name
array getimagesize(string $filename [, array $imageinfo = ``])
     Get the size of an image
array getopt(string $options [, array $longopts = ``])
     Gets options from the command line argument list
array getrusage([int $who = ``])
     Gets the current resource usages
array get_class_methods(mixed $class_name)
     Gets the class methods` names
array get_class_vars(string $class_name)
     Get the default properties of the class
array get_declared_classes()
     Returns an array with the name of the defined classes
array get_declared_interfaces()
     Returns an array of all declared interfaces
array get_defined_constants([bool $categorize = false])
     Returns an associative array with the names of all the constants and their values
array get_defined_functions()
     Returns an array of all defined functions
array get_defined_vars()
     Returns an array of all defined variables
array get_extension_funcs(string $module_name)
     Returns an array with the names of the functions of a module
array get_headers(string $url [, int $format = ``])
     Fetches all the headers sent by the server in response to a HTTP request
array get_html_translation_table([int $table = HTML_SPECIALCHARS [, int $quote_style = ENT_COMPAT [, string $charset_hint = ``]]])
     Returns the translation table used by htmlspecialchars and htmlentities
array get_included_files()
     Returns an array with the names of included or required files
array get_loaded_extensions([bool $zend_extensions = false])
     Returns an array with the names of all modules compiled and loaded
array get_meta_tags(string $filename [, bool $use_include_path = false])
     Extracts all meta tag content attributes from a file and returns an array
array get_object_vars(object $object)
     Gets the properties of the given object
array glob(string $pattern [, int $flags = ``])
     Find pathnames matching a pattern
array Gmagick::getimageblueprimary()
     Returns the chromaticy blue primary point
array Gmagick::getimageextrema()
     Gets the extrema for the image
array Gmagick::getimagegreenprimary()
     Returns the chromaticy green primary point
array Gmagick::getimagehistogram()
     Gets the image histogram
array Gmagick::getimageredprimary()
     Returns the chromaticity red primary point
array Gmagick::getimageresolution()
     Gets the image X and Y resolution
array Gmagick::getimagewhitepoint()
     Returns the chromaticity white point
array Gmagick::getquantumdepth()
     Returns the Gmagick quantum depth as a string.
array Gmagick::getsamplingfactors()
     Gets the horizontal and vertical sampling factor.
array Gmagick::getsize()
     Returns the size associated with the Gmagick object
array Gmagick::getversion()
     Returns the GraphicsMagick API version
array Gmagick::queryfontmetrics(GmagickDraw $draw, string $text)
     Returns an array representing the font metrics
array Gmagick::queryfonts([string $pattern = \"*\"])
     Returns the configured fonts
array Gmagick::queryformats([string $pattern = \"*\"])
     Returns formats supported by Gmagick.
array gmp_div_qr(resource $n, resource $d [, int $round = GMP_ROUND_ZERO])
     Divide numbers and get quotient and remainder
array gmp_gcdext(resource $a, resource $b)
     Calculate GCD and multipliers
array gmp_sqrtrem(resource $a)
     Square root with remainder
array gnupg_decryptverify(resource $identifier, string $text, string $plaintext)
     Decrypts and verifies a given text
array gnupg_import(resource $identifier, string $keydata)
     Imports a key
array gnupg_keyinfo(resource $identifier, string $pattern)
     Returns an array with information about all keys that matches the given pattern
array gnupg_verify(resource $identifier, string $signed_text, string $signature [, string $plaintext = ``])
     Verifies a signed text
array gopher_parsedir(string $dirent)
     Translate a gopher formatted directory entry into an associative array.
array gupnp_device_info_get(resource $root_device)
     Get info of root device
array gupnp_service_info_get(resource $proxy)
     Get full info of service
array gupnp_service_introspection_get_state_variable(resource $introspection, string $variable_name)
     Returns the state variable data
array gupnp_service_proxy_send_action(resource $proxy, string $action, array $in_params, array $out_params)
     Send action with multiple parameters synchronously
array gzfile(string $filename [, int $use_include_path = ``])
     Read entire gz-file into an array
array HaruFont::getTextWidth(string $text)
     Get the total width of the text, number of characters, number of words and number of spaces
array HaruImage::getSize()
     Get size of the image
array HaruPage::getCMYKFill()
     Get the current filling color
array HaruPage::getCMYKStroke()
     Get the current stroking color
array HaruPage::getCurrentPos()
     Get the current position for path painting
array HaruPage::getCurrentTextPos()
     Get the current position for text printing
array HaruPage::getDash()
     Get the current dash pattern
array HaruPage::getRGBFill()
     Get the current filling color
array HaruPage::getRGBStroke()
     Get the current stroking color
array HaruPage::getTextMatrix()
     Get the current text transformation matrix of the page
array HaruPage::getTransMatrix()
     Get the current transformation matrix of the page
array hash_algos()
     Return a list of registered hashing algorithms
array headers_list()
     Returns a list of response headers sent (or ready to send)
array HttpMessage::getHeaders()
     Get message headers
array HttpQueryString::toArray()
     Get query string as array
array HttpRequest::getCookies()
     Get cookies
array HttpRequest::getHeaders()
     Get headers
array HttpRequest::getOptions()
     Get options
array HttpRequest::getPostFields()
     Get post fields
array HttpRequest::getPostFiles()
     Get post files
array HttpRequest::getResponseCookies([int $flags = `` [, array $allowed_extras = ``]])
     Get response cookie(s)
array HttpRequest::getResponseData()
     Get response data
array HttpRequest::getSslOptions()
     Get ssl options
array HttpRequestPool::getAttachedRequests()
     Get attached requests
array HttpRequestPool::getFinishedRequests()
     Get finished requests
array HttpResponse::getRequestHeaders()
     Get request headers
array http_get_request_headers()
     Get request headers as array
array http_parse_headers(string $header)
     Parse HTTP headers
array hw_api::children(array $parameter)
     Returns children of an object
array hw_api::dstanchors(array $parameter)
     Returns a list of all destination anchors
array hw_api::find(array $parameter)
     Search for objects
array hw_api::info(array $parameter)
     Returns information about server configuration
array hw_api::parents(array $parameter)
     Returns parents of an object
array hw_api::srcanchors(array $parameter)
     Returns a list of all source anchors
array hw_api::srcsofdst(array $parameter)
     Returns source of a destination object
array hw_api::userlist(array $parameter)
     Returns a list of all logged in users
array hw_api_attribute::values()
     Returns all values of the attribute
array hw_Children(int $connection, int $objectID)
     Object ids of children
array hw_ChildrenObj(int $connection, int $objectID)
     Object records of children
array hw_GetAnchors(int $connection, int $objectID)
     Object ids of anchors of document
array hw_GetAnchorsObj(int $connection, int $objectID)
     Object records of anchors of document
array hw_GetChildColl(int $connection, int $objectID)
     Object ids of child collections
array hw_GetChildCollObj(int $connection, int $objectID)
     Object records of child collections
array hw_GetChildDocColl(int $connection, int $objectID)
     Object ids of child documents of collection
array hw_GetChildDocCollObj(int $connection, int $objectID)
     Object records of child documents of collection
array hw_GetObjectByQuery(int $connection, string $query, int $max_hits)
     Search object
array hw_GetObjectByQueryColl(int $connection, int $objectID, string $query, int $max_hits)
     Search object in collection
array hw_GetObjectByQueryCollObj(int $connection, int $objectID, string $query, int $max_hits)
     Search object in collection
array hw_GetObjectByQueryObj(int $connection, string $query, int $max_hits)
     Search object
array hw_GetParents(int $connection, int $objectID)
     Object ids of parents
array hw_GetParentsObj(int $connection, int $objectID)
     Object records of parents
array hw_GetSrcByDestObj(int $connection, int $objectID)
     Returns anchors pointing at object
array hw_InCollections(int $connection, array $object_id_array, array $collection_id_array, int $return_collections)
     Check if object ids in collections
array hw_objrec2array(string $object_record [, array $format = ``])
     Convert attributes from object record to object array
array hw_Who(int $connection)
     List of currently logged in users
array ibase_blob_info(resource $link_identifier, string $blob_id)
     Return blob length and other useful info
array ibase_fetch_assoc(resource $result [, int $fetch_flag = ``])
     Fetch a result row from a query as an associative array
array ibase_fetch_row(resource $result_identifier [, int $fetch_flag = ``])
     Fetch a row from an InterBase database
array ibase_field_info(resource $result, int $field_number)
     Get information about a field
array ibase_param_info(resource $query, int $param_number)
     Return information about a parameter in a prepared query
array iconv_mime_decode_headers(string $encoded_headers [, int $mode = `` [, string $charset = ini_get(\"iconv.internal_encoding\")]])
     Decodes multiple MIME header fields at once
array id3_get_genre_list()
     Get all possible genre values
array id3_get_tag(string $filename [, int $version = ID3_BEST])
     Get all information stored in an ID3 tag
array ifx_fetch_row(resource $result_id [, mixed $position = ``])
     Get row as an associative array
array ifx_fieldproperties(resource $result_id)
     List of SQL fieldproperties
array ifx_fieldtypes(resource $result_id)
     List of Informix SQL fields
array ifx_getsqlca(resource $result_id)
     Get the contents of sqlca.sqlerrd[0..5] after a query
array imagecolorsforindex(resource $image, int $index)
     Get the colors for an index
array imageftbbox(float $size, float $angle, string $fontfile, string $text [, array $extrainfo = ``])
     Give the bounding box of a text using fonts via freetype2
array imagefttext(resource $image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text [, array $extrainfo = ``])
     Write text to the image using fonts using FreeType 2
array imagepsbbox(string $text, resource $font, int $size, int $space, int $tightness, float $angle)
     Give the bounding box of a text rectangle using PostScript Type1 fonts
array imagepstext(resource $image, string $text, resource $font_index, int $size, int $foreground, int $background, int $x, int $y [, int $space = `` [, int $tightness = `` [, float $angle = 0.0 [, int $antialias_steps = 4]]]])
     Draws a text over an image using PostScript Type1 fonts
array imagettfbbox(float $size, float $angle, string $fontfile, string $text)
     Give the bounding box of a text using TrueType fonts
array imagettftext(resource $image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text)
     Write text to the image using TrueType fonts
array Imagick::compareImageChannels(Imagick $image, int $channelType, int $metricType)
     Returns the difference in one or more images
array Imagick::compareImages(Imagick $compare, int $metric)
     Compares an image to a reconstructed image
array Imagick::exportImagePixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE)
     Exports raw image pixels
array Imagick::getImageBluePrimary()
     Returns the chromaticy blue primary point
array Imagick::getImageChannelExtrema(int $channel)
     Gets the extrema for one or more image channels
array Imagick::getImageChannelKurtosis([int $channel = Imagick::CHANNEL_DEFAULT])
     The getImageChannelKurtosis purpose
array Imagick::getImageChannelMean(int $channel)
     Gets the mean and standard deviation
array Imagick::getImageChannelRange(int $channel)
     Gets channel range
array Imagick::getImageChannelStatistics()
     Returns statistics for each channel in the image
array Imagick::getImageExtrema()
     Gets the extrema for the image
array Imagick::getImageGeometry()
     Gets the width and height as an associative array
array Imagick::getImageGreenPrimary()
     Returns the chromaticy green primary point
array Imagick::getImageHistogram()
     Gets the image histogram
array Imagick::getImagePage()
     Returns the page geometry
array Imagick::getImageProfiles([string $pattern = \"*\" [, bool $only_names = true]])
     Returns the image profiles
array Imagick::getImageProperties([string $pattern = \"*\" [, bool $only_names = true]])
     Returns the image properties
array Imagick::getImageRedPrimary()
     Returns the chromaticity red primary point
array Imagick::getImageResolution()
     Gets the image X and Y resolution
array Imagick::getImageWhitePoint()
     Returns the chromaticity white point
array Imagick::getPage()
     Returns the page geometry
array Imagick::getQuantumDepth()
     Gets the quantum depth
array Imagick::getQuantumRange()
     Returns the Imagick quantum range
array Imagick::getSamplingFactors()
     Gets the horizontal and vertical sampling factor
array Imagick::getSize()
     Returns the size associated with the Imagick object
array Imagick::getVersion()
     Returns the ImageMagick API version
array Imagick::identifyImage([bool $appendRawOutput = false])
     Identifies an image and fetches attributes
array Imagick::queryFontMetrics(ImagickDraw $properties, string $text [, bool $multiline = ``])
     Returns an array representing the font metrics
array Imagick::queryFonts([string $pattern = \"*\"])
     Returns the configured fonts
array Imagick::queryFormats([string $pattern = \"*\"])
     Returns formats supported by Imagick
array ImagickDraw::getStrokeDashArray()
     Returns an array representing the pattern of dashes and gaps used to stroke paths
array ImagickPixel::getColor([bool $normalized = false])
     Returns the color
array ImagickPixel::getHSL()
     Returns the normalized HSL color of the ImagickPixel object
array ImagickPixelIterator::getCurrentIteratorRow()
     Returns the current row of ImagickPixel objects
array ImagickPixelIterator::getNextIteratorRow()
     Returns the next row of the pixel iterator
array ImagickPixelIterator::getPreviousIteratorRow()
     Returns the previous row
array imap_alerts()
     Returns all IMAP alert messages that have occurred
array imap_errors()
     Returns all of the IMAP errors that have occured
array imap_fetch_overview(resource $imap_stream, string $sequence [, int $options = ``])
     Read an overview of the information in the headers of the given message
array imap_getacl(resource $imap_stream, string $mailbox)
     Gets the ACL for a given mailbox
array imap_getmailboxes(resource $imap_stream, string $ref, string $pattern)
     Read the list of mailboxes, returning detailed information on each one
array imap_getsubscribed(resource $imap_stream, string $ref, string $pattern)
     List all the subscribed mailboxes
array imap_get_quota(resource $imap_stream, string $quota_root)
     Retrieve the quota level settings, and usage statics per mailbox
array imap_get_quotaroot(resource $imap_stream, string $quota_root)
     Retrieve the quota settings per user
array imap_headers(resource $imap_stream)
     Returns headers for all messages in a mailbox
array imap_list(resource $imap_stream, string $ref, string $pattern)
     Read the list of mailboxes
array imap_listscan(resource $imap_stream, string $ref, string $pattern, string $content)
     Returns the list of mailboxes that matches the given text
array imap_lsub(resource $imap_stream, string $ref, string $pattern)
     List all the subscribed mailboxes
array imap_mime_header_decode(string $text)
     Decode MIME header elements
array imap_rfc822_parse_adrlist(string $address, string $default_host)
     Parses an address string
array imap_search(resource $imap_stream, string $criteria [, int $options = SE_FREE [, string $charset = NIL]])
     This function returns an array of messages matching the given search criteria
array imap_sort(resource $imap_stream, int $criteria, int $reverse [, int $options = `` [, string $search_criteria = `` [, string $charset = NIL]]])
     Gets and sort messages
array imap_thread(resource $imap_stream [, int $options = SE_FREE])
     Returns a tree of threaded message
array inclued_get_data()
     Get the inclued data
array ingres_fetch_array(resource $result [, int $result_type = ``])
     Fetch a row of result into an array
array ingres_fetch_assoc(resource $result)
     Fetch a row of result into an associative array
array ingres_fetch_row(resource $result)
     Fetch a row of result into an enumerated array
array ini_get_all([string $extension = `` [, bool $details = true]])
     Gets all configuration options
array inotify_read(resource $inotify_instance)
     Read events from an inotify instance
array IntlDateFormatter::localtime(string $value [, int $position = ``, IntlDateFormatter $fmt])
     Parse string to a field-based time value
array iptcparse(string $iptcblock)
     Parse a binary IPTC block into single tags.
ArrayIterator ArrayObject::getIterator()
     Create a new iterator from an ArrayObject instance
array iterator_to_array(Traversable $iterator [, bool $use_keys = true])
     Copy the iterator into an array
array kadm5_get_policies(resource $handle)
     Gets all policies from the Kerberos database
array kadm5_get_principal(resource $handle, string $principal)
     Gets the principal`s entries from the Kerberos database
array kadm5_get_principals(resource $handle)
     Gets all principals from the Kerberos database
array KTaglib_ID3v2_Tag::getFrameList()
     Returns an array of ID3v2 frames, associated with the ID3v2 tag
array ldap_explode_dn(string $dn, int $with_attrib)
     Splits DN into its component parts
array ldap_get_attributes(resource $link_identifier, resource $result_entry_identifier)
     Get attributes from a search result entry
array ldap_get_entries(resource $link_identifier, resource $result_identifier)
     Get all result entries
array ldap_get_values(resource $link_identifier, resource $result_entry_identifier, string $attribute)
     Get all values from a result entry
array ldap_get_values_len(resource $link_identifier, resource $result_entry_identifier, string $attribute)
     Get all binary values from a result entry
array libxml_get_errors()
     Retrieve array of errors
array list(mixed $varname [, mixed $... = ``])
     Assign variables as if they were an array
array Locale::getAllVariants(string $locale)
     Gets the variants for the input locale
array Locale::getKeywords(string $locale)
     Gets the keywords for the input locale
array Locale::parseLocale(string $locale)
     Returns a key-value array of locale ID subtag elements.
array localeconv()
     Get numeric formatting information
array locale_get_all_variants(string $locale)
     Gets the variants for the input locale
array locale_get_keywords(string $locale)
     Gets the keywords for the input locale
array locale_parse(string $locale)
     Returns a key-value array of locale ID subtag elements.
array localtime([int $timestamp = time() [, bool $is_associative = false]])
     Get the local time
array lstat(string $filename)
     Gives information about a file or symbolic link
array mailparse_msg_get_part_data(resource $mimemail)
     Returns an associative array of info about the message
array mailparse_msg_get_structure(resource $mimemail)
     Returns an array of mime section names in the supplied message
array mailparse_rfc822_parse_addresses(string $addresses)
     Parse RFC 822 compliant addresses
array mailparse_uudecode_all(resource $fp)
     Scans the data from fp and extract each embedded uuencoded file
array maxdb_fetch_assoc(resource $result)
     Fetch a result row as an associative array
array maxdb_fetch_lengths(resource $result)
     Returns the lengths of the columns of the current row in the result set
array maxdb_result::fetch_assoc(resource $result)
     Fetch a result row as an associative array
array maxdb_result::lengths(resource $result)
     Returns the lengths of the columns of the current row in the result set
array mb_encoding_aliases(string $encoding)
     Get aliases of a known encoding type
array mb_ereg_search_getregs()
     Retrieve the result from the last multibyte regular expression match
array mb_ereg_search_pos([string $pattern = `` [, string $option = \"ms\"]])
     Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
array mb_ereg_search_regs([string $pattern = `` [, string $option = \"ms\"]])
     Returns the matched part of a multibyte regular expression
array mb_list_encodings()
     Returns an array of all supported encodings
array mb_parse_str(string $encoded_string [, array $result = ``])
     Parse GET/POST/COOKIE data and set global variable
array mb_split(string $pattern, string $string [, int $limit = -1])
     Split multibyte string using regular expression
array mcrypt_enc_get_supported_key_sizes(resource $td)
     Returns an array with the supported keysizes of the opened algorithm
array mcrypt_list_algorithms([string $lib_dir = ini_get(\"mcrypt.algorithms_dir\")])
     Gets an array of all supported ciphers
array mcrypt_list_modes([string $lib_dir = ini_get(\"mcrypt.modes_dir\")])
     Gets an array of all supported modes
array mcrypt_module_get_supported_key_sizes(string $algorithm [, string $lib_dir = ``])
     Returns an array with the supported keysizes of the opened algorithm
array Memcache::get(string $key [, array $flags = ``, array $keys])
     Retrieve item from the server
array Memcache::getExtendedStats([string $type = `` [, int $slabid = `` [, int $limit = 100]]])
     Get statistics from all servers in pool
array Memcache::getStats([string $type = `` [, int $slabid = `` [, int $limit = 100]]])
     Get statistics of the server
array Memcached::fetch()
     Fetch the next result
array Memcached::fetchAll()
     Fetch all the remaining results
array Memcached::getMultiByKey(string $server_key, array $keys [, string $cas_tokens = `` [, int $flags = ``]])
     Retrieve multiple items from a specific server
array Memcached::getServerByKey(string $server_key)
     Map a key to a server
array Memcached::getServerList()
     Get the list of the servers in the pool
array Memcached::getStats()
     Get server pool statistics
array Memcached::getVersion()
     Get server pool version info
array MessageFormatter::parse(string $value, MessageFormatter $fmt)
     Parse input string according to pattern
array MessageFormatter::parseMessage(string $locale, string $pattern, string $source, string $value)
     Quick parse input string
array Mongo::dropDB(mixed $db)
     Drops a database [deprecated]
array Mongo::getHosts()
     Updates status for all hosts associated with this
array MongoCollection::createDBRef(array $a)
     Creates a database reference
array MongoCollection::deleteIndex(string|array $keys)
     Deletes an index from this collection
array MongoCollection::deleteIndexes()
     Delete all indices for this collection
array MongoCollection::drop()
     Drops this collection
array MongoCollection::findOne([array $query = array() [, array $fields = array()]])
     Querys this collection, returning a single element
array MongoCollection::getDBRef(array $ref)
     Fetches the document pointed to by a database reference
array MongoCollection::getIndexInfo()
     Returns an array of index names for this collection
array MongoCollection::group(mixed $keys, array $initial, MongoCode $reduce [, array $options = array()])
     Performs an operation similar to SQL`s GROUP BY command
array MongoCollection::validate([bool $scan_data = ``])
     Validates this collection
array MongoCursor::current()
     Returns the current element
array MongoCursor::explain()
     Return an explanation of the query, often useful for optimization and debugging
array MongoCursor::getNext()
     Return the next object to which this cursor points, and advance the cursor
array MongoCursor::info()
     Gets the query, fields, limit, and skip for this cursor
array MongoDB::authenticate(string $username, string $password)
     Log in to this database
array MongoDB::command(array $command)
     Execute a database command
array MongoDB::createDBRef(string $collection, mixed $a)
     Creates a database reference
array MongoDB::drop()
     Drops this database
array MongoDB::dropCollection(mixed $coll)
     Drops a collection [deprecated]
array MongoDB::execute(mixed $code [, array $args = array()])
     Runs JavaScript code on the database server.
array MongoDB::getDBRef(array $ref)
     Fetches the document pointed to by a database reference
array MongoDB::lastError()
     Check if there was an error on the most recent db operation performed
array MongoDB::listCollections()
     Get a list of collections in this database
array MongoDB::prevError()
     Checks for the last error thrown during a database operation
array MongoDB::repair([bool $preserve_cloned_files = `` [, bool $backup_original_files = ``]])
     Repairs and compacts this database
array MongoDB::resetError()
     Clears any flagged errors on the database
array MongoDBRef::create(string $collection, mixed $id [, string $database = ``])
     Creates a new database reference
array MongoDBRef::get(MongoDB $db, array $ref)
     Fetches the object pointed to by a reference
array MongoGridFS::drop()
     Drops the files and chunks collections
array msession_find(string $name, string $value)
     Find all sessions with name and value
array msession_get_array(string $session)
     Get array of msession variables
array msession_list()
     List all sessions
array msession_listvar(string $name)
     List sessions with variable
array msgfmt_parse(string $value, MessageFormatter $fmt)
     Parse input string according to pattern
array msgfmt_parse_message(string $locale, string $pattern, string $source, string $value)
     Quick parse input string
array msg_stat_queue(resource $queue)
     Returns information from the message queue data structure
array msql_fetch_array(resource $result [, int $result_type = ``])
     Fetch row as array
array msql_fetch_row(resource $result)
     Get row as enumerated array
array mssql_fetch_array(resource $result [, int $result_type = MSSQL_BOTH])
     Fetch a result row as an associative array, a numeric array, or both
array mssql_fetch_assoc(resource $result_id)
     Returns an associative array of the current row in the result
array mssql_fetch_row(resource $result)
     Get row as enumerated array
array mysqli::get_connection_stats(mysqli $link)
     Returns statistics about the client connection
array mysqli_fetch_assoc(mysqli_result $result)
     Fetch a result row as an associative array
array mysqli_fetch_fields(mysqli_result $result)
     Returns an array of objects representing the fields in a result set
array mysqli_fetch_lengths(mysqli_result $result)
     Returns the lengths of the columns of the current row in the result set
array mysqli_get_cache_stats()
     Returns client Zval cache statistics
array mysqli_get_client_stats()
     Returns client per-process statistics
array mysqli_get_connection_stats(mysqli $link)
     Returns statistics about the client connection
array mysqli_result::fetch_assoc(mysqli_result $result)
     Fetch a result row as an associative array
array mysqli_result::fetch_fields(mysqli_result $result)
     Returns an array of objects representing the fields in a result set
array mysqli_result::lengths(mysqli_result $result)
     Returns the lengths of the columns of the current row in the result set
array mysqlnd_ms_get_stats()
     Returns query distribution and connection statistics
array mysqlnd_qc_get_cache_info()
     Returns information on the current handler, the number of cache entries and cache entries, if available
array mysqlnd_qc_get_core_stats()
     Statistics collected by the core of the query cache
array mysqlnd_qc_get_handler()
     Returns a list of available storage handler
array mysqlnd_qc_get_query_trace_log()
     Returns a backtrace for each query inspected by the query cache
array mysql_fetch_array(resource $result [, int $result_type = MYSQL_BOTH])
     Fetch a result row as an associative array, a numeric array, or both
array mysql_fetch_assoc(resource $result)
     Fetch a result row as an associative array
array mysql_fetch_lengths(resource $result)
     Get the length of each output in a result
array mysql_fetch_row(resource $result)
     Get a result row as an enumerated array
array m_responsekeys(resource $conn, int $identifier)
     Returns array of strings which represents the keys that can be used for response parameters on this transaction
array newt_checkbox_tree_find_item(resource $checkboxtree, mixed $data)
     Finds an item in the checkbox tree
array newt_checkbox_tree_get_multi_selection(resource $checkboxtree, string $seqnum)
     
array newt_checkbox_tree_get_selection(resource $checkboxtree)
     
array newt_listbox_get_selection(resource $listbox)
     
array notes_body(string $server, string $mailbox, int $msg_number)
     Open the message msg_number in the specified mailbox on the specified server (leave serv
array notes_search(string $database_name, string $keywords)
     Find notes that match keywords in database_name
array notes_unread(string $database_name, string $user_name)
     Returns the unread note id`s for the current User user_name
array nsapi_request_headers()
     Fetch all HTTP request headers
array nsapi_response_headers()
     Fetch all HTTP response headers
array OAuth::getAccessToken(string $access_token_url [, string $auth_session_handle = `` [, string $verifier_token = ``]])
     Fetch an access token
array OAuth::getCAPath()
     Gets CA information
array OAuth::getLastResponseInfo()
     Get HTTP information about the last response
array OAuth::getRequestToken(string $request_token_url [, string $callback_url = ``])
     Fetch a request token
array ob_get_status([bool $full_status = FALSE])
     Get status of output buffers
array ob_list_handlers()
     List all output handlers in use
array oci_error([resource $resource = ``])
     Returns the last error found
array oci_fetch_array(resource $statement [, int $mode = ``])
     Returns the next row from a query as an associative or numeric array
array oci_fetch_assoc(resource $statement)
     Returns the next row from a query as an associative array
array oci_fetch_row(resource $statement)
     Returns the next row from a query as a numeric array
array odbc_data_source(resource $connection_id, int $fetch_type)
     Returns information about a current connection
array odbc_fetch_array(resource $result [, int $rownumber = ``])
     Fetch a result row as an associative array
array odbc_fetch_into(resource $result_id, array $result_array [, int $rownumber = ``])
     Fetch one result row into array
array openssl_csr_get_subject(mixed $csr [, bool $use_shortnames = true])
     Returns the subject of a CERT
array openssl_get_cipher_methods([bool $aliases = false])
     Gets available cipher methods
array openssl_get_md_methods([bool $aliases = false])
     Gets available digest methods
array openssl_pkey_get_details(resource $key)
     Returns an array with the key details
array openssl_x509_parse(mixed $x509cert [, bool $shortnames = true])
     Parse an X509 certificate and return the information as an array
array parsekit_compile_file(string $filename [, array $errors = `` [, int $options = PARSEKIT_QUIET]])
     Compile a string of PHP code and return the resulting op array
array parsekit_compile_string(string $phpcode [, array $errors = `` [, int $options = PARSEKIT_QUIET]])
     Compile a string of PHP code and return the resulting op array
array parsekit_func_arginfo(mixed $function)
     Return information regarding function argument(s)
array parse_ini_file(string $filename [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL]])
     Parse a configuration file
array parse_ini_string(string $ini [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL]])
     Parse a configuration string
array PDO::cubrid_schema(int $schema_type [, string $table_name = `` [, string $col_name = ``]])
     Get the requested schema information
array PDO::errorInfo()
     Fetch extended error information associated with the last operation on the database handle
array PDO::getAvailableDrivers()
     Return an array of available PDO drivers
array PDOStatement::errorInfo()
     Fetch extended error information associated with the last operation on the statement handle
array PDOStatement::fetchAll([int $fetch_style = PDO::FETCH_BOTH [, mixed $fetch_argument = `` [, array $ctor_args = array()]]])
     Returns an array containing all of the result set rows
array PDOStatement::getColumnMeta(int $column)
     Returns metadata for a column in a result set
array pg_convert(resource $connection, string $table_name, array $assoc_array [, int $options = ``])
     Convert associative array values into suitable for SQL statement
array pg_copy_to(resource $connection, string $table_name [, string $delimiter = `` [, string $null_as = ``]])
     Copy a table to an array
array pg_fetch_all(resource $result)
     Fetches all rows from a result as an array
array pg_fetch_all_columns(resource $result [, int $column = ``])
     Fetches all rows in a particular result column as an array
array pg_fetch_array(resource $result [, int $row = `` [, int $result_type = ``]])
     Fetch a row as an array
array pg_fetch_assoc(resource $result [, int $row = ``])
     Fetch a row as an associative array
array pg_fetch_row(resource $result [, int $row = ``])
     Get a row as an enumerated array
array pg_get_notify(resource $connection [, int $result_type = ``])
     Gets SQL NOTIFY message
array pg_meta_data(resource $connection, string $table_name)
     Get meta data for table
array pg_version([resource $connection = ``])
     Returns an array with client, protocol and server version (when available)
array Phar::buildFromDirectory(string $base_dir [, string $regex = ``])
     Construct a phar archive from the files within a directory.
array Phar::buildFromIterator(Iterator $iter [, string $base_directory = ``])
     Construct a phar archive from an iterator.
array Phar::getSignature()
     Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
array Phar::getSupportedCompression()
     Return array of supported compression algorithms
array Phar::getSupportedSignatures()
     Return array of supported signature types
array PharData::buildFromDirectory(string $base_dir [, string $regex = ``])
     Construct a tar/zip archive from the files within a directory.
array PharData::buildFromIterator(Iterator $iter [, string $base_directory = ``])
     Construct a tar or zip archive from an iterator.
array posix_getgrgid(int $gid)
     Return info about a group by group id
array posix_getgrnam(string $name)
     Return info about a group by name
array posix_getgroups()
     Return the group set of the current process
array posix_getpwnam(string $username)
     Return info about a user by username
array posix_getpwuid(int $uid)
     Return info about a user by user id
array posix_getrlimit()
     Return info about system resource limits
array posix_times()
     Get process times
array posix_uname()
     Get system name
array preg_grep(string $pattern, array $input [, int $flags = ``])
     Return array entries that match the pattern
array preg_split(string $pattern, string $subject [, int $limit = -1 [, int $flags = ``]])
     Split string by a regular expression
array proc_get_status(resource $process)
     Get information about a process opened by proc_open
array pspell_suggest(int $dictionary_link, string $word)
     Suggest spellings of a word
array ps_hyphenate(resource $psdoc, string $text)
     Hyphenates a word
array ps_string_geometry(resource $psdoc, string $text [, int $fontid = `` [, float $size = 0.0]])
     Gets geometry of a string
array px_get_field(resource $pxdoc, int $fieldno)
     Returns the specification of a single field
array px_get_info(resource $pxdoc)
     Return lots of information about a paradox file
array px_get_record(resource $pxdoc, int $num [, int $mode = ``])
     Returns record of paradox database
array px_get_schema(resource $pxdoc [, int $mode = ``])
     Returns the database schema
array px_retrieve_record(resource $pxdoc, int $num [, int $mode = ``])
     Returns record of paradox database
array radius_get_vendor_attr(string $data)
     Extracts a vendor specific attribute
array range(mixed $low, mixed $high [, number $step = 1])
     Create an array containing a range of elements
array readline_list_history()
     Lists the history
array realpath_cache_get()
     Get realpath cache entries
array Reflection::getModifierNames(int $modifiers)
     Gets modifier names
array ReflectionClass::getConstants()
     Gets constants
array ReflectionClass::getDefaultProperties()
     Gets default properties
array ReflectionClass::getInterfaceNames()
     Gets the interface names
array ReflectionClass::getInterfaces()
     Gets the interfaces
array ReflectionClass::getMethods([string $filter = ``])
     Gets a list of methods
array ReflectionClass::getProperties([int $filter = ``])
     Gets properties
array ReflectionClass::getStaticProperties()
     Gets static properties
array ReflectionExtension::getClasses()
     Gets classes
array ReflectionExtension::getClassNames()
     Gets class names
array ReflectionExtension::getConstants()
     Gets constants
array ReflectionExtension::getDependencies()
     Gets dependencies
array ReflectionExtension::getFunctions()
     Gets extension functions
array ReflectionExtension::getINIEntries()
     Gets extension ini entries
array ReflectionFunctionAbstract::getStaticVariables()
     Gets static variables
array ResourceBundle::getLocales(ResourceBundle $r)
     Get supported locales
array resourcebundle_locales(ResourceBundle $r)
     Get supported locales
array RRDGraph::save()
     Saves the result of query into image
array RRDGraph::saveVerbose()
     Saves the RRD database query into image and returns the verbose   information about generated graph.
array rrd_fetch(string $filename, array $options)
     Fetch the data for graph as array.
array rrd_graph(string $filename, array $options)
     Creates image from a data.
array rrd_info(string $filename)
     Gets information about rrd file
array rrd_lastupdate(string $filename)
     Gets information about last updated data.
array rrd_xport(array $options)
     Exports the information about RRD database.
array runkit_superglobals()
     Return numerically indexed array of registered superglobals
array SAMConnection::peekAll(string $target [, array $properties = ``])
     Read one or more messages from a queue without removing it from the queue.
array scandir(string $directory [, int $sorting_order = `` [, resource $context = ``]])
     List files and directories inside the specified path
array SDO_Model_ReflectionDataObject::getInstanceProperties()
     Get the instance properties of the SDO_DataObject
array SDO_Model_Type::getProperties()
     Get the SDO_Model_Property objects defined for the type
array session_get_cookie_params()
     Get the session cookie parameters
array session_pgsql_get_error([bool $with_error_message = false])
     Returns number of errors and last error message
array session_pgsql_status()
     Get current save handler status
array SimpleXMLElement::getDocNamespaces([bool $recursive = false])
     Returns namespaces declared in document
array SimpleXMLElement::getNamespaces([bool $recursive = false])
     Returns namespaces used in document
array SimpleXMLElement::xpath(string $path)
     Runs XPath query on XML data
array snmp2_real_walk(string $host, string $community, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Return all objects including their respective object ID within the specified one
array snmp2_walk(string $host, string $community, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch all the SNMP objects from an agent
array snmp3_real_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Return all objects including their respective object ID within the specified one
array snmp3_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch all the SNMP objects from an agent
array snmprealwalk(string $host, string $community, string $object_id [, int $timeout = 1000000 [, int $retries = 5]])
     Return all objects including their respective object ID within the specified one
array snmpwalk(string $hostname, string $community, string $object_id [, int $timeout = 1000000 [, int $retries = 5]])
     Fetch all the SNMP objects from an agent
array snmpwalkoid(string $hostname, string $community, string $object_id [, int $timeout = 1000000 [, int $retries = 5]])
     Query for a tree of information about a network entity
array SoapClient::__getFunctions()
     Returns list of available SOAP functions
array SoapClient::__getTypes()
     Returns a list of SOAP types
array SoapServer::getFunctions()
     Returns list of defined functions
array SolrClient::getOptions()
     Returns the client options set internally
array SolrClientException::getInternalInfo()
     Returns internal information where the Exception was thrown
array SolrDocument::getFieldNames()
     Returns an array of fields names in the document
array SolrDocument::toArray()
     Returns an array representation of the document
array SolrException::getInternalInfo()
     Returns internal information where the Exception was thrown
array SolrIllegalArgumentException::getInternalInfo()
     Returns internal information where the Exception was thrown
array SolrIllegalOperationException::getInternalInfo()
     Returns internal information where the Exception was thrown
array SolrInputDocument::getFieldNames()
     Returns an array containing all the fields in the document
array SolrInputDocument::toArray()
     Returns an array representation of the input document
array SolrObject::getPropertyNames()
     Returns an array of all the names of the properties
array SolrParams::getParams()
     Returns an array of non URL-encoded parameters
array SolrParams::getPreparedParams()
     Returns an array of URL-encoded parameters
array SolrQuery::getFacetDateFields()
     Returns all the facet.date fields
array SolrQuery::getFacetDateOther([string $field_override = ``])
     Returns the value for the facet.date.other parameter
array SolrQuery::getFacetFields()
     Returns all the facet fields
array SolrQuery::getFacetQueries()
     Returns all the facet queries
array SolrQuery::getFields()
     Returns the list of fields that will be returned in the response
array SolrQuery::getFilterQueries()
     Returns an array of filter queries
array SolrQuery::getHighlightFields()
     Returns all the fields that Solr should generate highlighted snippets for
array SolrQuery::getMltFields()
     Returns all the fields to use for similarity
array SolrQuery::getMltQueryFields()
     Returns the query fields and their boosts
array SolrQuery::getSortFields()
     Returns all the sort fields
array SolrQuery::getStatsFacets()
     Returns all the stats facets that were set
array SolrQuery::getStatsFields()
     Returns all the statistics fields
array SphinxClient::buildExcerpts(array $docs, string $index, string $words [, array $opts = ``])
     Build text snippets
array SphinxClient::buildKeywords(string $query, string $index, bool $hits)
     Extract keywords from query
array SphinxClient::query(string $query [, string $index = \"*\" [, string $comment = \"\"]])
     Execute search query
array SphinxClient::runQueries()
     Run a batch of search queries
array SphinxClient::status()
     Queries searchd status
array SplFileObject::fgetcsv([string $delimiter = \",\" [, string $enclosure = \"\\"\" [, string $escape = \"\\\"]]])
     Gets line from file and parse as CSV fields
array SplFileObject::fstat()
     Gets information about the file
array SplFileObject::getCsvControl()
     Get the delimiter and enclosure character for CSV
array SplFixedArray::toArray()
     Returns a PHP array from the fixed array
array split(string $pattern, string $string [, int $limit = -1])
     Split string into array by regular expression
array spliti(string $pattern, string $string [, int $limit = -1])
     Split string into array by regular expression case insensitive
array spl_autoload_functions()
     Return all registered __autoload() functions
array spl_classes()
     Return available SPL classes
array SQLite3::version()
     Returns the SQLite3 library version as a string constant and as a number
array SQLite3Result::fetchArray([int $mode = SQLITE3_BOTH])
     Fetches a result row as an associative or numerically indexed array or both
array SQLiteDatabase::arrayQuery(resource $dbhandle, string $query [, int $result_type = `` [, bool $decode_binary = ``]])
     Execute a query against a given database and returns an array
array SQLiteDatabase::fetchColumnTypes(string $table_name, resource $dbhandle [, int $result_type = ``])
     Return an array of column types from a particular table
array SQLiteDatabase::singleQuery(resource $db, string $query [, bool $first_row_only = `` [, bool $decode_binary = ``]])
     Executes a query and returns either an array for one single column or the value of the first row
array SQLiteResult::current(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the current row from a result set as an array
array SQLiteResult::fetch(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the next row from a result set as an array
array SQLiteResult::fetchAll(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches all rows from a result set as an array of arrays
array SQLiteUnbuffered::current(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the current row from a result set as an array
array SQLiteUnbuffered::fetch(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the next row from a result set as an array
array SQLiteUnbuffered::fetchAll(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches all rows from a result set as an array of arrays
array sqlite_array_query(resource $dbhandle, string $query [, int $result_type = `` [, bool $decode_binary = ``]])
     Execute a query against a given database and returns an array
array sqlite_current(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the current row from a result set as an array
array sqlite_fetch_all(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches all rows from a result set as an array of arrays
array sqlite_fetch_array(resource $result [, int $result_type = SQLITE_BOTH [, bool $decode_binary = true]])
     Fetches the next row from a result set as an array
array sqlite_fetch_column_types(string $table_name, resource $dbhandle [, int $result_type = ``])
     Return an array of column types from a particular table
array sqlite_single_query(resource $db, string $query [, bool $first_row_only = `` [, bool $decode_binary = ``]])
     Executes a query and returns either an array for one single column or the value of the first row
array ssh2_methods_negotiated(resource $session)
     Return list of negotiated methods
array ssh2_publickey_list(resource $pkey)
     List currently authorized publickeys
array ssh2_sftp_lstat(resource $sftp, string $path)
     Stat a symbolic link
array ssh2_sftp_stat(resource $sftp, string $path)
     Stat a file on a remote filesystem
array stat(string $filename)
     Gives information about a file
array stats_rand_get_seeds()
     Not documented
array stats_rand_phrase_to_seeds(string $phrase)
     generate two seeds for the RGN random number generator
array Stomp::getReadTimeout(resource $link)
     Gets read timeout
array Stomp::readFrame([string $class_name = \"stompFrame\", resource $link])
     Reads the next frame
array stomp_get_read_timeout(resource $link)
     Gets read timeout
array stomp_read_frame([string $class_name = \"stompFrame\", resource $link])
     Reads the next frame
array streamWrapper::stream_stat()
     Retrieve information about a file resource
array streamWrapper::url_stat(string $path, int $flags)
     Retrieve information about a file
array stream_context_get_options(resource $stream_or_context)
     Retrieve options for a stream/wrapper/context
array stream_context_get_params(resource $stream_or_context)
     Retrieves parameters from a context
array stream_get_filters()
     Retrieve list of registered filters
array stream_get_meta_data(resource $stream)
     Retrieves header/meta data from streams/file pointers
array stream_get_transports()
     Retrieve list of registered socket transports
array stream_get_wrappers()
     Retrieve list of registered streams
array stream_socket_pair(int $domain, int $type, int $protocol)
     Creates a pair of connected, indistinguishable socket streams
array strptime(string $date, string $format)
     Parse a time/date generated with strftime
array str_getcsv(string $input [, string $delimiter = `,` [, string $enclosure = `\"` [, string $escape = `\\`]]])
     Parse a CSV string into an array
array str_split(string $string [, int $split_length = 1])
     Convert a string to an array
array svn_blame(string $repository_url [, int $revision_no = SVN_REVISION_HEAD])
     Get the SVN blame for a file
array svn_commit(string $log, array $targets [, bool $dontrecurse = ``])
     Sends changes from the local working copy to the repository
array svn_diff(string $path1, int $rev1, string $path2, int $rev2)
     Recursively diffs two paths
array svn_fs_dir_entries(resource $fsroot, string $path)
     Enumerates the directory entries under path; returns a hash of dir names to file type
array svn_log(string $repos_url [, int $start_revision = `` [, int $end_revision = `` [, int $limit = `` [, int $flags = SVN_DISCOVER_CHANGED_PATHS | SVN_STOP_ON_COPY]]]])
     Returns the commit log messages of a repository URL
array svn_ls(string $repos_url [, int $revision_no = SVN_REVISION_HEAD [, bool $recurse = false [, bool $peg = false]]])
     Returns list of directory contents in repository URL, optionally at revision number
array svn_status(string $path [, int $flags = ``])
     Returns the status of working copy files and directories
array swf_getbitmapinfo(int $bitmapid)
     Get information about a bitmap
array swf_getfontinfo()
     Gets font information
array Swish::getMetaList(string $index_name)
     Get the list of meta entries for the index
array Swish::getPropertyList(string $index_name)
     Get the list of properties for the index
array SwishResult::getMetaList()
     Get a list of meta entries
array SwishResult::stem(string $word)
     Stems the given word
array SwishResults::getParsedWords(string $index_name)
     Get an array of parsed words
array SwishResults::getRemovedStopwords(string $index_name)
     Get an array of stopwords removed from the query
array sybase_fetch_array(resource $result)
     Fetch row as array
array sybase_fetch_assoc(resource $result)
     Fetch a result row as an associative array
array sybase_fetch_row(resource $result)
     Get a result row as an enumerated array
array sys_getloadavg()
     Gets system load average
array tidy::getConfig(tidy $object)
     Get current Tidy configuration
array tidy_get_config(tidy $object)
     Get current Tidy configuration
array token_get_all(string $source)
     Split given source into PHP tokens
array TokyoTyrant::fwmKeys(string $prefix, int $max_recs)
     Returns the forward matching keys
array TokyoTyrant::get(mixed $keys)
     The get purpose
array TokyoTyrant::stat()
     Get statistics
array TokyoTyrantQuery::current()
     Returns the current element
array TokyoTyrantQuery::metaSearch(array $queries, int $type)
     Retrieve records with multiple queries
array TokyoTyrantQuery::next()
     Moves the iterator to next entry
array TokyoTyrantQuery::search()
     Searches records
array Transliterator::listIDs()
     Get transliterator IDs
array transliterator_list_ids()
     Get transliterator IDs
array udm_cat_list(resource $agent, string $category)
     Get all the categories on the same level with the current one
array udm_cat_path(resource $agent, string $category)
     Get the path to the current category
array unpack(string $format, string $data)
     Unpack data from binary string
array V8Js::getExtensions()
     Return an array of registered extensions
array vpopmail_alias_get(string $alias, string $domain)
     Get all lines of an alias for a domain
array vpopmail_alias_get_all(string $domain)
     Get all lines of an alias for a domain
array win32_ps_list_procs()
     List running processes
array win32_ps_stat_mem()
     Stat memory utilization
array win32_ps_stat_proc([int $pid = ``])
     Stat process
array wincache_fcache_fileinfo([bool $summaryonly = false])
     Retrieves information about files cached in the file cache
array wincache_fcache_meminfo()
     Retrieves information about file cache memory usage
array wincache_ocache_fileinfo([bool $summaryonly = false])
     Retrieves information about files cached in the opcode cache
array wincache_ocache_meminfo()
     Retrieves information about opcode cache memory usage
array wincache_rplist_fileinfo([bool $summaryonly = false])
     Retrieves information about resolve file path cache
array wincache_rplist_meminfo()
     Retrieves information about memory usage by the resolve file path cache
array wincache_scache_info([bool $summaryonly = false])
     Retrieves information about files cached in the session cache
array wincache_scache_meminfo()
     Retrieves information about session cache memory usage
array wincache_ucache_info([bool $summaryonly = false [, string $key = ``]])
     Retrieves information about data stored in the user cache
array wincache_ucache_meminfo()
     Retrieves information about user cache memory usage
array xattr_list(string $filename [, int $flags = ``])
     Get a list of extended attributes
array xhprof_disable()
     Stops xhprof profiler
array xmlrpc_parse_method_descriptions(string $xml)
     Decodes XML into a list of method descriptions
array yaz_es_result(resource $id)
     Inspects Extended Services Result
array yaz_scan_result(resource $id [, array $result = ``])
     Returns Scan Response result
array yp_cat(string $domain, string $map)
     Return an array containing the entire map
array yp_first(string $domain, string $map)
     Returns the first key-value pair from the named map
array yp_next(string $domain, string $map, string $key)
     Returns the next key-value pair in the named map
bool apache_child_terminate()
     Terminate apache process after this request
bool apache_reset_timeout()
     Reset the Apache write timer
bool apache_setenv(string $variable, string $value [, bool $walk_to_top = false])
     Set an Apache subprocess_env variable
bool apc_bin_load(string $data [, int $flags = ``])
     Load a binary dump into the APC file/user cache
bool apc_bin_loadfile(string $filename [, resource $context = `` [, int $flags = ``]])
     Load a binary dump from a file into the APC file/user cache
bool apc_cas(string $key, int $old, int $new)
     Updates an old value with a new value
bool apc_clear_cache([string $cache_type = ``])
     Clears the APC cache
bool apc_define_constants(string $key, array $constants [, bool $case_sensitive = true])
     Defines a set of constants for retrieval and mass-definition
bool apc_load_constants(string $key [, bool $case_sensitive = true])
     Loads a set of constants from the cache
bool apd_breakpoint(int $debug_level)
     Stops the interpreter and waits on a CR from the socket
bool apd_continue(int $debug_level)
     Restarts the interpreter
bool apd_echo(string $output)
     Echo to the debugging socket
bool apd_set_session_trace_socket(string $tcp_server, int $socket_type, int $port, int $debug_level)
     Starts the remote session debugging
bool ArrayObject::offsetExists(mixed $index)
     Returns whether the requested index exists
bool array_key_exists(mixed $key, array $search)
     Checks if the given key or index exists in the array
bool array_walk(array $array, callback $funcname [, mixed $userdata = ``])
     Apply a user function to every member of an array
bool array_walk_recursive(array $input, callback $funcname [, mixed $userdata = ``])
     Apply a user function recursively to every member of an array
bool arsort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array in reverse order and maintain index association
bool asort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array and maintain index association
bool assert(mixed $assertion)
     Checks if assertion is FALSE
bool bbcode_add_element(resource $bbcode_container, string $tag_name, array $tag_rules)
     Adds a bbcode element
bool bbcode_add_smiley(resource $bbcode_container, string $smiley, string $replace_by)
     Adds a smiley to the parser
bool bbcode_destroy(resource $bbcode_container)
     Close BBCode_container resource
bool bbcode_set_arg_parser(resource $bbcode_container, resource $bbcode_arg_parser)
     Attach another parser in order to use another rule set for argument parsing
bool bbcode_set_flags(resource $bbcode_container, int $flags [, int $mode = BBCODE_SET_FLAGS_SET])
     Set or alter parser options
bool bcompiler_load(string $filename)
     Reads and creates classes from a bz compressed file
bool bcompiler_load_exe(string $filename)
     Reads and creates classes from a bcompiler exe file
bool bcompiler_parse_class(string $class, string $callback)
     Reads the bytecodes of a class and calls back to a user function
bool bcompiler_read(resource $filehandle)
     Reads and creates classes from a filehandle
bool bcompiler_write_class(resource $filehandle, string $className [, string $extends = ``])
     Writes an defined class as bytecodes
bool bcompiler_write_constant(resource $filehandle, string $constantName)
     Writes a defined constant as bytecodes
bool bcompiler_write_exe_footer(resource $filehandle, int $startpos)
     Writes the start pos, and sig to the end of a exe type file
bool bcompiler_write_file(resource $filehandle, string $filename)
     Writes a php source file as bytecodes
bool bcompiler_write_footer(resource $filehandle)
     Writes the single character \x00 to indicate End of compiled data
bool bcompiler_write_function(resource $filehandle, string $functionName)
     Writes an defined function as bytecodes
bool bcompiler_write_functions_from_file(resource $filehandle, string $fileName)
     Writes all functions defined in a file as bytecodes
bool bcompiler_write_header(resource $filehandle [, string $write_ver = ``])
     Writes the bcompiler header
bool bcompiler_write_included_filename(resource $filehandle, string $filename)
     Writes an included file as bytecodes
bool bcscale(int $scale)
     Set default scale parameter for all bc math functions
bool CairoContext::hasCurrentPoint(CairoContext $context)
     The hasCurrentPoint purpose
bool CairoContext::inFill(string $x, string $y, CairoContext $context)
     The inFill purpose
bool CairoContext::inStroke(string $x, string $y, CairoContext $context)
     The inStroke purpose
bool CairoFontOptions::equal(string $other)
     The equal purpose
bool CairoPsSurface::getEps()
     The getEps purpose
bool cairo_font_options_equal(CairoFontOptions $options, CairoFontOptions $other)
     Description
bool cairo_has_current_point(CairoContext $context)
     The hasCurrentPoint purpose
bool cairo_in_fill(string $x, string $y, CairoContext $context)
     The inFill purpose
bool cairo_in_stroke(string $x, string $y, CairoContext $context)
     The inStroke purpose
bool cairo_ps_surface_get_eps(CairoPsSurface $surface)
     Description
bool chdb_create(string $pathname, array $data)
     Creates a chdb file
bool chdir(string $directory)
     Change directory
bool checkdate(int $month, int $day, int $year)
     Validate a Gregorian date
bool checkdnsrr(string $host [, string $type = \"MX\"])
     Check DNS records corresponding to a given Internet host name or IP address
bool chgrp(string $filename, mixed $group)
     Changes file group
bool chmod(string $filename, int $mode)
     Changes file mode
bool chown(string $filename, mixed $user)
     Changes file owner
bool chroot(string $directory)
     Change the root directory
bool classkit_method_add(string $classname, string $methodname, string $args, string $code [, int $flags = CLASSKIT_ACC_PUBLIC])
     Dynamically adds a new method to a given class
bool classkit_method_copy(string $dClass, string $dMethod, string $sClass [, string $sMethod = ``])
     Copies a method from class to another
bool classkit_method_redefine(string $classname, string $methodname, string $args, string $code [, int $flags = CLASSKIT_ACC_PUBLIC])
     Dynamically changes the code of the given method
bool classkit_method_remove(string $classname, string $methodname)
     Dynamically removes the given method
bool classkit_method_rename(string $classname, string $methodname, string $newname)
     Dynamically changes the name of the given method
bool class_alias([string $original = `` [, string $alias = ``]])
     Creates an alias for a class
bool class_exists(string $class_name [, bool $autoload = true])
     Checks if the class has been defined
bool closelog()
     Close connection to system logger
bool Collator::asort(array $arr [, int $sort_flag = ``, Collator $coll])
     Sort array maintaining index association
bool Collator::setAttribute(int $attr, int $val, Collator $coll)
     Set collation attribute
bool Collator::setStrength(int $strength, Collator $coll)
     Set collation strength
bool Collator::sort(array $arr [, int $sort_flag = ``, Collator $coll])
     Sort array using specified collator
bool Collator::sortWithSortKeys(array $arr, Collator $coll)
     Sort array using specified collator and sort keys
bool collator_asort(array $arr [, int $sort_flag = ``, Collator $coll])
     Sort array maintaining index association
bool collator_set_attribute(int $attr, int $val, Collator $coll)
     Set collation attribute
bool collator_set_strength(int $strength, Collator $coll)
     Set collation strength
bool collator_sort(array $arr [, int $sort_flag = ``, Collator $coll])
     Sort array using specified collator
bool collator_sort_with_sort_keys(array $arr, Collator $coll)
     Sort array using specified collator and sort keys
bool com_event_sink(variant $comobject, object $sinkobject [, mixed $sinkinterface = ``])
     Connect events from a COM object to a PHP object
bool com_isenum(variant $com_module)
     Indicates if a COM object has an IEnumVariant interface for iteration [deprecated]
bool com_load_typelib(string $typelib_name [, bool $case_insensitive = true])
     Loads a Typelib
bool com_message_pump([int $timeoutms = ``])
     Process COM messages, sleeping for up to timeoutms milliseconds
bool com_print_typeinfo(object $comobject [, string $dispinterface = `` [, bool $wantsink = false]])
     Print out a PHP class definition for a dispatchable interface
bool copy(string $source, string $dest [, resource $context = ``])
     Copies file
bool crack_check(resource $dictionary, string $password)
     Performs an obscure check with the given password
bool crack_closedict([resource $dictionary = ``])
     Closes an open CrackLib dictionary
bool cubrid_bind(resource $req_identifier, mixed $bind_param, mixed $bind_value [, string $bind_value_type = ``])
     Bind variables to a prepared statement as parameters
bool cubrid_close([resource $conn_identifier = ``])
     Close CUBRID connection
bool cubrid_close_request(resource $req_identifier)
     Close the request handle
bool cubrid_commit(resource $conn_identifier)
     Commit a transaction
bool cubrid_disconnect(resource $conn_identifier)
     Close a database connection
bool cubrid_drop(resource $conn_identifier, string $oid)
     Delete an instance using OID
bool cubrid_execute(resource $conn_identifier, string $SQL [, int $option = ``, resource $request_identifier])
     Execute a prepared SQL statement
bool cubrid_field_seek(resource $result [, int $field_offset = ``])
     Move the result set cursor to the specified field offset
bool cubrid_free_result(resource $req_identifier)
     Free the memory occupied by the result data
bool cubrid_get_autocommit(resource $conn_identifier)
     Get auto-commit mode of the connection
bool cubrid_lob_close(array $lob_identifier_array)
     Close BLOB/CLOB data
bool cubrid_lob_export(resource $conn_identifier, resource $lob_identifier, string $path_name)
     Export BLOB/CLOB data to file
bool cubrid_lob_send(resource $conn_identifier, resource $lob_identifier)
     Read BLOB/CLOB data and send straight to browser
bool cubrid_lock_read(resource $conn_identifier, string $oid)
     Set a read lock on the given OID
bool cubrid_lock_write(resource $conn_identifier, string $oid)
     Set a write lock on the given OID
bool cubrid_next_result(resource $result)
     Get result of next query when executing multiple SQL statements
bool cubrid_ping([resource $conn_identifier = ``])
     Ping a server connection or reconnect if there is no connection
bool cubrid_rollback(resource $conn_identifier)
     Roll back a transaction
bool cubrid_seq_drop(resource $conn_identifier, string $oid, string $attr_name, int $index)
     Delete an element from sequence type column using OID
bool cubrid_seq_insert(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)
     Insert an element to a sequence type column using OID
bool cubrid_seq_put(resource $conn_identifier, string $oid, string $attr_name, int $index, string $seq_element)
     Update the element value of sequence type column using OID
bool cubrid_set_add(resource $conn_identifier, string $oid, string $attr_name, string $set_element)
     Insert a single element to set type column using OID
bool cubrid_set_autocommit(resource $conn_identifier, bool $mode)
     Set autocommit mode of the connection
bool cubrid_set_db_parameter(resource $conn_identifier, int $param_type, int $param_value)
     Sets the CUBRID database parameters
bool cubrid_set_drop(resource $conn_identifier, string $oid, string $attr_name, string $set_element)
     Delete an element from set type column using OID
bool curl_setopt(resource $ch, int $option, mixed $value)
     Set an option for a cURL transfer
bool curl_setopt_array(resource $ch, array $options)
     Set multiple options for a cURL transfer
bool cyrus_bind(resource $connection, array $callbacks)
     Bind callbacks to a Cyrus IMAP connection
bool cyrus_close(resource $connection)
     Close connection to a Cyrus IMAP server
bool cyrus_unbind(resource $connection, string $trigger_name)
     Unbind ...
bool datefmt_is_lenient(IntlDateFormatter $fmt)
     Get the lenient used for the IntlDateFormatter
bool datefmt_set_calendar(int $which, IntlDateFormatter $fmt)
     sets the calendar used to the appropriate calendar, which must be
bool datefmt_set_lenient(bool $lenient, IntlDateFormatter $fmt)
     Set the leniency of the parser
bool datefmt_set_pattern(string $pattern, IntlDateFormatter $fmt)
     Set the pattern used for the IntlDateFormatter
bool datefmt_set_timezone_id(string $zone, IntlDateFormatter $fmt)
     Sets the time zone to use
bool date_default_timezone_set(string $timezone_identifier)
     Sets the default timezone used by all date/time functions in a script
bool db2_bind_param(resource $stmt, int $parameter-number, string $variable-name [, int $parameter-type = `` [, int $data-type = `` [, int $precision = -1 [, int $scale = ``]]]])
     Binds a PHP variable to an SQL statement parameter
bool db2_close(resource $connection)
     Closes a database connection
bool db2_commit(resource $connection)
     Commits a transaction
bool db2_execute(resource $stmt [, array $parameters = ``])
     Executes a prepared SQL statement
bool db2_fetch_row(resource $stmt [, int $row_number = ``])
     Sets the result set pointer to the next row or requested row
bool db2_free_result(resource $stmt)
     Frees resources associated with a result set
bool db2_free_stmt(resource $stmt)
     Frees resources associated with the indicated statement resource
bool db2_pclose(resource $resource)
     Closes a persistent database connection
bool db2_rollback(resource $connection)
     Rolls back a transaction
bool db2_set_option(resource $resource, array $options, int $type)
     Set options for connection or statement resources
bool dbase_add_record(int $dbase_identifier, array $record)
     Adds a record to a database
bool dbase_close(int $dbase_identifier)
     Closes a database
bool dbase_delete_record(int $dbase_identifier, int $record_number)
     Deletes a record from a database
bool dbase_pack(int $dbase_identifier)
     Packs a database
bool dbase_replace_record(int $dbase_identifier, array $record, int $record_number)
     Replaces a record in a database
bool dba_delete(string $key, resource $handle)
     Delete DBA entry specified by key
bool dba_exists(string $key, resource $handle)
     Check whether key exists
bool dba_insert(string $key, string $value, resource $handle)
     Insert entry
bool dba_optimize(resource $handle)
     Optimize database
bool dba_replace(string $key, string $value, resource $handle)
     Replace or insert entry
bool dba_sync(resource $handle)
     Synchronize database
bool dbx_sort(object $result, string $user_compare_function)
     Sort a result from a dbx_query by a custom sort function
bool define(string $name, mixed $value [, bool $case_insensitive = false])
     Defines a named constant
bool defined(string $name)
     Checks whether a given named constant exists
bool dio_tcsetattr(resource $fd, array $options)
     Sets terminal attributes and baud rate for a serial port
bool dio_truncate(resource $fd, int $offset)
     Truncates file descriptor fd to offset bytes
bool DirectoryIterator::isDir()
     Determine if current DirectoryIterator item is a directory
bool DirectoryIterator::isDot()
     Determine if current DirectoryIterator item is `.` or `..`
bool DirectoryIterator::isExecutable()
     Determine if current DirectoryIterator item is executable
bool DirectoryIterator::isFile()
     Determine if current DirectoryIterator item is a regular file
bool DirectoryIterator::isLink()
     Determine if current DirectoryIterator item is a symbolic link
bool DirectoryIterator::isReadable()
     Determine if current DirectoryIterator item can be read
bool DirectoryIterator::isWritable()
     Determine if current DirectoryIterator item can be written to
bool DirectoryIterator::valid()
     Check whether current DirectoryIterator position is a valid file
bool dl(string $library)
     Loads a PHP extension at runtime
bool DOMAttr::isId()
     Checks if attribute is a defined ID
bool DomAttribute::set_value(string $content)
     Sets the value of an attribute
bool DomAttribute::specified()
     Checks if attribute is specified
bool DOMDocument::loadHTML(string $source)
     Load HTML from a string
bool DOMDocument::loadHTMLFile(string $filename)
     Load HTML from a file
bool DOMDocument::registerNodeClass(string $baseclass, string $extendedclass)
     Register extended class used to create base node type
bool DOMDocument::relaxNGValidate(string $filename)
     Performs relaxNG validation on the document
bool DOMDocument::relaxNGValidateSource(string $source)
     Performs relaxNG validation on the document
bool DOMDocument::schemaValidate(string $filename)
     Validates a document based on a schema
bool DOMDocument::schemaValidateSource(string $source)
     Validates a document based on a schema
bool DOMDocument::validate()
     Validates the document based on its DTD
bool DOMDocumentFragment::appendXML(string $data)
     Append raw XML data
bool DomDocumentType::internal_subset()
     Returns internal subset
bool DOMElement::hasAttribute(string $name)
     Checks to see if attribute exists
bool DOMElement::hasAttributeNS(string $namespaceURI, string $localName)
     Checks to see if attribute exists
bool DomElement::has_attribute(string $name)
     Checks to see if an attribute exists in the current node
bool DOMElement::removeAttribute(string $name)
     Removes attribute
bool DOMElement::removeAttributeNode(DOMAttr $oldnode)
     Removes attribute
bool DOMElement::removeAttributeNS(string $namespaceURI, string $localName)
     Removes attribute
bool DomElement::remove_attribute(string $name)
     Removes attribute
bool DOMImplementation::hasFeature(string $feature, string $version)
     Test if the DOM implementation implements a specific feature
bool DomNode::add_namespace(string $uri, string $prefix)
     Adds a namespace declaration to a node
bool DOMNode::hasAttributes()
     Checks if node has attributes
bool DOMNode::hasChildNodes()
     Checks if node has children
bool DOMNode::isDefaultNamespace(string $namespaceURI)
     Checks if the specified namespaceURI is the default namespace or not
bool DOMNode::isSameNode(DOMNode $node)
     Indicates if two nodes are the same node
bool DOMNode::isSupported(string $feature, string $version)
     Checks if feature is supported for specified version
bool DOMText::isWhitespaceInElementContent()
     Indicates whether this text node contains whitespace
bool DOMXPath::registerNamespace(string $prefix, string $namespaceURI)
     Registers the namespace with the DOMXPath object
boolean db2_num_rows(resource $stmt)
     Returns the number of rows affected by an SQL statement
bool empty(mixed $var)
     Determine whether a variable is empty
bool enchant_broker_dict_exists(resource $broker, string $tag)
     Whether a dictionary exists or not. Using non-empty tag
bool enchant_broker_free(resource $broker)
     Free the broker resource and its dictionnaries
bool enchant_broker_free_dict(resource $dict)
     Free a dictionary resource
bool enchant_broker_set_ordering(resource $broker, string $tag, string $ordering)
     Declares a preference of dictionaries to use for the language
bool enchant_dict_check(resource $dict, string $word)
     Check whether a word is correctly spelled or not
bool enchant_dict_is_in_session(resource $dict, string $word)
     whether or not `word` exists in this spelling-session
bool enchant_dict_quick_check(resource $dict, string $word [, array $suggestions = ``])
     Check the word is correctly spelled and provide suggestions
bool error_log(string $message [, int $message_type = `` [, string $destination = `` [, string $extra_headers = ``]]])
     Send an error message somewhere
bool event_add(resource $event [, int $timeout = -1])
     Add an event to the set of monitored events
bool event_base_loopbreak(resource $event_base)
     Abort event loop
bool event_base_loopexit(resource $event_base [, int $timeout = -1])
     Exit loop after a time
bool event_base_priority_init(resource $event_base, int $npriorities)
     Set the number of event priority levels
bool event_base_set(resource $event, resource $event_base)
     Associate event base with an event
bool event_buffer_base_set(resource $bevent, resource $event_base)
     Associate buffered event with an event base
bool event_buffer_disable(resource $bevent, int $events)
     Disable a buffered event
bool event_buffer_enable(resource $bevent, int $events)
     Enable a buffered event
bool event_buffer_priority_set(resource $bevent, int $priority)
     Assign a priority to a buffered event
bool event_buffer_set_callback(resource $event, mixed $readcb, mixed $writecb, mixed $errorcb [, mixed $arg = ``])
     Set or reset callbacks for a buffered event
bool event_buffer_write(resource $bevent, string $data [, int $data_size = -1])
     Write data to a buffered event
bool event_del(resource $event)
     Remove an event from the set of monitored events
bool event_set(resource $event, mixed $fd, int $events, mixed $callback [, mixed $arg = ``])
     Prepare an event
bool extension_loaded(string $name)
     Find out whether an extension is loaded
bool fam_cancel_monitor(resource $fam, resource $fam_monitor)
     Terminate monitoring
bool fam_resume_monitor(resource $fam, resource $fam_monitor)
     Resume suspended monitoring
bool fam_suspend_monitor(resource $fam, resource $fam_monitor)
     Temporarily suspend monitoring
bool fbsql_autocommit(resource $link_identifier [, bool $OnOff = ``])
     Enable or disable autocommit
bool fbsql_change_user(string $user, string $password [, string $database = `` [, resource $link_identifier = ``]])
     Change logged in user of the active connection
bool fbsql_close([resource $link_identifier = ``])
     Close FrontBase connection
bool fbsql_commit([resource $link_identifier = ``])
     Commits a transaction to the database
bool fbsql_create_db(string $database_name [, resource $link_identifier = `` [, string $database_options = ``]])
     Create a FrontBase database
bool fbsql_data_seek(resource $result, int $row_number)
     Move internal result pointer
bool fbsql_drop_db(string $database_name [, resource $link_identifier = ``])
     Drop (delete) a FrontBase database
bool fbsql_field_seek(resource $result [, int $field_offset = ``])
     Set result pointer to a specified field offset
bool fbsql_free_result(resource $result)
     Free result memory
bool fbsql_next_result(resource $result)
     Move the internal result pointer to the next result
bool fbsql_rollback([resource $link_identifier = ``])
     Rollback a transaction to the database
bool fbsql_select_db([string $database_name = `` [, resource $link_identifier = ``]])
     Select a FrontBase database
bool fbsql_set_lob_mode(resource $result, int $lob_mode)
     Set the LOB retrieve mode for a FrontBase result set
bool fbsql_set_password(resource $link_identifier, string $user, string $password, string $old_password)
     Change the password for a given user
bool fbsql_start_db(string $database_name [, resource $link_identifier = `` [, string $database_options = ``]])
     Start a database on local or remote server
bool fbsql_stop_db(string $database_name [, resource $link_identifier = ``])
     Stop a database on local or remote server
bool fbsql_warnings([bool $OnOff = ``])
     Enable or disable FrontBase warnings
bool fclose(resource $handle)
     Closes an open file pointer
bool fdf_add_doc_javascript(resource $fdf_document, string $script_name, string $script_code)
     Adds javascript code to the FDF document
bool fdf_add_template(resource $fdf_document, int $newpage, string $filename, string $template, int $rename)
     Adds a template into the FDF document
bool fdf_enum_values(resource $fdf_document, callback $function [, mixed $userdata = ``])
     Call a user defined function for each document value
bool fdf_get_ap(resource $fdf_document, string $field, int $face, string $filename)
     Get the appearance of a field
bool fdf_remove_item(resource $fdf_document, string $fieldname, int $item)
     Sets target frame for form
bool fdf_save(resource $fdf_document [, string $filename = ``])
     Save a FDF document
bool fdf_set_ap(resource $fdf_document, string $field_name, int $face, string $filename, int $page_number)
     Set the appearance of a field
bool fdf_set_encoding(resource $fdf_document, string $encoding)
     Sets FDF character encoding
bool fdf_set_file(resource $fdf_document, string $url [, string $target_frame = ``])
     Set PDF document to display FDF data in
bool fdf_set_flags(resource $fdf_document, string $fieldname, int $whichFlags, int $newFlags)
     Sets a flag of a field
bool fdf_set_javascript_action(resource $fdf_document, string $fieldname, int $trigger, string $script)
     Sets an javascript action of a field
bool fdf_set_on_import_javascript(resource $fdf_document, string $script, bool $before_data_import)
     Adds javascript code to be executed when Acrobat opens the FDF
bool fdf_set_opt(resource $fdf_document, string $fieldname, int $element, string $str1, string $str2)
     Sets an option of a field
bool fdf_set_status(resource $fdf_document, string $status)
     Set the value of the /STATUS key
bool fdf_set_submit_form_action(resource $fdf_document, string $fieldname, int $trigger, string $script, int $flags)
     Sets a submit form action of a field
bool fdf_set_target_frame(resource $fdf_document, string $frame_name)
     Set target frame for form display
bool fdf_set_value(resource $fdf_document, string $fieldname, mixed $value [, int $isName = ``])
     Set the value of a field
bool fdf_set_version(resource $fdf_document, string $version)
     Sets version number for a FDF file
bool feof(resource $handle)
     Tests for end-of-file on a file pointer
bool fflush(resource $handle)
     Flushes the output to a file
bool filepro(string $directory)
     Read and verify the map file
bool file_exists(string $filename)
     Checks whether a file or directory exists
bool FilterIterator::accept()
     Check whether the current element of the iterator is acceptable
bool FilterIterator::valid()
     Check whether the current element is valid
bool filter_has_var(int $type, string $variable_name)
     Checks if variable of specified type exists
bool finfo_close(resource $finfo)
     Close fileinfo resource
bool finfo_set_flags(resource $finfo, int $options)
     Set libmagic configuration options
bool flock(resource $handle, int $operation [, int $wouldblock = ``])
     Portable advisory file locking
bool fnmatch(string $pattern, string $string [, int $flags = ``])
     Match filename against a pattern
bool ftp_alloc(resource $ftp_stream, int $filesize [, string $result = ``])
     Allocates space for a file to be uploaded
bool ftp_cdup(resource $ftp_stream)
     Changes to the parent directory
bool ftp_chdir(resource $ftp_stream, string $directory)
     Changes the current directory on a FTP server
bool ftp_delete(resource $ftp_stream, string $path)
     Deletes a file on the FTP server
bool ftp_exec(resource $ftp_stream, string $command)
     Requests execution of a command on the FTP server
bool ftp_fget(resource $ftp_stream, resource $handle, string $remote_file, int $mode [, int $resumepos = ``])
     Downloads a file from the FTP server and saves to an open file
bool ftp_fput(resource $ftp_stream, string $remote_file, resource $handle, int $mode [, int $startpos = ``])
     Uploads from an open file to the FTP server
bool ftp_get(resource $ftp_stream, string $local_file, string $remote_file, int $mode [, int $resumepos = ``])
     Downloads a file from the FTP server
bool ftp_login(resource $ftp_stream, string $username, string $password)
     Logs in to an FTP connection
bool ftp_pasv(resource $ftp_stream, bool $pasv)
     Turns passive mode on or off
bool ftp_put(resource $ftp_stream, string $remote_file, string $local_file, int $mode [, int $startpos = ``])
     Uploads a file to the FTP server
bool ftp_rename(resource $ftp_stream, string $oldname, string $newname)
     Renames a file or a directory on the FTP server
bool ftp_rmdir(resource $ftp_stream, string $directory)
     Removes a directory
bool ftp_set_option(resource $ftp_stream, int $option, mixed $value)
     Set miscellaneous runtime FTP options
bool ftp_site(resource $ftp_stream, string $command)
     Sends a SITE command to the server
bool ftruncate(resource $handle, int $size)
     Truncates a file to a given length
bool function_exists(string $function_name)
     Return TRUE if the given function has been defined
bool gc_enabled()
     Returns status of the circular reference collector
bool GearmanClient::addOptions(int $options)
     Add client options
bool GearmanClient::addServer([string $host = 127.0.0.1 [, int $port = 4730]])
     Add a job server to the client
bool GearmanClient::addServers([string $servers = 127.0.0.1:4730])
     Add a list of job servers to the client
bool GearmanClient::clearCallbacks()
     Clear all task callback functions
bool GearmanClient::echo(string $workload)
     Send data to all job servers to see if they echo it back
bool GearmanClient::removeOptions(int $options)
     Remove client options
bool GearmanClient::runTasks()
     Run a list of tasks in parallel
bool GearmanClient::setCompleteCallback(callback $callback)
     Set a function to be called on task completion
bool GearmanClient::setContext(string $context)
     Set application context
bool GearmanClient::setCreatedCallback(string $callback)
     Set a callback for when a task is queued
bool GearmanClient::setData(string $data)
     Set application data (deprecated)
bool GearmanClient::setDataCallback(callback $callback)
     Callback function when there is a data packet for a task
bool GearmanClient::setExceptionCallback(callback $callback)
     Set a callback for worker exceptions
bool GearmanClient::setFailCallback(callback $callback)
     Set callback for job failure
bool GearmanClient::setOptions(int $options)
     Set client options
bool GearmanClient::setStatusCallback(callback $callback)
     Set a callback for collecting task status
bool GearmanClient::setTimeout(int $timeout)
     Set socket I/O activity timeout
bool GearmanClient::setWarningCallback(callback $callback)
     Set a callback for worker warnings
bool GearmanClient::setWorkloadCallback(callback $callback)
     Set a callback for accepting incremental data updates
bool GearmanJob::complete(string $result)
     Send the result and complete status (deprecated)
bool GearmanJob::data(string $data)
     Send data for a running job (deprecated)
bool GearmanJob::exception(string $exception)
     Send exception for running job (deprecated)
bool GearmanJob::fail()
     Send fail status (deprecated)
bool GearmanJob::sendComplete(string $result)
     Send the result and complete status
bool GearmanJob::sendData(string $data)
     Send data for a running job
bool GearmanJob::sendException(string $exception)
     Send exception for running job (exception)
bool GearmanJob::sendFail()
     Send fail status
bool GearmanJob::sendStatus(int $numerator, int $denominator)
     Send status
bool GearmanJob::sendWarning(string $warning)
     Send a warning
bool GearmanJob::setReturn(string $gearman_return_t)
     Set a return value
bool GearmanJob::status(int $numerator, int $denominator)
     Send status (deprecated)
bool GearmanJob::warning(string $warning)
     Send a warning (deprecated)
bool GearmanTask::isKnown()
     Determine if task is known
bool GearmanTask::isRunning()
     Test whether the task is currently running
bool GearmanWorker::addFunction(string $function_name, callback $function [, mixed $context = `` [, int $timeout = ``]])
     Register and add callback function
bool GearmanWorker::addOptions(int $option)
     Add worker options
bool GearmanWorker::addServer([string $host = 127.0.0.1 [, int $port = 4730]])
     Add a job server
bool GearmanWorker::addServers(string $servers)
     Add job servers
bool GearmanWorker::echo(string $workload)
     Test job server response
bool GearmanWorker::register(string $function_name [, int $timeout = ``])
     Register a function with the job server
bool GearmanWorker::removeOptions(int $option)
     Remove worker options
bool GearmanWorker::setOptions(int $option)
     Set worker options
bool GearmanWorker::setTimeout(int $timeout)
     Set socket I/O activity timeout
bool GearmanWorker::unregister(string $function_name)
     Unregister a function name with the job servers
bool GearmanWorker::unregisterAll()
     Unregister all function names with the job servers
bool GearmanWorker::wait()
     Wait for activity from one of the job servers
bool GearmanWorker::work()
     Wait for and perform jobs
bool geoip_db_avail(int $database)
     Determine if GeoIP Database is available
bool getmxrr(string $hostname, array $mxhosts [, array $weight = ``])
     Get MX records corresponding to a given Internet host name
bool Gmagick::nextimage()
     Moves to the next image
bool Gmagick::previousimage()
     Move to the previous image in the object
bool gmp_perfect_square(resource $a)
     Perfect square check
bool gmp_testbit(resource $a, int $index)
     Tests if a bit is set
bool gnupg_adddecryptkey(resource $identifier, string $fingerprint, string $passphrase)
     Add a key for decryption
bool gnupg_addencryptkey(resource $identifier, string $fingerprint)
     Add a key for encryption
bool gnupg_addsignkey(resource $identifier, string $fingerprint [, string $passphrase = ``])
     Add a key for signing
bool gnupg_cleardecryptkeys(resource $identifier)
     Removes all keys which were set for decryption before
bool gnupg_clearencryptkeys(resource $identifier)
     Removes all keys which were set for encryption before
bool gnupg_clearsignkeys(resource $identifier)
     Removes all keys which were set for signing before
bool gnupg_setarmor(resource $identifier, int $armor)
     Toggle armored output
bool gnupg_setsignmode(resource $identifier, int $signmode)
     Sets the mode for signing
bool gupnp_context_host_path(resource $context, string $local_path, string $server_path)
     Start hosting
bool gupnp_context_timeout_add(resource $context, int $timeout, mixed $callback [, mixed $arg = ``])
     Sets a function to be called at regular intervals
bool gupnp_context_unhost_path(resource $context, string $server_path)
     Stop hosting
bool gupnp_control_point_browse_start(resource $cpoint)
     Start browsing
bool gupnp_control_point_browse_stop(resource $cpoint)
     Stop browsing
bool gupnp_control_point_callback_set(resource $cpoint, int $signal, mixed $callback [, mixed $arg = ``])
     Set control point callback
bool gupnp_device_action_callback_set(resource $root_device, int $signal, string $action_name, mixed $callback [, mixed $arg = ``])
     Set device callback function
bool gupnp_root_device_get_available(resource $root_device)
     Check whether root device is available
bool gupnp_root_device_set_available(resource $root_device, bool $available)
     Set whether or not root_device is available
bool gupnp_root_device_start(resource $root_device)
     Start main loop
bool gupnp_root_device_stop(resource $root_device)
     Stop main loop
bool gupnp_service_action_return(resource $action)
     Return succesfully
bool gupnp_service_action_return_error(resource $action, int $error_code [, string $error_description = ``])
     Return error code
bool gupnp_service_action_set(resource $action, string $name, int $type, mixed $value)
     Sets the specified action return values
bool gupnp_service_freeze_notify(resource $service)
     Freeze new notifications
bool gupnp_service_notify(resource $service, string $name, int $type, mixed $value)
     Notifies listening clients
bool gupnp_service_proxy_action_set(resource $proxy, string $action, string $name, mixed $value, int $type)
     Send action to the service and set value
bool gupnp_service_proxy_add_notify(resource $proxy, string $value, int $type, mixed $callback [, mixed $arg = ``])
     Sets up callback for variable change notification
bool gupnp_service_proxy_callback_set(resource $proxy, int $signal, mixed $callback [, mixed $arg = ``])
     Set service proxy callback for signal
bool gupnp_service_proxy_get_subscribed(resource $proxy)
     Check whether subscription is valid to the service
bool gupnp_service_proxy_remove_notify(resource $proxy, string $value)
     Cancels the variable change notification
bool gupnp_service_proxy_set_subscribed(resource $proxy, bool $subscribed)
     (Un)subscribes to the service.
bool gupnp_service_thaw_notify(resource $service)
     Sends out any pending notifications and stops queuing of new ones.
bool gzclose(resource $zp)
     Close an open gz-file pointer
bool gzrewind(resource $zp)
     Rewind the position of a gz-file pointer
bool HaruAnnotation::setBorderStyle(float $width, int $dash_on, int $dash_off)
     Set the border style of the annotation
bool HaruAnnotation::setHighlightMode(int $mode)
     Set the highlighting mode of the annotation
bool HaruAnnotation::setIcon(int $icon)
     Set the icon style of the annotation
bool HaruAnnotation::setOpened(bool $opened)
     Set the initial state of the annotation
bool HaruDestination::setFit()
     Set the appearance of the page to fit the window
bool HaruDestination::setFitB()
     Set the appearance of the page to fit the bounding box of the page within the window
bool HaruDestination::setFitBH(float $top)
     Set the appearance of the page to fit the width of the bounding box
bool HaruDestination::setFitBV(float $left)
     Set the appearance of the page to fit the height of the boudning box
bool HaruDestination::setFitH(float $top)
     Set the appearance of the page to fit the window width
bool HaruDestination::setFitR(float $left, float $bottom, float $right, float $top)
     Set the appearance of the page to fit the specified rectangle
bool HaruDestination::setFitV(float $left)
     Set the appearance of the page to fit the window height
bool HaruDestination::setXYZ(float $left, float $top, float $zoom)
     Set the appearance of the page
bool HaruDoc::addPageLabel(int $first_page, int $style, int $first_num [, string $prefix = \"\"])
     Set the numbering style for the specified range of pages
bool HaruDoc::output()
     Write the document data to the output buffer
bool HaruDoc::resetError()
     Reset error state of the document handle
bool HaruDoc::resetStream()
     Rewind the temporary stream
bool HaruDoc::save(string $file)
     Save the document into the specified file
bool HaruDoc::saveToStream()
     Save the document into a temporary stream
bool HaruDoc::setCompressionMode(int $mode)
     Set compression mode for the document
bool HaruDoc::setCurrentEncoder(string $encoding)
     Set the current encoder for the document
bool HaruDoc::setEncryptionMode(int $mode [, int $key_len = 5])
     Set encryption mode for the document
bool HaruDoc::setInfoAttr(int $type, string $info)
     Set the info attribute of the document
bool HaruDoc::setInfoDateAttr(int $type, int $year, int $month, int $day, int $hour, int $min, int $sec, string $ind, int $off_hour, int $off_min)
     Set the datetime info attributes of the document
bool HaruDoc::setOpenAction(object $destination)
     Define which page is shown when the document is opened
bool HaruDoc::setPageLayout(int $layout)
     Set how pages should be displayed
bool HaruDoc::setPageMode(int $mode)
     Set how the document should be displayed
bool HaruDoc::setPagesConfiguration(int $page_per_pages)
     Set the number of pages per set of pages
bool HaruDoc::setPassword(string $owner_password, string $user_password)
     Set owner and user passwords for the document
bool HaruDoc::setPermission(int $permission)
     Set permissions for the document
bool HaruDoc::useCNSEncodings()
     Enable Chinese simplified encodings
bool HaruDoc::useCNSFonts()
     Enable builtin Chinese simplified fonts
bool HaruDoc::useCNTEncodings()
     Enable Chinese traditional encodings
bool HaruDoc::useCNTFonts()
     Enable builtin Chinese traditional fonts
bool HaruDoc::useJPEncodings()
     Enable Japanese encodings
bool HaruDoc::useJPFonts()
     Enable builtin Japanese fonts
bool HaruDoc::useKREncodings()
     Enable Korean encodings
bool HaruDoc::useKRFonts()
     Enable builtin Korean fonts
bool HaruImage::setColorMask(int $rmin, int $rmax, int $gmin, int $gmax, int $bmin, int $bmax)
     Set the color mask of the image
bool HaruImage::setMaskImage(object $mask_image)
     Set the image mask
bool HaruOutline::setDestination(object $destination)
     Set the destination for the outline
bool HaruOutline::setOpened(bool $opened)
     Set the initial state of the outline
bool HaruPage::arc(float $x, float $y, float $ray, float $ang1, float $ang2)
     Append an arc to the current path
bool HaruPage::beginText()
     Begin a text object and set the current text position to (0,0)
bool HaruPage::circle(float $x, float $y, float $ray)
     Append a circle to the current path
bool HaruPage::closePath()
     Append a straight line from the current point to the start point of the path
bool HaruPage::concat(float $a, float $b, float $c, float $d, float $x, float $y)
     Concatenate current transformation matrix of the page and the specified matrix
bool HaruPage::curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
     Append a Bezier curve to the current path
bool HaruPage::curveTo2(float $x2, float $y2, float $x3, float $y3)
     Append a Bezier curve to the current path
bool HaruPage::curveTo3(float $x1, float $y1, float $x3, float $y3)
     Append a Bezier curve to the current path
bool HaruPage::drawImage(object $image, float $x, float $y, float $width, float $height)
     Show image at the page
bool HaruPage::ellipse(float $x, float $y, float $xray, float $yray)
     Append an ellipse to the current path
bool HaruPage::endPath()
     End current path object without filling and painting operations
bool HaruPage::endText()
     End current text object
bool HaruPage::eofill()
     Fill current path using even-odd rule
bool HaruPage::eoFillStroke([bool $close_path = false])
     Fill current path using even-odd rule, then paint the path
bool HaruPage::fill()
     Fill current path using nonzero winding number rule
bool HaruPage::fillStroke([bool $close_path = false])
     Fill current path using nonzero winding number rule, then paint the path
bool HaruPage::lineTo(float $x, float $y)
     Draw a line from the current point to the specified point
bool HaruPage::moveTextPos(float $x, float $y [, bool $set_leading = false])
     Move text position to the specified offset
bool HaruPage::moveTo(float $x, float $y)
     Set starting point for new drawing path
bool HaruPage::moveToNextLine()
     Move text position to the start of the next line
bool HaruPage::rectangle(float $x, float $y, float $width, float $height)
     Append a rectangle to the current path
bool HaruPage::setCharSpace(float $char_space)
     Set character spacing for the page
bool HaruPage::setCMYKFill(float $c, float $m, float $y, float $k)
     Set filling color for the page
bool HaruPage::setCMYKStroke(float $c, float $m, float $y, float $k)
     Set stroking color for the page
bool HaruPage::setDash(array $pattern, int $phase)
     Set the dash pattern for the page
bool HaruPage::setFlatness(float $flatness)
     Set flatness for the page
bool HaruPage::setFontAndSize(object $font, float $size)
     Set font and fontsize for the page
bool HaruPage::setGrayFill(float $value)
     Set filling color for the page
bool HaruPage::setGrayStroke(float $value)
     Sets stroking color for the page
bool HaruPage::setHeight(float $height)
     Set height of the page
bool HaruPage::setHorizontalScaling(float $scaling)
     Set horizontal scaling for the page
bool HaruPage::setLineCap(int $cap)
     Set the shape to be used at the ends of lines
bool HaruPage::setLineJoin(int $join)
     Set line join style for the page
bool HaruPage::setLineWidth(float $width)
     Set line width for the page
bool HaruPage::setMiterLimit(float $limit)
     Set the current value of the miter limit of the page
bool HaruPage::setRGBFill(float $r, float $g, float $b)
     Set filling color for the page
bool HaruPage::setRGBStroke(float $r, float $g, float $b)
     Set stroking color for the page
bool HaruPage::setRotate(int $angle)
     Set rotation angle of the page
bool HaruPage::setSize(int $size, int $direction)
     Set size and direction of the page
bool HaruPage::setSlideShow(int $type, float $disp_time, float $trans_time)
     Set transition style for the page
bool HaruPage::setTextLeading(float $text_leading)
     Set text leading (line spacing) for the page
bool HaruPage::setTextMatrix(float $a, float $b, float $c, float $d, float $x, float $y)
     Set the current text transformation matrix of the page
bool HaruPage::setTextRenderingMode(int $mode)
     Set text rendering mode for the page
bool HaruPage::setTextRise(float $rise)
     Set the current value of text rising
bool HaruPage::setWidth(float $width)
     Set width of the page
bool HaruPage::setWordSpace(float $word_space)
     Set word spacing for the page
bool HaruPage::showText(string $text)
     Print text at the current position of the page
bool HaruPage::showTextNextLine(string $text [, float $word_space = `` [, float $char_space = ``]])
     Move the current position to the start of the next line and print the text
bool HaruPage::stroke([bool $close_path = false])
     Paint current path
bool HaruPage::textOut(float $x, float $y, string $text)
     Print the text on the specified position
bool HaruPage::textRect(float $left, float $top, float $right, float $bottom, string $text [, int $align = HaruPage::TALIGN_LEFT])
     Print the text inside the specified region
bool hash_update(resource $context, string $data)
     Pump data into an active hashing context
bool hash_update_file([resource $context = ``, string $filename])
     Pump data into an active hashing context from a file
bool headers_sent([string $file = `` [, int $line = ``]])
     Checks if or where headers have been sent
bool HttpMessage::send()
     Send message
bool HttpMessage::setHttpVersion(string $version)
     Set HTTP version
bool HttpMessage::setRequestMethod(string $method)
     Set request method
bool HttpMessage::setRequestUrl(string $url)
     Set request URL
bool HttpMessage::setResponseCode(int $code)
     Set response code
bool HttpMessage::setResponseStatus(string $status)
     Set response status
bool HttpQueryString::xlate(string $ie, string $oe)
     Change query strings charset
bool HttpRequest::addCookies(array $cookies)
     Add cookies
bool HttpRequest::addHeaders(array $headers)
     Add headers
bool HttpRequest::addPostFields(array $post_data)
     Add post fields
bool HttpRequest::addPostFile(string $name, string $file [, string $content_type = \"application/x-octetstream\"])
     Add post file
bool HttpRequest::addPutData(string $put_data)
     Add put data
bool HttpRequest::addQueryData(array $query_params)
     Add query data
bool HttpRequest::addRawPostData(string $raw_post_data)
     Add raw post data
bool HttpRequest::addSslOptions(array $options)
     Add ssl options
bool HttpRequest::enableCookies()
     Enable cookies
bool HttpRequest::resetCookies([bool $session_only = false])
     Reset cookies
bool HttpRequest::setContentType(string $content_type)
     Set content type
bool HttpRequest::setCookies([array $cookies = ``])
     Set cookies
bool HttpRequest::setHeaders([array $headers = ``])
     Set headers
bool HttpRequest::setMethod(int $request_method)
     Set method
bool HttpRequest::setOptions([array $options = ``])
     Set options
bool HttpRequest::setPostFields(array $post_data)
     Set post fields
bool HttpRequest::setPostFiles(array $post_files)
     Set post files
bool HttpRequest::setPutData([string $put_data = ``])
     Set put data
bool HttpRequest::setPutFile([string $file = \"\"])
     Set put file
bool HttpRequest::setQueryData(mixed $query_data)
     Set query data
bool HttpRequest::setRawPostData([string $raw_post_data = ``])
     Set raw post data
bool HttpRequest::setSslOptions([array $options = ``])
     Set ssl options
bool HttpRequest::setUrl(string $url)
     Set URL
bool HttpRequestPool::attach(HttpRequest $request)
     Attach HttpRequest
bool HttpRequestPool::detach(HttpRequest $request)
     Detach HttpRequest
bool HttpRequestPool::send()
     Send all requests
bool HttpRequestPool::socketPerform()
     Perform socket actions
bool HttpRequestPool::socketSelect([float $timeout = ``])
     Perform socket select
bool HttpResponse::getCache()
     Get cache
bool HttpResponse::getGzip()
     Get gzip
bool HttpResponse::send([bool $clean_ob = true])
     Send response
bool HttpResponse::setBufferSize(int $bytes)
     Set buffer size
bool HttpResponse::setCache(bool $cache)
     Set cache
bool HttpResponse::setCacheControl(string $control [, int $max_age = `` [, bool $must_revalidate = true]])
     Set cache control
bool HttpResponse::setContentDisposition(string $filename [, bool $inline = false])
     Set content disposition
bool HttpResponse::setContentType(string $content_type)
     Set content type
bool HttpResponse::setData(mixed $data)
     Set data
bool HttpResponse::setETag(string $etag)
     Set ETag
bool HttpResponse::setFile(string $file)
     Set file
bool HttpResponse::setGzip(bool $gzip)
     Set gzip
bool HttpResponse::setHeader(string $name [, mixed $value = `` [, bool $replace = true]])
     Set header
bool HttpResponse::setLastModified(int $timestamp)
     Set last modified
bool HttpResponse::setStream(resource $stream)
     Set stream
bool HttpResponse::setThrottleDelay(float $seconds)
     Set throttle delay
bool HttpResponse::status(int $status)
     Send HTTP response status
bool http_cache_etag([string $etag = ``])
     Caching by ETag
bool http_cache_last_modified([int $timestamp_or_expires = ``])
     Caching by last modification
bool http_match_etag(string $etag [, bool $for_range = false])
     Match ETag
bool http_match_modified([int $timestamp = -1 [, bool $for_range = false]])
     Match last modification
bool http_match_request_header(string $header, string $value [, bool $match_case = false])
     Match any header
bool http_redirect([string $url = `` [, array $params = `` [, bool $session = false [, int $status = ``]]]])
     Issue HTTP redirect
bool http_request_method_unregister(mixed $method)
     Unregister request method
bool http_send_content_disposition(string $filename [, bool $inline = false])
     Send Content-Disposition
bool http_send_content_type([string $content_type = \"application/x-octetstream\"])
     Send Content-Type
bool http_send_data(string $data)
     Send arbitrary data
bool http_send_file(string $file)
     Send file
bool http_send_last_modified([int $timestamp = ``])
     Send Last-Modified
bool http_send_status(int $status)
     Send HTTP response status
bool http_send_stream(resource $stream)
     Send stream
bool hw_api::checkin(array $parameter)
     Checks in an object
bool hw_api::checkout(array $parameter)
     Checks out an object
bool hw_api::identify(array $parameter)
     Log into Hyperwave Server
bool hw_api::link(array $parameter)
     Creates a link to an object
bool hw_api::lock(array $parameter)
     Locks an object
bool hw_api::move(array $parameter)
     Moves object between collections
bool hw_api::remove(array $parameter)
     Delete an object
bool hw_api::unlock(array $parameter)
     Unlocks a locked object
bool hw_api_object::assign(array $parameter)
     Clones object
bool hw_api_object::attreditable(array $parameter)
     Checks whether an attribute is editable
bool hw_api_object::insert(HW_API_Attribute $attribute)
     Inserts new attribute
bool hw_api_object::remove(string $name)
     Removes attribute
bool hw_changeobject(int $link, int $objid, array $attributes)
     Changes attributes of an object (obsolete)
bool hw_Close(int $connection)
     Closes the Hyperwave connection
bool hw_Deleteobject(int $connection, int $object_to_delete)
     Deletes object
bool hw_Document_SetContent(int $hw_document, string $content)
     Sets/replaces content of hw_document
bool hw_EditText(int $connection, int $hw_document)
     Retrieve text document
bool hw_Free_Document(int $hw_document)
     Frees hw_document
bool hw_insertanchors(int $hwdoc, array $anchorecs, array $dest [, array $urlprefixes = ``])
     Inserts only anchors into text
bool hw_Modifyobject(int $connection, int $object_to_change, array $remove, array $add [, int $mode = ``])
     Modifies object record
bool hw_Output_Document(int $hw_document)
     Prints hw_document
bool hw_Unlock(int $connection, int $objectID)
     Unlock object
bool ibase_add_user(resource $service_handle, string $user_name, string $password [, string $first_name = `` [, string $middle_name = `` [, string $last_name = ``]]])
     Add a user to a security database (only for IB6 or later)
bool ibase_blob_cancel(resource $blob_handle)
     Cancel creating blob
bool ibase_blob_echo(string $blob_id, resource $link_identifier)
     Output blob contents to browser
bool ibase_close([resource $connection_id = ``])
     Close a connection to an InterBase database
bool ibase_commit([resource $link_or_trans_identifier = ``])
     Commit a transaction
bool ibase_commit_ret([resource $link_or_trans_identifier = ``])
     Commit a transaction without closing it
bool ibase_delete_user(resource $service_handle, string $user_name)
     Delete a user from a security database (only for IB6 or later)
bool ibase_drop_db([resource $connection = ``])
     Drops a database
bool ibase_free_event_handler(resource $event)
     Cancels a registered event handler
bool ibase_free_query(resource $query)
     Free memory allocated by a prepared query
bool ibase_free_result(resource $result_identifier)
     Free a result set
bool ibase_maintain_db(resource $service_handle, string $db, int $action [, int $argument = ``])
     Execute a SQDE_SequodeOperations command on the database server
bool ibase_modify_user(resource $service_handle, string $user_name, string $password [, string $first_name = `` [, string $middle_name = `` [, string $last_name = ``]]])
     Modify a user to a security database (only for IB6 or later)
bool ibase_name_result(resource $result, string $name)
     Assigns a name to a result set
bool ibase_rollback([resource $link_or_trans_identifier = ``])
     Roll back a transaction
bool ibase_rollback_ret([resource $link_or_trans_identifier = ``])
     Roll back a transaction without closing it
bool ibase_service_detach(resource $service_handle)
     Disconnect from the service manager
bool ibase_timefmt(string $format [, int $columntype = ``])
     Sets the format of timestamp, date and time type columns returned from queries
bool iconv_set_encoding(string $type, string $charset)
     Set current setting for character encoding conversion
bool id3_remove_tag(string $filename [, int $version = ID3_V1_0])
     Remove an existing ID3 tag
bool id3_set_tag(string $filename, array $tag [, int $version = ID3_V1_0])
     Update information stored in an ID3 tag
bool ifxus_close_slob(int $bid)
     Deletes the slob object
bool ifxus_free_slob(int $bid)
     Deletes the slob object
bool ifx_blobinfile_mode(int $mode)
     Set the default blob mode for all select queries
bool ifx_byteasvarchar(int $mode)
     Set the default byte mode
bool ifx_close([resource $link_identifier = ``])
     Close Informix connection
bool ifx_do(resource $result_id)
     Execute a previously prepared SQL-statement
bool ifx_free_blob(int $bid)
     Deletes the blob object
bool ifx_free_char(int $bid)
     Deletes the char object
bool ifx_free_result(resource $result_id)
     Releases resources for the query
bool ifx_nullformat(int $mode)
     Sets the default return value on a fetch row
bool ifx_textasvarchar(int $mode)
     Set the default text mode
bool ifx_update_blob(int $bid, string $content)
     Updates the content of the blob object
bool ifx_update_char(int $bid, string $content)
     Updates the content of the char object
bool image2wbmp(resource $image [, string $filename = `` [, int $threshold = ``]])
     Output image to browser or file
bool imagealphablending(resource $image, bool $blendmode)
     Set the blending mode for an image
bool imageantialias(resource $image, bool $enabled)
     Should antialias functions be used or not
bool imagearc(resource $image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color)
     Draws an arc
bool imagechar(resource $image, int $font, int $x, int $y, string $c, int $color)
     Draw a character horizontally
bool imagecharup(resource $image, int $font, int $x, int $y, string $c, int $color)
     Draw a character vertically
bool imagecolordeallocate(resource $image, int $color)
     De-allocate a color for an image
bool imagecolormatch(resource $image1, resource $image2)
     Makes the colors of the palette version of an image more closely match the true color version
bool imageconvolution(resource $image, array $matrix, float $div, float $offset)
     Apply a 3x3 convolution matrix, using coefficient and offset
bool imagecopy(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h)
     Copy part of an image
bool imagecopymerge(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct)
     Copy and merge part of an image
bool imagecopymergegray(resource $dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct)
     Copy and merge part of an image with gray scale
bool imagecopyresampled(resource $dst_image, resource $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h)
     Copy and resize part of an image with resampling
bool imagecopyresized(resource $dst_image, resource $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h)
     Copy and resize part of an image
bool imagedashedline(resource $image, int $x1, int $y1, int $x2, int $y2, int $color)
     Draw a dashed line
bool imagedestroy(resource $image)
     Destroy an image
bool imageellipse(resource $image, int $cx, int $cy, int $width, int $height, int $color)
     Draw an ellipse
bool imagefill(resource $image, int $x, int $y, int $color)
     Flood fill
bool imagefilledarc(resource $image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color, int $style)
     Draw a partial arc and fill it
bool imagefilledellipse(resource $image, int $cx, int $cy, int $width, int $height, int $color)
     Draw a filled ellipse
bool imagefilledpolygon(resource $image, array $points, int $num_points, int $color)
     Draw a filled polygon
bool imagefilledrectangle(resource $image, int $x1, int $y1, int $x2, int $y2, int $color)
     Draw a filled rectangle
bool imagefilltoborder(resource $image, int $x, int $y, int $border, int $color)
     Flood fill to specific color
bool imagefilter(resource $image, int $filtertype [, int $arg1 = `` [, int $arg2 = `` [, int $arg3 = `` [, int $arg4 = ``]]]])
     Applies a filter to an image
bool imagegammacorrect(resource $image, float $inputgamma, float $outputgamma)
     Apply a gamma correction to a GD image
bool imagegd(resource $image [, string $filename = ``])
     Output GD image to browser or file
bool imagegd2(resource $image [, string $filename = `` [, int $chunk_size = `` [, int $type = ``]]])
     Output GD2 image to browser or file
bool imagegif(resource $image [, string $filename = ``])
     Output image to browser or file
bool imageistruecolor(resource $image)
     Finds whether an image is a truecolor image
bool imagejpeg(resource $image [, string $filename = `` [, int $quality = ``]])
     Output image to browser or file
bool imagelayereffect(resource $image, int $effect)
     Set the alpha blending flag to use the bundled libgd layering effects
bool imageline(resource $image, int $x1, int $y1, int $x2, int $y2, int $color)
     Draw a line
bool imagepng(resource $image [, string $filename = `` [, int $quality = `` [, int $filters = ``]]])
     Output a PNG image to either the browser or a file
bool imagepolygon(resource $image, array $points, int $num_points, int $color)
     Draws a polygon
bool imagepsencodefont(resource $font_index, string $encodingfile)
     Change the character encoding vector of a font
bool imagepsextendfont(resource $font_index, float $extend)
     Extend or condense a font
bool imagepsfreefont(resource $font_index)
     Free memory used by a PostScript Type 1 font
bool imagepsslantfont(resource $font_index, float $slant)
     Slant a font
bool imagerectangle(resource $image, int $x1, int $y1, int $x2, int $y2, int $color)
     Draw a rectangle
bool imagesavealpha(resource $image, bool $saveflag)
     Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images
bool imagesetbrush(resource $image, resource $brush)
     Set the brush image for line drawing
bool imagesetpixel(resource $image, int $x, int $y, int $color)
     Set a single pixel
bool imagesetstyle(resource $image, array $style)
     Set the style for line drawing
bool imagesetthickness(resource $image, int $thickness)
     Set the thickness for line drawing
bool imagesettile(resource $image, resource $tile)
     Set the tile image for filling
bool imagestring(resource $image, int $font, int $x, int $y, string $string, int $color)
     Draw a string horizontally
bool imagestringup(resource $image, int $font, int $x, int $y, string $string, int $color)
     Draw a string vertically
bool imagetruecolortopalette(resource $image, bool $dither, int $ncolors)
     Convert a true color image to a palette image
bool imagewbmp(resource $image [, string $filename = `` [, int $foreground = ``]])
     Output image to browser or file
bool imagexbm(resource $image, string $filename [, int $foreground = ``])
     Output XBM image to browser or file
bool Imagick::adaptiveBlurImage(float $radius, float $sigma [, int $channel = Imagick::CHANNEL_DEFAULT])
     Adds adaptive blur filter to image
bool Imagick::adaptiveResizeImage(int $columns, int $rows [, bool $bestfit = false])
     Adaptively resize image with data dependent triangulation
bool Imagick::adaptiveSharpenImage(float $radius, float $sigma [, int $channel = Imagick::CHANNEL_DEFAULT])
     Adaptively sharpen the image
bool Imagick::adaptiveThresholdImage(int $width, int $height, int $offset)
     Selects a threshold for each pixel based on a range of intensity
bool Imagick::addImage(Imagick $source)
     Adds new image to Imagick object image list
bool Imagick::addNoiseImage(int $noise_type [, int $channel = Imagick::CHANNEL_DEFAULT])
     Adds random noise to the image
bool Imagick::affineTransformImage(ImagickDraw $matrix)
     Transforms an image
bool Imagick::animateImages(string $x_server)
     Animates an image or images
bool Imagick::annotateImage(ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text)
     Annotates an image with text
bool Imagick::blackThresholdImage(mixed $threshold)
     Forces all pixels below the threshold into black
bool Imagick::blurImage(float $radius, float $sigma [, int $channel = ``])
     Adds blur filter to image
bool Imagick::borderImage(mixed $bordercolor, int $width, int $height)
     Surrounds the image with a border
bool Imagick::charcoalImage(float $radius, float $sigma)
     Simulates a charcoal drawing
bool Imagick::chopImage(int $width, int $height, int $x, int $y)
     Removes a region of an image and trims
bool Imagick::clear()
     Clears all resources associated to Imagick object
bool Imagick::clipImage()
     Clips along the first path from the 8BIM profile
bool Imagick::clipPathImage(string $pathname, bool $inside)
     Clips along the named paths from the 8BIM profile
bool Imagick::clutImage(Imagick $lookup_table [, float $channel = Imagick::CHANNEL_DEFAULT])
     Replaces colors in the image
bool Imagick::colorFloodfillImage(mixed $fill, float $fuzz, mixed $bordercolor, int $x, int $y)
     Changes the color value of any pixel that matches target
bool Imagick::colorizeImage(mixed $colorize, mixed $opacity)
     Blends the fill color with the image
bool Imagick::commentImage(string $comment)
     Adds a comment to your image
bool Imagick::compositeImage(Imagick $composite_object, int $composite, int $x, int $y [, int $channel = Imagick::CHANNEL_ALL])
     Composite one image onto another
bool Imagick::contrastImage(bool $sharpen)
     Change the contrast of the image
bool Imagick::contrastStretchImage(float $black_point, float $white_point [, int $channel = Imagick::CHANNEL_ALL])
     Enhances the contrast of a color image
bool Imagick::convolveImage(array $kernel [, int $channel = Imagick::CHANNEL_ALL])
     Applies a custom convolution kernel to the image
bool Imagick::cropImage(int $width, int $height, int $x, int $y)
     Extracts a region of the image
bool Imagick::cropThumbnailImage(int $width, int $height)
     Creates a crop thumbnail
bool Imagick::cycleColormapImage(int $displace)
     Displaces an image`s colormap
bool Imagick::decipherImage(string $passphrase)
     Deciphers an image
bool Imagick::deleteImageArtifact(string $artifact)
     Delete image artifact
bool Imagick::deskewImage(float $threshold)
     Removes skew from the image
bool Imagick::despeckleImage()
     Reduces the speckle noise in an image
bool Imagick::destroy()
     Destroys the Imagick object
bool Imagick::displayImage(string $servername)
     Displays an image
bool Imagick::displayImages(string $servername)
     Displays an image or image sequence
bool Imagick::distortImage(int $method, array $arguments, bool $bestfit)
     Distorts an image using various distortion methods
bool Imagick::drawImage(ImagickDraw $draw)
     Renders the ImagickDraw object on the current image
bool Imagick::edgeImage(float $radius)
     Enhance edges within the image
bool Imagick::embossImage(float $radius, float $sigma)
     Returns a grayscale image with a three-dimensional effect
bool Imagick::encipherImage(string $passphrase)
     Enciphers an image
bool Imagick::enhanceImage()
     Improves the quality of a noisy image
bool Imagick::equalizeImage()
     Equalizes the image histogram
bool Imagick::evaluateImage(int $op, float $constant [, int $channel = Imagick::CHANNEL_ALL])
     Applies an expression to an image
bool Imagick::extentImage(int $width, int $height, int $x, int $y)
     Set image size
bool Imagick::flipImage()
     Creates a vertical mirror image
bool Imagick::floodFillPaintImage(mixed $fill, float $fuzz, mixed $target, int $x, int $y, bool $invert [, int $channel = Imagick::CHANNEL_DEFAULT])
     Changes the color value of any pixel that matches target
bool Imagick::flopImage()
     Creates a horizontal mirror image
bool Imagick::frameImage(mixed $matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel)
     Adds a simulated three-dimensional border
bool Imagick::functionImage(int $function, array $arguments [, int $channel = Imagick::CHANNEL_DEFAULT])
     Applies a function on the image
bool Imagick::gammaImage(float $gamma [, int $channel = Imagick::CHANNEL_ALL])
     Gamma-corrects an image
bool Imagick::gaussianBlurImage(float $radius, float $sigma [, int $channel = Imagick::CHANNEL_ALL])
     Blurs an image
bool Imagick::getImageMatte()
     Return if the image has a matte channel
bool Imagick::haldClutImage(Imagick $clut [, int $channel = Imagick::CHANNEL_DEFAULT])
     Replaces colors in the image
bool Imagick::hasNextImage()
     Checks if the object has more images
bool Imagick::hasPreviousImage()
     Checks if the object has a previous image
bool Imagick::implodeImage(float $radius)
     Creates a new image as a copy
bool Imagick::importImagePixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels)
     Imports image pixels
bool Imagick::labelImage(string $label)
     Adds a label to an image
bool Imagick::levelImage(float $blackPoint, float $gamma, float $whitePoint [, int $channel = Imagick::CHANNEL_ALL])
     Adjusts the levels of an image
bool Imagick::linearStretchImage(float $blackPoint, float $whitePoint)
     Stretches with saturation the image intensity
bool Imagick::liquidRescaleImage(int $width, int $height, float $delta_x, float $rigidity)
     Animates an image or images
bool Imagick::magnifyImage()
     Scales an image proportionally 2x
bool Imagick::mapImage(Imagick $map, bool $dither)
     Replaces the colors of an image with the closest color from a reference image.
bool Imagick::matteFloodfillImage(float $alpha, float $fuzz, mixed $bordercolor, int $x, int $y)
     Changes the transparency value of a color
bool Imagick::medianFilterImage(float $radius)
     Applies a digital filter
bool Imagick::mergeImageLayers(int $layer_method)
     Merges image layers
bool Imagick::minifyImage()
     Scales an image proportionally to half its size
bool Imagick::modulateImage(float $brightness, float $saturation, float $hue)
     Control the brightness, saturation, and hue
bool Imagick::motionBlurImage(float $radius, float $sigma, float $angle [, int $channel = Imagick::CHANNEL_DEFAULT])
     Simulates motion blur
bool Imagick::negateImage(bool $gray [, int $channel = Imagick::CHANNEL_ALL])
     Negates the colors in the reference image
bool Imagick::newImage(int $cols, int $rows, mixed $background [, string $format = ``])
     Creates a new image
bool Imagick::newPseudoImage(int $columns, int $rows, string $pseudoString)
     Creates a new image
bool Imagick::nextImage()
     Moves to the next image
bool Imagick::normalizeImage([int $channel = Imagick::CHANNEL_ALL])
     Enhances the contrast of a color image
bool Imagick::oilPaintImage(float $radius)
     Simulates an oil painting
bool Imagick::opaquePaintImage(mixed $target, mixed $fill, float $fuzz, bool $invert [, int $channel = Imagick::CHANNEL_DEFAULT])
     Changes the color value of any pixel that matches target
bool Imagick::optimizeImageLayers()
     Removes repeated portions of images to optimize
bool Imagick::orderedPosterizeImage(string $threshold_map [, int $channel = Imagick::CHANNEL_ALL])
     Performs an ordered dither
bool Imagick::paintFloodfillImage(mixed $fill, float $fuzz, mixed $bordercolor, int $x, int $y [, int $channel = Imagick::CHANNEL_ALL])
     Changes the color value of any pixel that matches target
bool Imagick::paintOpaqueImage(mixed $target, mixed $fill, float $fuzz [, int $channel = Imagick::CHANNEL_ALL])
     Change any pixel that matches color
bool Imagick::paintTransparentImage(mixed $target, float $alpha, float $fuzz)
     Changes any pixel that matches color with the color defined by fill
bool Imagick::pingImage(string $filename)
     Fetch basic attributes about the image
bool Imagick::pingImageBlob(string $image)
     Quickly fetch attributes
bool Imagick::pingImageFile(resource $filehandle [, string $fileName = ``])
     Get basic image attributes in a lightweight manner
bool Imagick::polaroidImage(ImagickDraw $properties, float $angle)
     Simulates a Polaroid picture
bool Imagick::posterizeImage(int $levels, bool $dither)
     Reduces the image to a limited number of color level
bool Imagick::previewImages(int $preview)
     Quickly pin-point appropriate parameters for image processing
bool Imagick::previousImage()
     Move to the previous image in the object
bool Imagick::profileImage(string $name, string $profile)
     Adds or removes a profile from an image
bool Imagick::quantizeImage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError)
     Analyzes the colors within a reference image
bool Imagick::quantizeImages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError)
     Analyzes the colors within a sequence of images
bool Imagick::radialBlurImage(float $angle [, int $channel = Imagick::CHANNEL_ALL])
     Radial blurs an image
bool Imagick::raiseImage(int $width, int $height, int $x, int $y, bool $raise)
     Creates a simulated 3d button-like effect
bool Imagick::randomThresholdImage(float $low, float $high [, int $channel = Imagick::CHANNEL_ALL])
     Creates a high-contrast, two-color image
bool Imagick::readImage(string $filename)
     Reads image from filename
bool Imagick::readImageBlob(string $image [, string $filename = ``])
     Reads image from a binary string
bool Imagick::readImageFile(resource $filehandle [, string $fileName = null])
     Reads image from open filehandle
bool Imagick::recolorImage(array $matrix)
     Recolors image
bool Imagick::reduceNoiseImage(float $radius)
     Smooths the contours of an image
bool Imagick::remapImage(Imagick $replacement, int $DITHER)
     Remaps image colors
bool Imagick::removeImage()
     Removes an image from the image list
bool Imagick::render()
     Renders all preceding drawing commands
bool Imagick::resampleImage(float $x_resolution, float $y_resolution, int $filter, float $blur)
     Resample image to desired resolution
bool Imagick::resetImagePage(string $page)
     Reset image page
bool Imagick::resizeImage(int $columns, int $rows, int $filter, float $blur [, bool $bestfit = false])
     Scales an image
bool Imagick::rollImage(int $x, int $y)
     Offsets an image
bool Imagick::rotateImage(mixed $background, float $degrees)
     Rotates an image
bool Imagick::roundCorners(float $x_rounding, float $y_rounding [, float $stroke_width = 10 [, float $displace = 5 [, float $size_correction = -6]]])
     Rounds image corners
bool Imagick::sampleImage(int $columns, int $rows)
     Scales an image with pixel sampling
bool Imagick::scaleImage(int $cols, int $rows [, bool $bestfit = false])
     Scales the size of an image
bool Imagick::segmentImage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold [, bool $verbose = false])
     Segments an image
bool Imagick::separateImageChannel(int $channel)
     Separates a channel from the image
bool Imagick::sepiaToneImage(float $threshold)
     Sepia tones an image
bool Imagick::setBackgroundColor(mixed $background)
     Sets the object`s default background color
bool Imagick::setColorspace(int $COLORSPACE)
     Set colorspace
bool Imagick::setCompression(int $compression)
     Sets the object`s default compression type
bool Imagick::setCompressionQuality(int $quality)
     Sets the object`s default compression quality
bool Imagick::setFilename(string $filename)
     Sets the filename before you read or write the image
bool Imagick::setFirstIterator()
     Sets the Imagick iterator to the first image
bool Imagick::setFont(string $font)
     Sets font
bool Imagick::setFormat(string $format)
     Sets the format of the Imagick object
bool Imagick::setGravity(int $gravity)
     Sets the gravity
bool Imagick::setImage(Imagick $replace)
     Replaces image in the object
bool Imagick::setImageAlphaChannel(int $mode)
     Sets image alpha channel
bool Imagick::setImageArtifact(string $artifact, string $value)
     Set image artifact
bool Imagick::setImageBackgroundColor(mixed $background)
     Sets the image background color
bool Imagick::setImageBias(float $bias)
     Sets the image bias for any method that convolves an image
bool Imagick::setImageBluePrimary(float $x, float $y)
     Sets the image chromaticity blue primary point
bool Imagick::setImageBorderColor(mixed $border)
     Sets the image border color
bool Imagick::setImageChannelDepth(int $channel, int $depth)
     Sets the depth of a particular image channel
bool Imagick::setImageClipMask(Imagick $clip_mask)
     Sets image clip mask
bool Imagick::setImageColormapColor(int $index, ImagickPixel $color)
     Sets the color of the specified colormap index
bool Imagick::setImageColorspace(int $colorspace)
     Sets the image colorspace
bool Imagick::setImageCompose(int $compose)
     Sets the image composite operator
bool Imagick::setImageCompression(int $compression)
     Sets the image compression
bool Imagick::setImageCompressionQuality(int $quality)
     Sets the image compression quality
bool Imagick::setImageDelay(int $delay)
     Sets the image delay
bool Imagick::setImageDepth(int $depth)
     Sets the image depth
bool Imagick::setImageDispose(int $dispose)
     Sets the image disposal method
bool Imagick::setImageExtent(int $columns, int $rows)
     Sets the image size
bool Imagick::setImageFilename(string $filename)
     Sets the filename of a particular image
bool Imagick::setImageFormat(string $format)
     Sets the format of a particular image
bool Imagick::setImageGamma(float $gamma)
     Sets the image gamma
bool Imagick::setImageGravity(int $gravity)
     Sets the image gravity
bool Imagick::setImageGreenPrimary(float $x, float $y)
     Sets the image chromaticity green primary point
bool Imagick::setImageIndex(int $index)
     Set the iterator position
bool Imagick::setImageInterlaceScheme(int $interlace_scheme)
     Sets the image compression
bool Imagick::setImageInterpolateMethod(int $method)
     Sets the image interpolate pixel method
bool Imagick::setImageIterations(int $iterations)
     Sets the image iterations
bool Imagick::setImageMatte(bool $matte)
     Sets the image matte channel
bool Imagick::setImageMatteColor(mixed $matte)
     Sets the image matte color
bool Imagick::setImageOpacity(float $opacity)
     Sets the image opacity level
bool Imagick::setImageOrientation(int $orientation)
     Sets the image orientation
bool Imagick::setImagePage(int $width, int $height, int $x, int $y)
     Sets the page geometry of the image
bool Imagick::setImageProfile(string $name, string $profile)
     Adds a named profile to the Imagick object
bool Imagick::setImageProperty(string $name, string $value)
     Sets an image property
bool Imagick::setImageRedPrimary(float $x, float $y)
     Sets the image chromaticity red primary point
bool Imagick::setImageRenderingIntent(int $rendering_intent)
     Sets the image rendering intent
bool Imagick::setImageResolution(float $x_resolution, float $y_resolution)
     Sets the image resolution
bool Imagick::setImageScene(int $scene)
     Sets the image scene
bool Imagick::setImageTicksPerSecond(int $ticks_per-second)
     Sets the image ticks-per-second
bool Imagick::setImageType(int $image_type)
     Sets the image type
bool Imagick::setImageUnits(int $units)
     Sets the image units of resolution
bool Imagick::setImageVirtualPixelMethod(int $method)
     Sets the image virtual pixel method
bool Imagick::setImageWhitePoint(float $x, float $y)
     Sets the image chromaticity white point
bool Imagick::setInterlaceScheme(int $interlace_scheme)
     Sets the image compression
bool Imagick::setIteratorIndex(int $index)
     Set the iterator position
bool Imagick::setLastIterator()
     Sets the Imagick iterator to the last image
bool Imagick::setOption(string $key, string $value)
     Set an option
bool Imagick::setPage(int $width, int $height, int $x, int $y)
     Sets the page geometry of the Imagick object
bool Imagick::setPointSize(float $point_size)
     Sets point size
bool Imagick::setResolution(float $x_resolution, float $y_resolution)
     Sets the image resolution
bool Imagick::setResourceLimit(int $type, int $limit)
     Sets the limit for a particular resource in megabytes
bool Imagick::setSamplingFactors(array $factors)
     Sets the image sampling factors
bool Imagick::setSize(int $columns, int $rows)
     Sets the size of the Imagick object
bool Imagick::setSizeOffset(int $columns, int $rows, int $offset)
     Sets the size and offset of the Imagick object
bool Imagick::setType(int $image_type)
     Sets the image type attribute
bool Imagick::shadeImage(bool $gray, float $azimuth, float $elevation)
     Creates a 3D effect
bool Imagick::shadowImage(float $opacity, float $sigma, int $x, int $y)
     Simulates an image shadow
bool Imagick::sharpenImage(float $radius, float $sigma [, int $channel = Imagick::CHANNEL_ALL])
     Sharpens an image
bool Imagick::shaveImage(int $columns, int $rows)
     Shaves pixels from the image edges
bool Imagick::shearImage(mixed $background, float $x_shear, float $y_shear)
     Creating a parallelogram
bool Imagick::sigmoidalContrastImage(bool $sharpen, float $alpha, float $beta [, int $channel = Imagick::CHANNEL_ALL])
     Adjusts the contrast of an image
bool Imagick::sketchImage(float $radius, float $sigma, float $angle)
     Simulates a pencil sketch
bool Imagick::solarizeImage(int $threshold)
     Applies a solarizing effect to the image
bool Imagick::sparseColorImage(int $SPARSE_METHOD, array $arguments [, int $channel = Imagick::CHANNEL_DEFAULT])
     Interpolates colors
bool Imagick::spliceImage(int $width, int $height, int $x, int $y)
     Splices a solid color into the image
bool Imagick::spreadImage(float $radius)
     Randomly displaces each pixel in a block
bool Imagick::stereoImage(Imagick $offset_wand)
     Composites two images
bool Imagick::stripImage()
     Strips an image of all profiles and comments
bool Imagick::swirlImage(float $degrees)
     Swirls the pixels about the center of the image
bool Imagick::textureImage(Imagick $texture_wand)
     Repeatedly tiles the texture image
bool Imagick::thresholdImage(float $threshold [, int $channel = Imagick::CHANNEL_ALL])
     Changes the value of individual pixels based on a threshold
bool Imagick::thumbnailImage(int $columns, int $rows [, bool $bestfit = false [, bool $fill = false]])
     Changes the size of an image
bool Imagick::tintImage(mixed $tint, mixed $opacity)
     Applies a color vector to each pixel in the image
bool Imagick::transparentPaintImage(mixed $target, float $alpha, float $fuzz, bool $invert)
     Paints pixels transparent
bool Imagick::transposeImage()
     Creates a vertical mirror image
bool Imagick::transverseImage()
     Creates a horizontal mirror image
bool Imagick::trimImage(float $fuzz)
     Remove edges from the image
bool Imagick::uniqueImageColors()
     Discards all but one of any pixel color
bool Imagick::unsharpMaskImage(float $radius, float $sigma, float $amount, float $threshold [, int $channel = Imagick::CHANNEL_ALL])
     Sharpens an image
bool Imagick::valid()
     Checks if the current item is valid
bool Imagick::vignetteImage(float $blackPoint, float $whitePoint, int $x, int $y)
     Adds vignette filter to the image
bool Imagick::waveImage(float $amplitude, float $length)
     Applies wave filter to the image
bool Imagick::whiteThresholdImage(mixed $threshold)
     Force all pixels above the threshold into white
bool Imagick::writeImage([string $filename = ``])
     Writes an image to the specified filename
bool Imagick::writeImageFile(resource $filehandle)
     Writes an image to a filehandle
bool Imagick::writeImages(string $filename, bool $adjoin)
     Writes an image or image sequence
bool Imagick::writeImagesFile(resource $filehandle)
     Writes frames to a filehandle
bool ImagickDraw::affine(array $affine)
     Adjusts the current affine transformation matrix
bool ImagickDraw::annotation(float $x, float $y, string $text)
     Draws text on the image
bool ImagickDraw::arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed)
     Draws an arc
bool ImagickDraw::bezier(array $coordinates)
     Draws a bezier curve
bool ImagickDraw::circle(float $ox, float $oy, float $px, float $py)
     Draws a circle
bool ImagickDraw::clear()
     Clears the ImagickDraw
bool ImagickDraw::color(float $x, float $y, int $paintMethod)
     Draws color on image
bool ImagickDraw::comment(string $comment)
     Adds a comment
bool ImagickDraw::composite(int $compose, float $x, float $y, float $width, float $height, Imagick $compositeWand)
     Composites an image onto the current image
bool ImagickDraw::destroy()
     Frees all associated resources
bool ImagickDraw::ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end)
     Draws an ellipse on the image
bool ImagickDraw::getStrokeAntialias()
     Returns the current stroke antialias setting
bool ImagickDraw::getTextAntialias()
     Returns the current text antialias setting
bool ImagickDraw::line(float $sx, float $sy, float $ex, float $ey)
     Draws a line
bool ImagickDraw::matte(float $x, float $y, int $paintMethod)
     Paints on the image`s opacity channel
bool ImagickDraw::pathClose()
     Adds a path element to the current path
bool ImagickDraw::pathCurveToAbsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y)
     Draws a cubic Bezier curve
bool ImagickDraw::pathCurveToQuadraticBezierAbsolute(float $x1, float $y1, float $x, float $y)
     Draws a quadratic Bezier curve
bool ImagickDraw::pathCurveToQuadraticBezierRelative(float $x1, float $y1, float $x, float $y)
     Draws a quadratic Bezier curve
bool ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute(float $x, float $y)
     Draws a quadratic Bezier curve
bool ImagickDraw::pathCurveToQuadraticBezierSmoothRelative(float $x, float $y)
     Draws a quadratic Bezier curve
bool ImagickDraw::pathCurveToRelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y)
     Draws a cubic Bezier curve
bool ImagickDraw::pathCurveToSmoothAbsolute(float $x2, float $y2, float $x, float $y)
     Draws a cubic Bezier curve
bool ImagickDraw::pathCurveToSmoothRelative(float $x2, float $y2, float $x, float $y)
     Draws a cubic Bezier curve
bool ImagickDraw::pathEllipticArcAbsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y)
     Draws an elliptical arc
bool ImagickDraw::pathEllipticArcRelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y)
     Draws an elliptical arc
bool ImagickDraw::pathFinish()
     Terminates the current path
bool ImagickDraw::pathLineToAbsolute(float $x, float $y)
     Draws a line path
bool ImagickDraw::pathLineToHorizontalAbsolute(float $x)
     Draws a horizontal line path
bool ImagickDraw::pathLineToHorizontalRelative(float $x)
     Draws a horizontal line
bool ImagickDraw::pathLineToRelative(float $x, float $y)
     Draws a line path
bool ImagickDraw::pathLineToVerticalAbsolute(float $y)
     Draws a vertical line
bool ImagickDraw::pathLineToVerticalRelative(float $y)
     Draws a vertical line path
bool ImagickDraw::pathMoveToAbsolute(float $x, float $y)
     Starts a new sub-path
bool ImagickDraw::pathMoveToRelative(float $x, float $y)
     Starts a new sub-path
bool ImagickDraw::pathStart()
     Declares the start of a path drawing list
bool ImagickDraw::point(float $x, float $y)
     Draws a point
bool ImagickDraw::polygon(array $coordinates)
     Draws a polygon
bool ImagickDraw::polyline(array $coordinates)
     Draws a polyline
bool ImagickDraw::pop()
     Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
bool ImagickDraw::popClipPath()
     Terminates a clip path definition
bool ImagickDraw::popDefs()
     Terminates a definition list
bool ImagickDraw::popPattern()
     Terminates a pattern definition
bool ImagickDraw::push()
     Clones the current ImagickDraw and pushes it to the stack
bool ImagickDraw::pushClipPath(string $clip_mask_id)
     Starts a clip path definition
bool ImagickDraw::pushDefs()
     Indicates that following commands create named elements for early processing
bool ImagickDraw::pushPattern(string $pattern_id, float $x, float $y, float $width, float $height)
     Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
bool ImagickDraw::rectangle(float $x1, float $y1, float $x2, float $y2)
     Draws a rectangle
bool ImagickDraw::render()
     Renders all preceding drawing commands onto the image
bool ImagickDraw::rotate(float $degrees)
     Applies the specified rotation to the current coordinate space
bool ImagickDraw::roundRectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry)
     Draws a rounded rectangle
bool ImagickDraw::scale(float $x, float $y)
     Adjusts the scaling factor
bool ImagickDraw::setClipPath(string $clip_mask)
     Associates a named clipping path with the image
bool ImagickDraw::setClipRule(int $fill_rule)
     Set the polygon fill rule to be used by the clipping path
bool ImagickDraw::setClipUnits(int $clip_units)
     Sets the interpretation of clip path units
bool ImagickDraw::setFillAlpha(float $opacity)
     Sets the opacity to use when drawing using the fill color or fill texture
bool ImagickDraw::setFillColor(ImagickPixel $fill_pixel)
     Sets the fill color to be used for drawing filled objects
bool ImagickDraw::setFillOpacity(float $fillOpacity)
     Sets the opacity to use when drawing using the fill color or fill texture
bool ImagickDraw::setFillPatternURL(string $fill_url)
     Sets the URL to use as a fill pattern for filling objects
bool ImagickDraw::setFillRule(int $fill_rule)
     Sets the fill rule to use while drawing polygons
bool ImagickDraw::setFont(string $font_name)
     Sets the fully-specified font to use when annotating with text
bool ImagickDraw::setFontFamily(string $font_family)
     Sets the font family to use when annotating with text
bool ImagickDraw::setFontSize(float $pointsize)
     Sets the font pointsize to use when annotating with text
bool ImagickDraw::setFontStretch(int $fontStretch)
     Sets the font stretch to use when annotating with text
bool ImagickDraw::setFontStyle(int $style)
     Sets the font style to use when annotating with text
bool ImagickDraw::setFontWeight(int $font_weight)
     Sets the font weight
bool ImagickDraw::setGravity(int $gravity)
     Sets the text placement gravity
bool ImagickDraw::setStrokeAlpha(float $opacity)
     Specifies the opacity of stroked object outlines
bool ImagickDraw::setStrokeAntialias(bool $stroke_antialias)
     Controls whether stroked outlines are antialiased
bool ImagickDraw::setStrokeColor(ImagickPixel $stroke_pixel)
     Sets the color used for stroking object outlines
bool ImagickDraw::setStrokeDashArray(array $dashArray)
     Specifies the pattern of dashes and gaps used to stroke paths
bool ImagickDraw::setStrokeDashOffset(float $dash_offset)
     Specifies the offset into the dash pattern to start the dash
bool ImagickDraw::setStrokeLineCap(int $linecap)
     Specifies the shape to be used at the end of open subpaths when they are stroked
bool ImagickDraw::setStrokeLineJoin(int $linejoin)
     Specifies the shape to be used at the corners of paths when they are stroked
bool ImagickDraw::setStrokeMiterLimit(int $miterlimit)
     Specifies the miter limit
bool ImagickDraw::setStrokeOpacity(float $stroke_opacity)
     Specifies the opacity of stroked object outlines
bool ImagickDraw::setStrokePatternURL(string $stroke_url)
     Sets the pattern used for stroking object outlines
bool ImagickDraw::setStrokeWidth(float $stroke_width)
     Sets the width of the stroke used to draw object outlines
bool ImagickDraw::setTextAlignment(int $alignment)
     Specifies a text alignment
bool ImagickDraw::setTextAntialias(bool $antiAlias)
     Controls whether text is antialiased
bool ImagickDraw::setTextDecoration(int $decoration)
     Specifies a decoration
bool ImagickDraw::setTextEncoding(string $encoding)
     Specifies specifies the text code set
bool ImagickDraw::setTextUnderColor(ImagickPixel $under_color)
     Specifies the color of a background rectangle
bool ImagickDraw::setVectorGraphics(string $xml)
     Sets the vector graphics
bool ImagickDraw::setViewbox(int $x1, int $y1, int $x2, int $y2)
     Sets the overall canvas size
bool ImagickDraw::skewX(float $degrees)
     Skews the current coordinate system in the horizontal direction
bool ImagickDraw::skewY(float $degrees)
     Skews the current coordinate system in the vertical direction
bool ImagickDraw::translate(float $x, float $y)
     Applies a translation to the current coordinate system
bool ImagickPixel::clear()
     Clears resources associated with this object
bool ImagickPixel::destroy()
     Deallocates resources associated with this object
bool ImagickPixel::isSimilar(ImagickPixel $color, float $fuzz)
     Check the distance between this color and another
bool ImagickPixel::setColor(string $color)
     Sets the color
bool ImagickPixel::setColorValue(int $color, float $value)
     Sets the normalized value of one of the channels
bool ImagickPixel::setHSL(float $hue, float $saturation, float $luminosity)
     Sets the normalized HSL color
bool ImagickPixelIterator::clear()
     Clear resources associated with a PixelIterator
bool ImagickPixelIterator::destroy()
     Deallocates resources associated with a PixelIterator
bool ImagickPixelIterator::newPixelIterator(Imagick $wand)
     Returns a new pixel iterator
bool ImagickPixelIterator::newPixelRegionIterator(Imagick $wand, int $x, int $y, int $columns, int $rows)
     Returns a new pixel iterator
bool ImagickPixelIterator::resetIterator()
     Resets the pixel iterator
bool ImagickPixelIterator::setIteratorFirstRow()
     Sets the pixel iterator to the first pixel row
bool ImagickPixelIterator::setIteratorLastRow()
     Sets the pixel iterator to the last pixel row
bool ImagickPixelIterator::setIteratorRow(int $row)
     Set the pixel iterator row
bool ImagickPixelIterator::syncIterator()
     Syncs the pixel iterator
bool imap_append(resource $imap_stream, string $mailbox, string $message [, string $options = `` [, string $internal_date = ``]])
     Append a string message to a specified mailbox
bool imap_clearflag_full(resource $imap_stream, string $sequence, string $flag [, int $options = ``])
     Clears flags on messages
bool imap_close(resource $imap_stream [, int $flag = ``])
     Close an IMAP stream
bool imap_createmailbox(resource $imap_stream, string $mailbox)
     Create a new mailbox
bool imap_delete(resource $imap_stream, int $msg_number [, int $options = ``])
     Mark a message for deletion from current mailbox
bool imap_deletemailbox(resource $imap_stream, string $mailbox)
     Delete a mailbox
bool imap_expunge(resource $imap_stream)
     Delete all messages marked for deletion
bool imap_gc(resource $imap_stream, int $caches)
     Clears IMAP cache
bool imap_mail(string $to, string $subject, string $message [, string $additional_headers = `` [, string $cc = `` [, string $bcc = `` [, string $rpath = ``]]]])
     Send an email message
bool imap_mail_copy(resource $imap_stream, string $msglist, string $mailbox [, int $options = ``])
     Copy specified messages to a mailbox
bool imap_mail_move(resource $imap_stream, string $msglist, string $mailbox [, int $options = ``])
     Move specified messages to a mailbox
bool imap_ping(resource $imap_stream)
     Check if the IMAP stream is still active
bool imap_renamemailbox(resource $imap_stream, string $old_mbox, string $new_mbox)
     Rename an old mailbox to new mailbox
bool imap_reopen(resource $imap_stream, string $mailbox [, int $options = `` [, int $n_retries = ``]])
     Reopen IMAP stream to new mailbox
bool imap_savebody(resource $imap_stream, mixed $file, int $msg_number [, string $part_number = \"\" [, int $options = ``]])
     Save a specific body section to a file
bool imap_setacl(resource $imap_stream, string $mailbox, string $id, string $rights)
     Sets the ACL for a giving mailbox
bool imap_setflag_full(resource $imap_stream, string $sequence, string $flag [, int $options = NIL])
     Sets flags on messages
bool imap_set_quota(resource $imap_stream, string $quota_root, int $quota_limit)
     Sets a quota for a given mailbox
bool imap_subscribe(resource $imap_stream, string $mailbox)
     Subscribe to a mailbox
bool imap_undelete(resource $imap_stream, int $msg_number [, int $flags = ``])
     Unmark the message which is marked deleted
bool imap_unsubscribe(resource $imap_stream, string $mailbox)
     Unsubscribe from a mailbox
bool import_request_variables(string $types [, string $prefix = ``])
     Import GET/POST/Cookie variables into the global scope
bool ingres_autocommit(resource $link)
     Switch autocommit on or off
bool ingres_autocommit_state(resource $link)
     Test if the connection is using autocommit
bool ingres_close(resource $link)
     Close an Ingres database connection
bool ingres_commit(resource $link)
     Commit a transaction
bool ingres_execute(resource $result [, array $params = `` [, string $types = ``]])
     Execute a prepared query
bool ingres_field_nullable(resource $result, int $index)
     Test if a field is nullable
bool ingres_free_result(resource $result)
     Free the resources associated with a result identifier
bool ingres_next_error([resource $link = ``])
     Get the next Ingres error
bool ingres_result_seek(resource $result, int $position)
     Set the row position before fetching data
bool ingres_rollback(resource $link)
     Roll back a transaction
bool ingres_set_environment(resource $link, array $options)
     Set environment features controlling output options
bool inotify_rm_watch(resource $inotify_instance, int $watch_descriptor)
     Remove an existing watch from an inotify instance
bool interface_exists(string $interface_name [, bool $autoload = true])
     Checks if the interface has been defined
bool IntlDateFormatter::isLenient(IntlDateFormatter $fmt)
     Get the lenient used for the IntlDateFormatter
bool IntlDateFormatter::setCalendar(int $which, IntlDateFormatter $fmt)
     sets the calendar used to the appropriate calendar, which must be
bool IntlDateFormatter::setLenient(bool $lenient, IntlDateFormatter $fmt)
     Set the leniency of the parser
bool IntlDateFormatter::setPattern(string $pattern, IntlDateFormatter $fmt)
     Set the pattern used for the IntlDateFormatter
bool IntlDateFormatter::setTimeZoneId(string $zone, IntlDateFormatter $fmt)
     Sets the time zone to use
bool intl_is_failure(int $error_code)
     Check whether the given error code indicates failure
bool in_array(mixed $needle, array $haystack [, bool $strict = ``])
     Checks if a value exists in an array
bool isset([mixed $var = `` [,  $... = ``]])
     Determine if a variable is set and is not NULL
bool is_a(object $object, string $class_name)
     Checks if the object is of this class or has this class as one of its parents
bool is_array(mixed $var)
     Finds whether a variable is an array
bool is_bool(mixed $var)
     Finds out whether a variable is a boolean
bool is_callable(callback $name [, bool $syntax_only = false [, string $callable_name = ``]])
     Verify that the contents of a variable can be called as a function
bool is_dir(string $filename)
     Tells whether the filename is a directory
bool is_executable(string $filename)
     Tells whether the filename is executable
bool is_file(string $filename)
     Tells whether the filename is a regular file
bool is_finite(float $val)
     Finds whether a value is a legal finite number
bool is_float(mixed $var)
     Finds whether the type of a variable is float
bool is_infinite(float $val)
     Finds whether a value is infinite
bool is_int(mixed $var)
     Find whether the type of a variable is integer
bool is_link(string $filename)
     Tells whether the filename is a symbolic link
bool is_nan(float $val)
     Finds whether a value is not a number
bool is_null(mixed $var)
     Finds whether a variable is NULL
bool is_numeric(mixed $var)
     Finds whether a variable is a number or a numeric string
bool is_object(mixed $var)
     Finds whether a variable is an object
bool is_readable(string $filename)
     Tells whether a file exists and is readable
bool is_resource(mixed $var)
     Finds whether a variable is a resource
bool is_soap_fault(mixed $object)
     Checks if a SOAP call has failed
bool is_string(mixed $var)
     Find whether the type of a variable is string
bool is_subclass_of(mixed $object, string $class_name)
     Checks if the object has this class as one of its parents
bool is_uploaded_file(string $filename)
     Tells whether the file was uploaded via HTTP POST
bool is_writable(string $filename)
     Tells whether the filename is writable
bool IteratorIterator::valid()
     Checks if the iterator is valid
bool jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold)
     Convert JPEG image file to WBMP image file
bool Judy::offsetExists(mixed $offset)
     Whether a offset exists
bool Judy::offsetSet(mixed $offset, mixed $value)
     Offset to set
bool Judy::offsetUnset(mixed $offset)
     Offset to unset
bool kadm5_chpass_principal(resource $handle, string $principal, string $password)
     Changes the principal`s password
bool kadm5_create_principal(resource $handle, string $principal [, string $password = `` [, array $options = ``]])
     Creates a kerberos principal with the given parameters
bool kadm5_delete_principal(resource $handle, string $principal)
     Deletes a kerberos principal
bool kadm5_destroy(resource $handle)
     Closes the connection to the admin server and releases all related resources
bool kadm5_flush(resource $handle)
     Flush all changes to the Kerberos database
bool kadm5_modify_principal(resource $handle, string $principal, array $options)
     Modifies a kerberos principal with the given parameters
bool krsort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array by key in reverse order
bool ksort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array by key
bool KTaglib_ID3v2_AttachedPictureFrame::savePicture(string $filename)
     Saves the picture to a file
bool KTaglib_ID3v2_Tag::addFrame(KTagLib_ID3v2_Frame $frame)
     Add a frame to the ID3v2 tag
bool KTaglib_MPEG_AudioProperties::isCopyrighted()
     Returns the length of a MPEG file
bool KTaglib_MPEG_AudioProperties::isOriginal()
     Returns the length of a MPEG file
bool KTaglib_MPEG_AudioProperties::isProtectionEnabled()
     Returns the length of a MPEG file
bool KTaglib_Tag::isEmpty()
     Returns true if the tag is empty
bool lchgrp(string $filename, mixed $group)
     Changes group ownership of symlink
bool lchown(string $filename, mixed $user)
     Changes user ownership of symlink
bool ldap_add(resource $link_identifier, string $dn, array $entry)
     Add entries to LDAP directory
bool ldap_bind(resource $link_identifier [, string $bind_rdn = `` [, string $bind_password = ``]])
     Bind to LDAP directory
bool ldap_delete(resource $link_identifier, string $dn)
     Delete an entry from a directory
bool ldap_free_result(resource $result_identifier)
     Free result memory
bool ldap_get_option(resource $link_identifier, int $option, mixed $retval)
     Get the current value for given option
bool ldap_modify(resource $link_identifier, string $dn, array $entry)
     Modify an LDAP entry
bool ldap_mod_add(resource $link_identifier, string $dn, array $entry)
     Add attribute values to current attributes
bool ldap_mod_del(resource $link_identifier, string $dn, array $entry)
     Delete attribute values from current attributes
bool ldap_mod_replace(resource $link_identifier, string $dn, array $entry)
     Replace attribute values with new ones
bool ldap_parse_reference(resource $link, resource $entry, array $referrals)
     Extract information from reference entry
bool ldap_parse_result(resource $link, resource $result, int $errcode [, string $matcheddn = `` [, string $errmsg = `` [, array $referrals = ``]]])
     Extract information from result
bool ldap_rename(resource $link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn)
     Modify the name of an entry
bool ldap_sasl_bind(resource $link [, string $binddn = `` [, string $password = `` [, string $sasl_mech = `` [, string $sasl_realm = `` [, string $sasl_authc_id = `` [, string $sasl_authz_id = `` [, string $props = ``]]]]]]])
     Bind to LDAP directory using SASL
bool ldap_set_option(resource $link_identifier, int $option, mixed $newval)
     Set the value of the given option
bool ldap_set_rebind_proc(resource $link, callback $callback)
     Set a callback function to do re-binds on referral chasing
bool ldap_sort(resource $link, resource $result, string $sortfilter)
     Sort LDAP result entries
bool ldap_start_tls(resource $link)
     Start TLS
bool ldap_unbind(resource $link_identifier)
     Unbind from LDAP directory
bool libxml_disable_entity_loader([bool $disable = true])
     Disable the ability to load external entities
bool libxml_use_internal_errors([bool $use_errors = false])
     Disable libxml errors and allow user to fetch error information as needed
bool LimitIterator::valid()
     Check whether the current element is valid
bool link(string $target, string $link)
     Create a hard link
bool Locale::filterMatches(string $langtag, string $locale [, bool $canonicalize = false])
     Checks if a language tag filter matches with locale
bool Locale::setDefault(string $locale)
     sets the default runtime locale
bool locale_filter_matches(string $langtag, string $locale [, bool $canonicalize = false])
     Checks if a language tag filter matches with locale
bool locale_set_default(string $locale)
     sets the default runtime locale
bool mail(string $to, string $subject, string $message [, string $additional_headers = `` [, string $additional_parameters = ``]])
     Send mail
bool mailparse_msg_free(resource $mimemail)
     Frees a MIME resource
bool mailparse_msg_parse(resource $mimemail, string $data)
     Incrementally parse data into buffer
bool mailparse_stream_encode(resource $sourcefp, resource $destfp, string $encoding)
     Streams data from source file pointer, apply encoding and write to destfp
bool maxdb::auto_commit(resource $link, bool $mode)
     Turns on or off auto-commiting database modifications
bool maxdb::change_user(resource $link, string $user, string $password, string $database)
     Changes the user of the specified database connection
bool maxdb::close(resource $link)
     Closes a previously opened database connection
bool maxdb::commit(resource $link)
     Commits the current transaction
bool maxdb::kill(resource $link, int $processid)
     Disconnects from a MaxDB server
bool maxdb::more_results(resource $link)
     Check if there any more query results from a multi query
bool maxdb::multi_query(resource $link, string $query)
     Performs a query on the database
bool maxdb::next_result(resource $link)
     Prepare next result from multi_query
bool maxdb::options(resource $link, int $option, mixed $value)
     Set options
bool maxdb::ping(resource $link)
     Pings a server connection, or tries to reconnect if the connection has gone down
bool maxdb::real_connect(resource $link [, string $hostname = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = ``]]]]]])
     Opens a connection to a MaxDB server
bool maxdb::real_query(resource $link, string $query)
     Execute an SQL query
bool maxdb::rollback(resource $link)
     Rolls back current transaction
bool maxdb::select_db(resource $link, string $dbname)
     Selects the default database for database queries
bool maxdb::send_query(resource $link, string $query)
     Send the query and return
bool maxdb::ssl_set(resource $link, string $key, string $cert, string $ca, string $capath, string $cipher)
     Used for establishing secure connections using SSL
bool maxdb_autocommit(resource $link, bool $mode)
     Turns on or off auto-commiting database modifications
bool maxdb_change_user(resource $link, string $user, string $password, string $database)
     Changes the user of the specified database connection
bool maxdb_close(resource $link)
     Closes a previously opened database connection
bool maxdb_commit(resource $link)
     Commits the current transaction
bool maxdb_data_seek(resource $result, int $offset)
     Adjusts the result pointer to an arbitary row in the result
bool maxdb_disable_rpl_parse(resource $link)
     Disable RPL parse
bool maxdb_dump_debug_info(resource $link)
     Dump debugging information into the log
bool maxdb_enable_reads_from_master(resource $link)
     Enable reads from master
bool maxdb_enable_rpl_parse(resource $link)
     Enable RPL parse
bool maxdb_field_seek(resource $result, int $fieldnr)
     Set result pointer to a specified field offset
bool maxdb_kill(resource $link, int $processid)
     Disconnects from a MaxDB server
bool maxdb_master_query(resource $link, string $query)
     Enforce execution of a query on the master in a master/slave setup
bool maxdb_more_results(resource $link)
     Check if there any more query results from a multi query
bool maxdb_multi_query(resource $link, string $query)
     Performs a query on the database
bool maxdb_next_result(resource $link)
     Prepare next result from multi_query
bool maxdb_options(resource $link, int $option, mixed $value)
     Set options
bool maxdb_ping(resource $link)
     Pings a server connection, or tries to reconnect if the connection has gone down
bool maxdb_real_connect(resource $link [, string $hostname = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = ``]]]]]])
     Opens a connection to a MaxDB server
bool maxdb_real_query(resource $link, string $query)
     Execute an SQL query
bool maxdb_report(int $flags)
     Enables or disables internal report functions
bool maxdb_result::data_seek(resource $result, int $offset)
     Adjusts the result pointer to an arbitary row in the result
bool maxdb_result::field_seek(resource $result, int $fieldnr)
     Set result pointer to a specified field offset
bool maxdb_rollback(resource $link)
     Rolls back current transaction
bool maxdb_rpl_probe(resource $link)
     RPL probe
bool maxdb_select_db(resource $link, string $dbname)
     Selects the default database for database queries
bool maxdb_send_query(resource $link, string $query)
     Send the query and return
bool maxdb_server_init([array $server = `` [, array $groups = ``]])
     Initialize embedded server
bool maxdb_ssl_set(resource $link, string $key, string $cert, string $ca, string $capath, string $cipher)
     Used for establishing secure connections using SSL
bool maxdb_stmt::bind_param(resource $stmt, string $types, mixed $var1 [, mixed $... = ``, array $var])
     Binds variables to a prepared statement as parameters
bool maxdb_stmt::bind_result(resource $stmt, mixed $var1 [, mixed $... = ``])
     Binds variables to a prepared statement for result storage
bool maxdb_stmt::close(resource $stmt)
     Closes a prepared statement
bool maxdb_stmt::close_long_data(resource $stmt, int $param_nr)
     Ends a sequence of maxdb_stmt_send_long_data
bool maxdb_stmt::data_seek(resource $statement, int $offset)
     Seeks to an arbitray row in statement result set
bool maxdb_stmt::execute(resource $stmt)
     Executes a prepared Query
bool maxdb_stmt::fetch(resource $stmt)
     Fetch results from a prepared statement into the bound variables
bool maxdb_stmt::reset(resource $stmt)
     Resets a prepared statement
bool maxdb_stmt::send_long_data(resource $stmt, int $param_nr, string $data)
     Send data in blocks
bool maxdb_stmt_bind_param(resource $stmt, string $types, mixed $var1 [, mixed $... = ``, array $var])
     Binds variables to a prepared statement as parameters
bool maxdb_stmt_bind_result(resource $stmt, mixed $var1 [, mixed $... = ``])
     Binds variables to a prepared statement for result storage
bool maxdb_stmt_close(resource $stmt)
     Closes a prepared statement
bool maxdb_stmt_close_long_data(resource $stmt, int $param_nr)
     Ends a sequence of maxdb_stmt_send_long_data
bool maxdb_stmt_data_seek(resource $statement, int $offset)
     Seeks to an arbitray row in statement result set
bool maxdb_stmt_execute(resource $stmt)
     Executes a prepared Query
bool maxdb_stmt_fetch(resource $stmt)
     Fetch results from a prepared statement into the bound variables
bool maxdb_stmt_reset(resource $stmt)
     Resets a prepared statement
bool maxdb_stmt_send_long_data(resource $stmt, int $param_nr, string $data)
     Send data in blocks
bool maxdb_thread_safe()
     Returns whether thread safety is given or not
bool mb_check_encoding([string $var = `` [, string $encoding = mb_internal_encoding()]])
     Check if the string is valid for the specified encoding
bool mb_ereg_match(string $pattern, string $string [, string $option = \"msr\"])
     Regular expression match for multibyte string
bool mb_ereg_search([string $pattern = `` [, string $option = \"ms\"]])
     Multibyte regular expression match for predefined multibyte string
bool mb_ereg_search_init(string $string [, string $pattern = `` [, string $option = \"msr\"]])
     Setup string and regular expression for a multibyte regular expression match
bool mb_ereg_search_setpos(int $position)
     Set start point of next regular expression match
bool mb_send_mail(string $to, string $subject, string $message [, string $additional_headers = `` [, string $additional_parameter = ``]])
     Send encoded mail
bool mcrypt_enc_is_block_algorithm(resource $td)
     Checks whether the algorithm of the opened mode is a block algorithm
bool mcrypt_enc_is_block_algorithm_mode(resource $td)
     Checks whether the encryption of the opened mode works on blocks
bool mcrypt_enc_is_block_mode(resource $td)
     Checks whether the opened mode outputs blocks
bool mcrypt_generic_deinit(resource $td)
     This function deinitializes an encryption module
bool mcrypt_generic_end(resource $td)
     This function terminates encryption
bool mcrypt_module_close(resource $td)
     Closes the mcrypt module
bool mcrypt_module_is_block_algorithm(string $algorithm [, string $lib_dir = ``])
     This function checks whether the specified algorithm is a block algorithm
bool mcrypt_module_is_block_algorithm_mode(string $mode [, string $lib_dir = ``])
     Returns if the specified module is a block algorithm or not
bool mcrypt_module_is_block_mode(string $mode [, string $lib_dir = ``])
     Returns if the specified mode outputs blocks or not
bool mcrypt_module_self_test(string $algorithm [, string $lib_dir = ``])
     This function runs a self test on the specified module
bool Memcache::add(string $key, mixed $var [, int $flag = `` [, int $expire = ``]])
     Add an item to the server
bool Memcache::addServer(string $host [, int $port = 11211 [, bool $persistent = `` [, int $weight = `` [, int $timeout = `` [, int $retry_interval = `` [, bool $status = `` [, callback $failure_callback = `` [, int $timeoutms = ``]]]]]]]])
     Add a memcached server to connection pool
bool Memcache::close()
     Close memcached server connection
bool Memcache::connect(string $host [, int $port = `` [, int $timeout = ``]])
     Open memcached server connection
bool Memcache::delete(string $key [, int $timeout = ``])
     Delete item from the server
bool Memcache::flush()
     Flush all existing items at the server
bool Memcache::pconnect(string $host [, int $port = `` [, int $timeout = ``]])
     Open memcached server persistent connection
bool Memcache::replace(string $key, mixed $var [, int $flag = `` [, int $expire = ``]])
     Replace value of the existing item
bool Memcache::set(string $key, mixed $var [, int $flag = `` [, int $expire = ``]])
     Store data at the server
bool Memcache::setCompressThreshold(int $threshold [, float $min_savings = ``])
     Enable automatic compression of large values
bool Memcache::setServerParams(string $host [, int $port = 11211 [, int $timeout = `` [, int $retry_interval = false [, bool $status = `` [, callback $failure_callback = ``]]]]])
     Changes server parameters and status at runtime
bool Memcached::add(string $key, mixed $value [, int $expiration = ``])
     Add an item under a new key
bool Memcached::addByKey(string $server_key, string $key, mixed $value [, int $expiration = ``])
     Add an item under a new key on a specific server
bool Memcached::addServer(string $host, int $port [, int $weight = ``])
     Add a server to the server pool
bool Memcached::addServers(array $servers)
     Add multiple servers to the server pool
bool Memcached::append(string $key, string $value)
     Append data to an existing item
bool Memcached::appendByKey(string $server_key, string $key, string $value)
     Append data to an existing item on a specific server
bool Memcached::cas(float $cas_token, string $key, mixed $value [, int $expiration = ``])
     Compare and swap an item
bool Memcached::casByKey(float $cas_token, string $server_key, string $key, mixed $value [, int $expiration = ``])
     Compare and swap an item on a specific server
bool Memcached::delete(string $key [, int $time = ``])
     Delete an item
bool Memcached::deleteByKey(string $server_key, string $key [, int $time = ``])
     Delete an item from a specific server
bool Memcached::flush([int $delay = ``])
     Invalidate all items in the cache
bool Memcached::getDelayed(array $keys [, bool $with_cas = `` [, callback $value_cb = ``]])
     Request multiple items
bool Memcached::getDelayedByKey(string $server_key, array $keys [, bool $with_cas = `` [, callback $value_cb = ``]])
     Request multiple items from a specific server
bool Memcached::prepend(string $key, string $value)
     Prepend data to an existing item
bool Memcached::prependByKey(string $server_key, string $key, string $value)
     Prepend data to an existing item on a specific server
bool Memcached::replace(string $key, mixed $value [, int $expiration = ``])
     Replace the item under an existing key
bool Memcached::replaceByKey(string $server_key, string $key, mixed $value [, int $expiration = ``])
     Replace the item under an existing key on a specific server
bool Memcached::set(string $key, mixed $value [, int $expiration = ``])
     Store an item
bool Memcached::setByKey(string $server_key, string $key, mixed $value [, int $expiration = ``])
     Store an item on a specific server
bool Memcached::setMulti(array $items [, int $expiration = ``])
     Store multiple items
bool Memcached::setMultiByKey(string $server_key, array $items [, int $expiration = ``])
     Store multiple items on a specific server
bool Memcached::setOption(int $option, mixed $value)
     Set a Memcached option
bool memcache_debug(bool $on_off)
     Turn debug output on/off
bool MessageFormatter::setPattern(string $pattern, MessageFormatter $fmt)
     Set the pattern used by the formatter
bool method_exists(mixed $object, string $method_name)
     Checks if the class method exists
bool mkdir(string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context = ``]]])
     Makes directory
bool Mongo::close()
     Closes this connection
bool Mongo::connect()
     Connects to a database server
bool Mongo::connectUtil()
     Connects with a database server
bool Mongo::getSlaveOkay()
     Get slaveOkay setting for this connection
bool Mongo::setSlaveOkay([bool $ok = ``])
     Change slaveOkay setting for this connection
bool MongoCollection::ensureIndex(array $keys [, array $options = ``])
     Creates an index on the given field(s), or does nothing if the index    already exists
bool MongoCollection::getSlaveOkay()
     Get slaveOkay setting for this collection
bool MongoCollection::setSlaveOkay([bool $ok = ``])
     Change slaveOkay setting for this collection
bool MongoCollection::update(array $criteria, array $newobj [, array $options = array()])
     Update records based on a given criteria
bool MongoCursor::dead()
     Checks if there are documents that have not been sent yet from the database for this cursor
bool MongoCursor::hasNext()
     Checks if there are any more elements in this cursor
bool MongoCursor::valid()
     Checks if the cursor is reading a valid result.
bool MongoDB::getSlaveOkay()
     Get slaveOkay setting for this database
bool MongoDB::setSlaveOkay([bool $ok = ``])
     Change slaveOkay setting for this database
bool MongoDBRef::isRef(mixed $ref)
     Checks if an array is a database reference
bool MongoGridFS::delete(mixed $id)
     Delete a file from the database
bool MongoGridFS::remove([array $criteria = array() [, array $options = array()]])
     Removes files from the collections
bool move_uploaded_file(string $filename, string $destination)
     Moves an uploaded file to a new location
bool msession_connect(string $host, string $port)
     Connect to msession server
bool msession_create(string $session [, string $classname = `` [, string $data = ``]])
     Create a session
bool msession_destroy(string $name)
     Destroy a session
bool msession_set(string $session, string $name, string $value)
     Set value in session
bool msession_set_data(string $session, string $value)
     Set data session unstructured data
bool msgfmt_set_pattern(string $pattern, MessageFormatter $fmt)
     Set the pattern used by the formatter
bool msg_queue_exists(int $key)
     Check whether a message queue exists
bool msg_receive(resource $queue, int $desiredmsgtype, int $msgtype, int $maxsize, mixed $message [, bool $unserialize = true [, int $flags = `` [, int $errorcode = ``]]])
     Receive a message from a message queue
bool msg_remove_queue(resource $queue)
     Destroy a message queue
bool msg_send(resource $queue, int $msgtype, mixed $message [, bool $serialize = `` [, bool $blocking = `` [, int $errorcode = ``]]])
     Send a message to a message queue
bool msg_set_queue(resource $queue, array $data)
     Set information in the message queue data structure
bool msql_close([resource $link_identifier = ``])
     Close mSQL connection
bool msql_create_db(string $database_name [, resource $link_identifier = ``])
     Create mSQL database
bool msql_data_seek(resource $result, int $row_number)
     Move internal row pointer
bool msql_drop_db(string $database_name [, resource $link_identifier = ``])
     Drop (delete) mSQL database
bool msql_field_seek(resource $result, int $field_offset)
     Set field offset
bool msql_free_result(resource $result)
     Free result memory
bool msql_select_db(string $database_name [, resource $link_identifier = ``])
     Select mSQL database
bool mssql_bind(resource $stmt, string $param_name, mixed $var, int $type [, bool $is_output = false [, bool $is_null = false [, int $maxlen = -1]]])
     Adds a parameter to a stored procedure or a remote stored procedure
bool mssql_close([resource $link_identifier = ``])
     Close MS SQL Server connection
bool mssql_data_seek(resource $result_identifier, int $row_number)
     Moves internal row pointer
bool mssql_field_seek(resource $result, int $field_offset)
     Seeks to the specified field offset
bool mssql_free_result(resource $result)
     Free result memory
bool mssql_free_statement(resource $stmt)
     Free statement memory
bool mssql_next_result(resource $result_id)
     Move the internal result pointer to the next result
bool mssql_select_db(string $database_name [, resource $link_identifier = ``])
     Select MS SQL database
bool mysqli::autocommit(bool $mode, mysqli $link)
     Turns on or off auto-commiting database modifications
bool mysqli::change_user(string $user, string $password, string $database, mysqli $link)
     Changes the user of the specified database connection
bool mysqli::close(mysqli $link)
     Closes a previously opened database connection
bool mysqli::commit(mysqli $link)
     Commits the current transaction
bool mysqli::debug(string $message)
     Performs debugging operations
bool mysqli::disable_reads_from_master(mysqli $link)
     Disable reads from master
bool mysqli::dump_debug_info(mysqli $link)
     Dump debugging information into the log
bool mysqli::kill(int $processid, mysqli $link)
     Asks the server to kill a MySQL thread
bool mysqli::more_results(mysqli $link)
     Check if there are any more query results from a multi query
bool mysqli::multi_query(string $query, mysqli $link)
     Performs a query on the database
bool mysqli::next_result(mysqli $link)
     Prepare next result from multi_query
bool mysqli::options(int $option, mixed $value, mysqli $link)
     Set options
bool mysqli::ping(mysqli $link)
     Pings a server connection, or tries to reconnect if the connection has gone down
bool mysqli::real_connect([string $host = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = `` [, int $flags = ``, mysqli $link]]]]]]])
     Opens a connection to a mysql server
bool mysqli::real_query(string $query, mysqli $link)
     Execute an SQL query
bool mysqli::rollback(mysqli $link)
     Rolls back current transaction
bool mysqli::select_db(string $dbname, mysqli $link)
     Selects the default database for database queries
bool mysqli::send_query(string $query, mysqli $link)
     Send the query and return
bool mysqli::set_charset(string $charset, mysqli $link)
     Sets the default client character set
bool mysqli::set_local_infile_handler(mysqli $link, callback $read_func)
     Set callback function for LOAD DATA LOCAL INFILE command
bool mysqli::ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher, mysqli $link)
     Used for establishing secure connections using SSL
bool mysqli::thread_safe()
     Returns whether thread safety is given or not
bool mysqli_autocommit(bool $mode, mysqli $link)
     Turns on or off auto-commiting database modifications
bool mysqli_change_user(string $user, string $password, string $database, mysqli $link)
     Changes the user of the specified database connection
bool mysqli_close(mysqli $link)
     Closes a previously opened database connection
bool mysqli_commit(mysqli $link)
     Commits the current transaction
bool mysqli_data_seek(int $offset, mysqli_result $result)
     Adjusts the result pointer to an arbitary row in the result
bool mysqli_debug(string $message)
     Performs debugging operations
bool mysqli_disable_reads_from_master(mysqli $link)
     Disable reads from master
bool mysqli_disable_rpl_parse(mysqli $link)
     Disable RPL parse
bool mysqli_driver::embedded_server_start(bool $start, array $arguments, array $groups)
     Initialize and start embedded server
bool mysqli_dump_debug_info(mysqli $link)
     Dump debugging information into the log
bool mysqli_embedded_server_start(bool $start, array $arguments, array $groups)
     Initialize and start embedded server
bool mysqli_enable_reads_from_master(mysqli $link)
     Enable reads from master
bool mysqli_enable_rpl_parse(mysqli $link)
     Enable RPL parse
bool mysqli_field_seek(int $fieldnr, mysqli_result $result)
     Set result pointer to a specified field offset
bool mysqli_kill(int $processid, mysqli $link)
     Asks the server to kill a MySQL thread
bool mysqli_master_query(mysqli $link, string $query)
     Enforce execution of a query on the master in a master/slave setup
bool mysqli_more_results(mysqli $link)
     Check if there are any more query results from a multi query
bool mysqli_multi_query(string $query, mysqli $link)
     Performs a query on the database
bool mysqli_next_result(mysqli $link)
     Prepare next result from multi_query
bool mysqli_options(int $option, mixed $value, mysqli $link)
     Set options
bool mysqli_ping(mysqli $link)
     Pings a server connection, or tries to reconnect if the connection has gone down
bool mysqli_real_connect([string $host = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = `` [, int $flags = ``, mysqli $link]]]]]]])
     Opens a connection to a mysql server
bool mysqli_real_query(string $query, mysqli $link)
     Execute an SQL query
bool mysqli_report(int $flags)
     Enables or disables internal report functions
bool mysqli_result::data_seek(int $offset, mysqli_result $result)
     Adjusts the result pointer to an arbitary row in the result
bool mysqli_result::field_seek(int $fieldnr, mysqli_result $result)
     Set result pointer to a specified field offset
bool mysqli_rollback(mysqli $link)
     Rolls back current transaction
bool mysqli_rpl_probe(mysqli $link)
     RPL probe
bool mysqli_select_db(string $dbname, mysqli $link)
     Selects the default database for database queries
bool mysqli_send_query(string $query, mysqli $link)
     Send the query and return
bool mysqli_set_charset(string $charset, mysqli $link)
     Sets the default client character set
bool mysqli_set_local_infile_handler(mysqli $link, callback $read_func)
     Set callback function for LOAD DATA LOCAL INFILE command
bool mysqli_slave_query(mysqli $link, string $query)
     Force execution of a query on a slave in a master/slave setup
bool mysqli_ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher, mysqli $link)
     Used for establishing secure connections using SSL
bool mysqli_stmt::attr_set(int $attr, int $mode, mysqli_stmt $stmt)
     Used to modify the behavior of a prepared statement
bool mysqli_stmt::bind_param(string $types, mixed $var1 [, mixed $... = ``, mysqli_stmt $stmt])
     Binds variables to a prepared statement as parameters
bool mysqli_stmt::bind_result(mixed $var1 [, mixed $... = ``, mysqli_stmt $stmt])
     Binds variables to a prepared statement for result storage
bool mysqli_stmt::close(mysqli_stmt $stmt)
     Closes a prepared statement
bool mysqli_stmt::execute(mysqli_stmt $stmt)
     Executes a prepared Query
bool mysqli_stmt::fetch(mysqli_stmt $stmt)
     Fetch results from a prepared statement into the bound variables
bool mysqli_stmt::get_result(mysqli_stmt $stmt)
     Gets a result set from a prepared statement
bool mysqli_stmt::prepare(string $query, mysqli_stmt $stmt)
     Prepare an SQL statement for execution
bool mysqli_stmt::reset(mysqli_stmt $stmt)
     Resets a prepared statement
bool mysqli_stmt::send_long_data(int $param_nr, string $data, mysqli_stmt $stmt)
     Send data in blocks
bool mysqli_stmt::store_result(mysqli_stmt $stmt)
     Transfers a result set from a prepared statement
bool mysqli_stmt_attr_set(int $attr, int $mode, mysqli_stmt $stmt)
     Used to modify the behavior of a prepared statement
bool mysqli_stmt_bind_param(string $types, mixed $var1 [, mixed $... = ``, mysqli_stmt $stmt])
     Binds variables to a prepared statement as parameters
bool mysqli_stmt_bind_result(mixed $var1 [, mixed $... = ``, mysqli_stmt $stmt])
     Binds variables to a prepared statement for result storage
bool mysqli_stmt_close(mysqli_stmt $stmt)
     Closes a prepared statement
bool mysqli_stmt_execute(mysqli_stmt $stmt)
     Executes a prepared Query
bool mysqli_stmt_fetch(mysqli_stmt $stmt)
     Fetch results from a prepared statement into the bound variables
bool mysqli_stmt_get_result(mysqli_stmt $stmt)
     Gets a result set from a prepared statement
bool mysqli_stmt_prepare(string $query, mysqli_stmt $stmt)
     Prepare an SQL statement for execution
bool mysqli_stmt_reset(mysqli_stmt $stmt)
     Resets a prepared statement
bool mysqli_stmt_send_long_data(int $param_nr, string $data, mysqli_stmt $stmt)
     Send data in blocks
bool mysqli_stmt_store_result(mysqli_stmt $stmt)
     Transfers a result set from a prepared statement
bool mysqli_thread_safe()
     Returns whether thread safety is given or not
bool mysqlnd_ms_set_user_pick_server(string $function)
     Sets a callback for user-defined read/write splitting
bool mysqlnd_qc_change_handler(mixed $handler)
     Change current storage handler
bool mysqlnd_qc_clear_cache()
     Flush all cache contents
bool mysqlnd_qc_set_user_handlers(string $get_hash, string $find_query_in_cache, string $return_to_cache, string $add_query_to_cache_if_not_exists, string $query_is_select, string $update_query_run_time_stats, string $get_stats, string $clear_cache)
     Sets the callback functions for a user-defined procedural storage handler
bool mysql_close([resource $link_identifier = ``])
     Close MySQL connection
bool mysql_create_db(string $database_name [, resource $link_identifier = ``])
     Create a MySQL database
bool mysql_data_seek(resource $result, int $row_number)
     Move internal result pointer
bool mysql_drop_db(string $database_name [, resource $link_identifier = ``])
     Drop (delete) a MySQL database
bool mysql_field_seek(resource $result, int $field_offset)
     Set result pointer to a specified field offset
bool mysql_free_result(resource $result)
     Free result memory
bool mysql_ping([resource $link_identifier = ``])
     Ping a server connection or reconnect if there is no connection
bool mysql_select_db(string $database_name [, resource $link_identifier = ``])
     Select a MySQL database
bool mysql_set_charset(string $charset [, resource $link_identifier = ``])
     Sets the client character set
bool m_deletetrans(resource $conn, int $identifier)
     Delete specified transaction from MCVE_CONN structure
bool m_destroyconn(resource $conn)
     Destroy the connection and MCVE_CONN structure
bool m_maxconntimeout(resource $conn, int $secs)
     The maximum amount of time the API will attempt a connection to MCVE
bool m_verifyconnection(resource $conn, int $tf)
     Set whether or not to PING upon connect to verify connection
bool m_verifysslcert(resource $conn, int $tf)
     Set whether or not to verify the server ssl certificate
bool natcasesort(array $array)
     Sort an array using a case insensitive \"natural order\" algorithm
bool natsort(array $array)
     Sort an array using a \"natural order\" algorithm
bool ncurses_can_change_color()
     Checks if terminal color definitions can be changed
bool ncurses_cbreak()
     Switch of input buffering
bool ncurses_clear()
     Clear screen
bool ncurses_clrtobot()
     Clear screen from current position to bottom
bool ncurses_clrtoeol()
     Clear screen from current position to end of line
bool ncurses_def_prog_mode()
     Saves terminals (program) mode
bool ncurses_def_shell_mode()
     Saves terminals (shell) mode
bool ncurses_delch()
     Delete character at current position, move rest of line left
bool ncurses_deleteln()
     Delete line at current position, move rest of screen up
bool ncurses_delwin(resource $window)
     Delete a ncurses window
bool ncurses_del_panel(resource $panel)
     Remove panel from the stack and delete it (but not the associated window)
bool ncurses_doupdate()
     Write all prepared refreshes to terminal
bool ncurses_echo()
     Activate keyboard input echo
bool ncurses_erase()
     Erase terminal screen
bool ncurses_flash()
     Flash terminal screen (visual bell)
bool ncurses_flushinp()
     Flush keyboard input buffer
bool ncurses_getmouse(array $mevent)
     Reads mouse event
bool ncurses_has_colors()
     Checks if terminal has color capabilities
bool ncurses_has_ic()
     Check for insert- and delete-capabilities
bool ncurses_has_il()
     Check for line insert- and delete-capabilities
bool ncurses_isendwin()
     Ncurses is in endwin mode, normal screen output may be performed
bool ncurses_mouse_trafo(int $y, int $x, bool $toscreen)
     Transforms coordinates
bool ncurses_nl()
     Translate newline and carriage return / line feed
bool ncurses_nocbreak()
     Switch terminal to cooked mode
bool ncurses_noecho()
     Switch off keyboard input echo
bool ncurses_nonl()
     Do not translate newline and carriage return / line feed
bool ncurses_noraw()
     Switch terminal out of raw mode
bool ncurses_raw()
     Switch terminal into raw mode
bool ncurses_resetty()
     Restores saved terminal state
bool ncurses_savetty()
     Saves terminal state
bool ncurses_slk_clear()
     Clears soft labels from screen
bool ncurses_slk_init(int $format)
     Initializes soft label key functions
bool ncurses_slk_noutrefresh()
     Copies soft label keys to virtual screen
bool ncurses_slk_set(int $labelnr, string $label, int $format)
     Sets function key labels
bool ncurses_termattrs()
     Returns a logical OR of all attribute flags supported by terminal
bool ncurses_ungetmouse(array $mevent)
     Pushes mouse event to queue
bool ncurses_use_default_colors()
     Assign terminal default colors to color id -1
bool ncurses_wmouse_trafo(resource $window, int $y, int $x, bool $toscreen)
     Transforms window/stdscr coordinates
bool NoRewindIterator::valid()
     Validates the iterator
bool Normalizer::isNormalized(string $input [, string $form = Normalizer::FORM_C])
     Checks if the provided string is already in the specified normalization   form.
bool normalizer_is_normalized(string $input [, string $form = Normalizer::FORM_C])
     Checks if the provided string is already in the specified normalization   form.
bool notes_copy_db(string $from_database_name, string $to_database_name)
     Copy a Lotus Notes database
bool notes_create_db(string $database_name)
     Create a Lotus Notes database
bool notes_create_note(string $database_name, string $form_name)
     Create a note using form form_name
bool notes_drop_db(string $database_name)
     Drop a Lotus Notes database
bool notes_list_msgs(string $db)
     Returns the notes from a selected database_name
bool notes_mark_read(string $database_name, string $user_name, string $note_id)
     Mark a note_id as read for the User user_name
bool notes_mark_unread(string $database_name, string $user_name, string $note_id)
     Mark a note_id as unread for the User user_name
bool notes_nav_create(string $database_name, string $name)
     Create a navigator name, in database_name
bool nsapi_virtual(string $uri)
     Perform an NSAPI sub-request
bool NumberFormatter::setAttribute(int $attr, int $value, NumberFormatter $fmt)
     Set an attribute
bool NumberFormatter::setPattern(string $pattern, NumberFormatter $fmt)
     Set formatter pattern
bool NumberFormatter::setSymbol(int $attr, string $value, NumberFormatter $fmt)
     Set a symbol value
bool NumberFormatter::setTextAttribute(int $attr, string $value, NumberFormatter $fmt)
     Set a text attribute
bool numfmt_set_attribute(int $attr, int $value, NumberFormatter $fmt)
     Set an attribute
bool numfmt_set_pattern(string $pattern, NumberFormatter $fmt)
     Set formatter pattern
bool numfmt_set_symbol(int $attr, string $value, NumberFormatter $fmt)
     Set a symbol value
bool numfmt_set_text_attribute(int $attr, string $value, NumberFormatter $fmt)
     Set a text attribute
bool OAuth::disableDebug()
     Turn off verbose debugging
bool OAuth::disableRedirects()
     Turn off redirects
bool OAuth::disableSSLChecks()
     Turn off SSL checks
bool OAuth::enableDebug()
     Turn on verbose debugging
bool OAuth::enableRedirects()
     Turn on redirects
bool OAuth::enableSSLChecks()
     Turn on SSL checks
bool OAuth::setToken(string $token, string $token_secret)
     Sets the token and secret
bool OAuth::setVersion(string $version)
     Set the OAuth version
bool OAuthProvider::addRequiredParameter(string $req_params)
     Add required parameters
bool OAuthProvider::removeRequiredParameter(string $req_params)
     Remove a required parameter
bool OAuthProvider::setParam(string $param_key [, mixed $param_val = ``])
     Set a parameter
bool OAuthProvider::setRequestTokenPath(string $path)
     Set request token path
bool ob_end_clean()
     Clean (erase) the output buffer and turn off output buffering
bool ob_end_flush()
     Flush (send) the output buffer and turn off output buffering
bool ob_start([callback $output_callback = `` [, int $chunk_size = `` [, bool $erase = ``]]])
     Turn on output buffering
bool OCI-Collection::append(mixed $value)
     Appends element to the collection
bool OCI-Collection::assign(OCI-Collection $from)
     Assigns a value to the collection from another existing collection
bool OCI-Collection::assignElem(int $index, mixed $value)
     Assigns a value to the element of the collection
bool OCI-Collection::free()
     Frees the resources associated with the collection object
bool OCI-Collection::trim(int $num)
     Trims elements from the end of the collection
bool OCI-Lob::append(OCI-Lob $lob_from)
     Appends data from the large object to another large object
bool OCI-Lob::close()
     Closes LOB descriptor
bool OCI-Lob::eof()
     Tests for end-of-file on a large object`s descriptor
bool OCI-Lob::export(string $filename [, int $start = `` [, int $length = ``]])
     Exports LOB`s contents to a file
bool OCI-Lob::flush([int $flag = ``])
     Flushes/writes buffer of the LOB to the server
bool OCI-Lob::free()
     Frees resources associated with the LOB descriptor
bool OCI-Lob::getBuffering()
     Returns current state of buffering for the large object
bool OCI-Lob::import(string $filename)
     Imports file data to the LOB
bool OCI-Lob::rewind()
     Moves the internal pointer to the beginning of the large object
bool OCI-Lob::save(string $data [, int $offset = ``])
     Saves data to the large object
bool OCI-Lob::seek(int $offset [, int $whence = ``])
     Sets the internal pointer of the large object
bool OCI-Lob::setBuffering(bool $on_off)
     Changes current state of buffering for the large object
bool OCI-Lob::truncate([int $length = ``])
     Truncates large object
bool OCI-Lob::writeTemporary(string $data [, int $lob_type = OCI_TEMP_CLOB])
     Writes a temporary large object
bool oci_bind_array_by_name(resource $statement, string $name, array $var_array, int $max_table_length [, int $max_item_length = -1 [, int $type = SQLT_AFC]])
     Binds a PHP array to an Oracle PL/SQL array parameter
bool oci_bind_by_name(resource $statement, string $bv_name, mixed $variable [, int $maxlength = -1 [, int $type = SQLT_CHR]])
     Binds a PHP variable to an Oracle placeholder
bool oci_cancel(resource $statement)
     Cancels reading from cursor
bool oci_close(resource $connection)
     Closes an Oracle connection
bool oci_commit(resource $connection)
     Commits the outstanding database transaction
bool oci_define_by_name(resource $statement, string $column_name, mixed $variable [, int $type = SQLT_CHR])
     Associates a PHP variable with a column for query fetches
bool oci_execute(resource $statement [, int $mode = OCI_COMMIT_ON_SUCCESS])
     Executes a statement
bool oci_fetch(resource $statement)
     Fetches the next row from a query into internal buffers
bool oci_field_is_null(resource $statement, mixed $field)
     Checks if the field is NULL
bool oci_free_statement(resource $statement)
     Frees all resources associated with statement or cursor
bool oci_lob_copy(OCI-Lob $lob_to, OCI-Lob $lob_from [, int $length = ``])
     Copies large object
bool oci_lob_is_equal(OCI-Lob $lob1, OCI-Lob $lob2)
     Compares two LOB/FILE locators for equality
bool oci_rollback(resource $connection)
     Rolls back the outstanding database transaction
bool oci_set_action(resource $connection, string $action_name)
     Sets the action name
bool oci_set_client_identifier(resource $connection, string $client_identifier)
     Sets the client identifier
bool oci_set_client_info(resource $connection, string $client_info)
     Sets the client information
bool oci_set_edition(string $edition)
     Sets the database edition
bool oci_set_module_name(resource $connection, string $module_name)
     Sets the module name
bool oci_set_prefetch(resource $statement, int $rows)
     Sets number of rows to be prefetched by queries
bool odbc_binmode(resource $result_id, int $mode)
     Handling of binary column data
bool odbc_commit(resource $connection_id)
     Commit an ODBC transaction
bool odbc_execute(resource $result_id [, array $parameters_array = ``])
     Execute a prepared statement
bool odbc_fetch_row(resource $result_id [, int $row_number = ``])
     Fetch a row
bool odbc_free_result(resource $result_id)
     Free resources associated with a result
bool odbc_longreadlen(resource $result_id, int $length)
     Handling of LONG columns
bool odbc_next_result(resource $result_id)
     Checks if multiple results are available
bool odbc_rollback(resource $connection_id)
     Rollback a transaction
bool odbc_setoption(resource $id, int $function, int $option, int $param)
     Adjust ODBC settings
bool openal_buffer_data(resource $buffer, int $format, string $data, int $freq)
     Load a buffer with data
bool openal_buffer_destroy(resource $buffer)
     Destroys an OpenAL buffer
bool openal_buffer_loadwav(resource $buffer, string $wavfile)
     Load a .wav file into a buffer
bool openal_context_current(resource $context)
     Make the specified context current
bool openal_context_destroy(resource $context)
     Destroys a context
bool openal_context_process(resource $context)
     Process the specified context
bool openal_context_suspend(resource $context)
     Suspend the specified context
bool openal_device_close(resource $device)
     Close an OpenAL device
bool openal_listener_set(int $property, mixed $setting)
     Set a listener property
bool openal_source_destroy(resource $source)
     Destroy a source resource
bool openal_source_pause(resource $source)
     Pause the source
bool openal_source_play(resource $source)
     Start playing the source
bool openal_source_rewind(resource $source)
     Rewind the source
bool openal_source_set(resource $source, int $property, mixed $setting)
     Set source property
bool openal_source_stop(resource $source)
     Stop playing the source
bool openlog(string $ident, int $option, int $facility)
     Open connection to system logger
bool openssl_csr_export(resource $csr, string $out [, bool $notext = true])
     Exports a CSR as a string
bool openssl_csr_export_to_file(resource $csr, string $outfilename [, bool $notext = true])
     Exports a CSR to a file
bool openssl_open(string $sealed_data, string $open_data, string $env_key, mixed $priv_key_id [, string $method = ``])
     Open sealed data
bool openssl_pkcs7_decrypt(string $infilename, string $outfilename, mixed $recipcert [, mixed $recipkey = ``])
     Decrypts an S/MIME encrypted message
bool openssl_pkcs7_encrypt(string $infile, string $outfile, mixed $recipcerts, array $headers [, int $flags = `` [, int $cipherid = OPENSSL_CIPHER_RC2_40]])
     Encrypt an S/MIME message
bool openssl_pkcs7_sign(string $infilename, string $outfilename, mixed $signcert, mixed $privkey, array $headers [, int $flags = PKCS7_DETACHED [, string $extracerts = ``]])
     Sign an S/MIME message
bool openssl_pkcs12_export(mixed $x509, string $out, mixed $priv_key, string $pass [, array $args = ``])
     Exports a PKCS#12 Compatible Certificate Store File to variable.
bool openssl_pkcs12_export_to_file(mixed $x509, string $filename, mixed $priv_key, string $pass [, array $args = ``])
     Exports a PKCS#12 Compatible Certificate Store File
bool openssl_pkcs12_read(string $pkcs12, array $certs, string $pass)
     Parse a PKCS#12 Certificate Store into an array
bool openssl_pkey_export(mixed $key, string $out [, string $passphrase = `` [, array $configargs = ``]])
     Gets an exportable representation of a key into a string
bool openssl_pkey_export_to_file(mixed $key, string $outfilename [, string $passphrase = `` [, array $configargs = ``]])
     Gets an exportable representation of a key into a file
bool openssl_private_decrypt(string $data, string $decrypted, mixed $key [, int $padding = OPENSSL_PKCS1_PADDING])
     Decrypts data with private key
bool openssl_private_encrypt(string $data, string $crypted, mixed $key [, int $padding = OPENSSL_PKCS1_PADDING])
     Encrypts data with private key
bool openssl_public_decrypt(string $data, string $decrypted, mixed $key [, int $padding = OPENSSL_PKCS1_PADDING])
     Decrypts data with public key
bool openssl_public_encrypt(string $data, string $crypted, mixed $key [, int $padding = OPENSSL_PKCS1_PADDING])
     Encrypts data with public key
bool openssl_sign(string $data, string $signature, mixed $priv_key_id [, int $signature_alg = OPENSSL_ALGO_SHA1])
     Generate signature
bool openssl_x509_check_private_key(mixed $cert, mixed $key)
     Checks if a private key corresponds to a certificate
bool openssl_x509_export(mixed $x509, string $output [, bool $notext = ``])
     Exports a certificate as a string
bool openssl_x509_export_to_file(mixed $x509, string $outfilename [, bool $notext = ``])
     Exports a certificate to file
bool output_add_rewrite_var(string $name, string $value)
     Add URL rewriter values
bool output_reset_rewrite_vars()
     Reset URL rewriter values
bool override_function(string $function_name, string $function_args, string $function_code)
     Overrides built-in functions
bool ParentIterator::accept()
     Determines acceptability
bool ParentIterator::hasChildren()
     Check whether the inner iterator`s current element has children
bool pcntl_setpriority(int $priority [, int $pid = getmypid() [, int $process_identifier = PRIO_PROCESS]])
     Change the priority of any process
bool pcntl_signal(int $signo, callback $handler [, bool $restart_syscalls = true])
     Installs a signal handler
bool pcntl_signal_dispatch()
     Calls signal handlers for pending signals
bool pcntl_sigprocmask(int $how, array $set [, array $oldset = ``])
     Sets and retrieves blocked signals
bool pcntl_wifexited(int $status)
     Checks if status code represents a normal exit
bool pcntl_wifsignaled(int $status)
     Checks whether the status code represents a termination due to a signal
bool pcntl_wifstopped(int $status)
     Checks whether the child process is currently stopped
bool PDF_activate_item(resource $pdfdoc, int $id)
     Activate structure element or other content item
bool PDF_add_launchlink(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $filename)
     Add launch annotation for current page [deprecated]
bool PDF_add_locallink(resource $pdfdoc, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, int $page, string $dest)
     Add link annotation for current page [deprecated]
bool PDF_add_nameddest(resource $pdfdoc, string $name, string $optlist)
     Create named destination
bool PDF_add_note(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open)
     Set annotation for current page [deprecated]
bool PDF_add_pdflink(resource $pdfdoc, float $bottom_left_x, float $bottom_left_y, float $up_right_x, float $up_right_y, string $filename, int $page, string $dest)
     Add file link annotation for current page [deprecated]
bool PDF_add_thumbnail(resource $pdfdoc, int $image)
     Add thumbnail for current page
bool PDF_add_weblink(resource $pdfdoc, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, string $url)
     Add weblink for current page [deprecated]
bool PDF_arc(resource $p, float $x, float $y, float $r, float $alpha, float $beta)
     Draw a counterclockwise circular arc segment
bool PDF_arcn(resource $p, float $x, float $y, float $r, float $alpha, float $beta)
     Draw a clockwise circular arc segment
bool PDF_attach_file(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $filename, string $description, string $author, string $mimetype, string $icon)
     Add file attachment for current page [deprecated]
bool PDF_begin_font(resource $pdfdoc, string $filename, float $a, float $b, float $c, float $d, float $e, float $f, string $optlist)
     Start a Type 3 font definition
bool PDF_begin_glyph(resource $pdfdoc, string $glyphname, float $wx, float $llx, float $lly, float $urx, float $ury)
     Start glyph definition for Type 3 font
bool PDF_begin_layer(resource $pdfdoc, int $layer)
     Start layer
bool PDF_begin_page(resource $pdfdoc, float $width, float $height)
     Start new page [deprecated]
bool PDF_begin_page_ext(resource $pdfdoc, float $width, float $height, string $optlist)
     Start new page
bool PDF_circle(resource $pdfdoc, float $x, float $y, float $r)
     Draw a circle
bool PDF_clip(resource $p)
     Clip to current path
bool PDF_close(resource $p)
     Close pdf resource [deprecated]
bool PDF_closepath(resource $p)
     Close current path
bool PDF_closepath_fill_stroke(resource $p)
     Close, fill and stroke current path
bool PDF_closepath_stroke(resource $p)
     Close and stroke path
bool PDF_close_image(resource $p, int $image)
     Close image
bool PDF_close_pdi(resource $p, int $doc)
     Close the input PDF document [deprecated]
bool PDF_close_pdi_page(resource $p, int $page)
     Close the page handle
bool PDF_concat(resource $p, float $a, float $b, float $c, float $d, float $e, float $f)
     Concatenate a matrix to the CTM
bool PDF_continue_text(resource $p, string $text)
     Output text in next line
bool PDF_create_annotation(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $type, string $optlist)
     Create rectangular annotation
bool PDF_create_field(resource $pdfdoc, float $llx, float $lly, float $urx, float $ury, string $name, string $type, string $optlist)
     Create form field
bool PDF_create_fieldgroup(resource $pdfdoc, string $name, string $optlist)
     Create form field group
bool PDF_create_pvf(resource $pdfdoc, string $filename, string $data, string $optlist)
     Create PDFlib virtual file
bool PDF_curveto(resource $p, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
     Draw Bezier curve
bool PDF_delete(resource $pdfdoc)
     Delete PDFlib object
bool PDF_delete_table(resource $pdfdoc, int $table, string $optlist)
     Delete table object
bool PDF_delete_textflow(resource $pdfdoc, int $textflow)
     Delete textflow object
bool PDF_encoding_set_char(resource $pdfdoc, string $encoding, int $slot, string $glyphname, int $uv)
     Add glyph name and/or Unicode value
bool PDF_endpath(resource $p)
     End current path
bool PDF_end_document(resource $pdfdoc, string $optlist)
     Close PDF file
bool PDF_end_font(resource $pdfdoc)
     Terminate Type 3 font definition
bool PDF_end_glyph(resource $pdfdoc)
     Terminate glyph definition for Type 3 font
bool PDF_end_item(resource $pdfdoc, int $id)
     Close structure element or other content item
bool PDF_end_layer(resource $pdfdoc)
     Deactivate all active layers
bool PDF_end_page(resource $p)
     Finish page
bool PDF_end_page_ext(resource $pdfdoc, string $optlist)
     Finish page
bool PDF_end_pattern(resource $p)
     Finish pattern
bool PDF_end_template(resource $p)
     Finish template
bool PDF_fill(resource $p)
     Fill current path
bool PDF_fill_stroke(resource $p)
     Fill and stroke path
bool PDF_fit_image(resource $pdfdoc, int $image, float $x, float $y, string $optlist)
     Place image or template
bool PDF_fit_pdi_page(resource $pdfdoc, int $page, float $x, float $y, string $optlist)
     Place imported PDF page
bool PDF_fit_textline(resource $pdfdoc, string $text, float $x, float $y, string $optlist)
     Place single line of text
bool PDF_initgraphics(resource $p)
     Reset graphic state
bool PDF_lineto(resource $p, float $x, float $y)
     Draw a line
bool PDF_moveto(resource $p, float $x, float $y)
     Set current point
bool PDF_open_file(resource $p, string $filename)
     Create PDF file [deprecated]
bool PDF_place_image(resource $pdfdoc, int $image, float $x, float $y, float $scale)
     Place image on the page [deprecated]
bool PDF_place_pdi_page(resource $pdfdoc, int $page, float $x, float $y, float $sx, float $sy)
     Place PDF page [deprecated]
bool PDF_rect(resource $p, float $x, float $y, float $width, float $height)
     Draw rectangle
bool PDF_restore(resource $p)
     Restore graphics state
bool PDF_resume_page(resource $pdfdoc, string $optlist)
     Resume page
bool PDF_rotate(resource $p, float $phi)
     Rotate coordinate system
bool PDF_save(resource $p)
     Save graphics state
bool PDF_scale(resource $p, float $sx, float $sy)
     Scale coordinate system
bool PDF_setcolor(resource $p, string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4)
     Set fill and stroke color
bool PDF_setdash(resource $pdfdoc, float $b, float $w)
     Set simple dash pattern
bool PDF_setdashpattern(resource $pdfdoc, string $optlist)
     Set dash pattern
bool PDF_setflat(resource $pdfdoc, float $flatness)
     Set flatness
bool PDF_setfont(resource $pdfdoc, int $font, float $fontsize)
     Set font
bool PDF_setgray(resource $p, float $g)
     Set color to gray [deprecated]
bool PDF_setgray_fill(resource $p, float $g)
     Set fill color to gray [deprecated]
bool PDF_setgray_stroke(resource $p, float $g)
     Set stroke color to gray [deprecated]
bool PDF_setlinecap(resource $p, int $linecap)
     Set linecap parameter
bool PDF_setlinejoin(resource $p, int $value)
     Set linejoin parameter
bool PDF_setlinewidth(resource $p, float $width)
     Set line width
bool PDF_setmatrix(resource $p, float $a, float $b, float $c, float $d, float $e, float $f)
     Set current transformation matrix
bool PDF_setmiterlimit(resource $pdfdoc, float $miter)
     Set miter limit
bool PDF_setrgbcolor(resource $p, float $red, float $green, float $blue)
     Set fill and stroke rgb color values [deprecated]
bool PDF_setrgbcolor_fill(resource $p, float $red, float $green, float $blue)
     Set fill rgb color values [deprecated]
bool PDF_setrgbcolor_stroke(resource $p, float $red, float $green, float $blue)
     Set stroke rgb color values [deprecated]
bool PDF_set_border_color(resource $p, float $red, float $green, float $blue)
     Set border color of annotations [deprecated]
bool PDF_set_border_dash(resource $pdfdoc, float $black, float $white)
     Set border dash style of annotations [deprecated]
bool PDF_set_border_style(resource $pdfdoc, string $style, float $width)
     Set border style of annotations [deprecated]
bool PDF_set_gstate(resource $pdfdoc, int $gstate)
     Activate graphics state object
bool PDF_set_info(resource $p, string $key, string $value)
     Fill document info field
bool PDF_set_layer_dependency(resource $pdfdoc, string $type, string $optlist)
     Define relationships among layers
bool PDF_set_parameter(resource $p, string $key, string $value)
     Set string parameter
bool PDF_set_text_pos(resource $p, float $x, float $y)
     Set text position
bool PDF_set_value(resource $p, string $key, float $value)
     Set numerical parameter
bool PDF_shfill(resource $pdfdoc, int $shading)
     Fill area with shading
bool PDF_show(resource $pdfdoc, string $text)
     Output text at current position
bool PDF_show_xy(resource $p, string $text, float $x, float $y)
     Output text at given position
bool PDF_skew(resource $p, float $alpha, float $beta)
     Skew the coordinate system
bool PDF_stroke(resource $p)
     Stroke path
bool PDF_suspend_page(resource $pdfdoc, string $optlist)
     Suspend page
bool PDF_translate(resource $p, float $tx, float $ty)
     Set origin of coordinate system
bool PDO::beginTransaction()
     Initiates a transaction
bool PDO::commit()
     Commits a transaction
bool PDO::inTransaction()
     Checks if inside a transaction
bool PDO::pgsqlLOBUnlink(string $oid)
     Deletes the large object
bool PDO::rollBack()
     Rolls back a transaction
bool PDO::sqliteCreateAggregate(string $function_name, callback $step_func, callback $finalize_func [, int $num_args = ``])
     Registers an aggregating User Defined Function for use in SQL statements
bool PDO::sqliteCreateFunction(string $function_name, callback $callback [, int $num_args = ``])
     Registers a User Defined Function for use in SQL statements
bool PDOStatement::bindColumn(mixed $column, mixed $param [, int $type = `` [, int $maxlen = `` [, mixed $driverdata = ``]]])
     Bind a column to a PHP variable
bool PDOStatement::bindParam(mixed $parameter, mixed $variable [, int $data_type = PDO::PARAM_STR [, int $length = `` [, mixed $driver_options = ``]]])
     Binds a parameter to the specified variable name
bool PDOStatement::bindValue(mixed $parameter, mixed $value [, int $data_type = PDO::PARAM_STR])
     Binds a value to a parameter
bool PDOStatement::closeCursor()
     Closes the cursor, enabling the statement to be executed again.
bool PDOStatement::execute([array $input_parameters = ``])
     Executes a prepared statement
bool PDOStatement::nextRowset()
     Advances to the next rowset in a multi-rowset statement handle
bool PDOStatement::setAttribute(int $attribute, mixed $value)
     Set a statement attribute
bool PDOStatement::setFetchMode(int $mode, int $PDO::FETCH_COLUMN, int $colno, int $PDO::FETCH_CLASS, string $classname, array $ctorargs, int $PDO::FETCH_INTO, object $object)
     Set the default fetch mode for this statement
bool pg_cancel_query(resource $connection)
     Cancel an asynchronous query
bool pg_close([resource $connection = ``])
     Closes a PostgreSQL connection
bool pg_connection_busy(resource $connection)
     Get connection is busy or not
bool pg_connection_reset(resource $connection)
     Reset connection (reconnect)
bool pg_copy_from(resource $connection, string $table_name, array $rows [, string $delimiter = `` [, string $null_as = ``]])
     Insert records into a table from an array
bool pg_end_copy([resource $connection = ``])
     Sync with PostgreSQL backend
bool pg_lo_close(resource $large_object)
     Close a large object
bool pg_lo_export([resource $connection = ``, int $oid, string $pathname])
     Export a large object to file
bool pg_lo_seek(resource $large_object, int $offset [, int $whence = PGSQL_SEEK_CUR])
     Seeks position within a large object
bool pg_lo_unlink(resource $connection, int $oid)
     Delete a large object
bool pg_ping([resource $connection = ``])
     Ping database connection
bool pg_put_line([resource $connection = ``, string $data])
     Send a NULL-terminated string to PostgreSQL backend
bool pg_result_seek(resource $result, int $offset)
     Set internal row offset in result resource
bool pg_send_execute(resource $connection, string $stmtname, array $params)
     Sends a request to execute a prepared statement with given parameters, without waiting for the result(s).
bool pg_send_prepare(resource $connection, string $stmtname, string $query)
     Sends a request to create a prepared statement with the given parameters, without waiting for completion.
bool pg_send_query(resource $connection, string $query)
     Sends asynchronous query
bool pg_send_query_params(resource $connection, string $query, array $params)
     Submits a command and separate parameters to the server without waiting for the result(s).
bool pg_trace(string $pathname [, string $mode = \"w\" [, resource $connection = ``]])
     Enable tracing a PostgreSQL connection
bool pg_untrace([resource $connection = ``])
     Disable tracing of a PostgreSQL connection
bool Phar::canCompress([int $type = ``])
     Returns whether phar extension supports compression using either zlib or bzip2
bool Phar::canWrite()
     Returns whether phar extension supports writing and creating phars
bool Phar::compressAllFilesBZIP2()
     Compresses all files in the current Phar archive using Bzip2 compression
bool Phar::compressAllFilesGZ()
     Compresses all files in the current Phar archive using Gzip compression
bool Phar::copy(string $oldfile, string $newfile)
     Copy a file internal to the phar archive to another new file within the phar
bool Phar::decompressFiles()
     Decompresses all files in the current Phar archive
bool Phar::delete(string $entry)
     Delete a file within a phar archive
bool Phar::delMetadata()
     Deletes the global metadata of the phar
bool Phar::extractTo(string $pathto [, string|array $files = `` [, bool $overwrite = false]])
     Extract the contents of a phar archive to a directory
bool Phar::getModified()
     Return whether phar was modified
bool Phar::hasMetaData()
     Returns whether phar has global meta-data
bool Phar::isBuffering()
     Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
bool Phar::isFileFormat(int $format)
     Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
bool Phar::isValidPharFilename(string $filename [, bool $executable = true])
     Returns whether the given filename is a valid phar filename
bool Phar::isWritable()
     Returns true if the phar archive can be modified
bool Phar::loadPhar(string $filename [, string $alias = ``])
     Loads any phar archive with an alias
bool Phar::mapPhar([string $alias = `` [, int $dataoffset = ``]])
     Reads the currently executed file (a phar) and registers its manifest
bool Phar::offsetExists(string $offset)
     determines whether a file exists in the phar
bool Phar::offsetUnset(string $offset)
     remove a file from a phar
bool Phar::setAlias(string $alias)
     Set the alias for the Phar archive
bool Phar::setDefaultStub([string $index = `` [, string $webindex = ``]])
     Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
bool Phar::setStub(string $stub)
     Used to set the PHP loader or bootstrap stub of a Phar archive
bool Phar::uncompressAllFiles()
     Uncompresses all files in the current Phar archive
bool Phar::unlinkArchive(string $archive)
     Completely remove a phar archive from disk and from memory
bool PharData::addEmptyDir(string $dirname)
     Add an empty directory to the tar/zip archive
bool PharData::addFromString(string $localname, string $contents)
     Add a file from the filesystem to the tar/zip archive
bool PharData::compressFiles(int $compression)
     Compresses all files in the current tar/zip archive
bool PharData::copy(string $oldfile, string $newfile)
     Copy a file internal to the phar archive to another new file within the phar
bool PharData::decompressFiles()
     Decompresses all files in the current zip archive
bool PharData::delete(string $entry)
     Delete a file within a tar/zip archive
bool PharData::delMetadata()
     Deletes the global metadata of a zip archive
bool PharData::extractTo(string $pathto [, string|array $files = `` [, bool $overwrite = false]])
     Extract the contents of a tar/zip archive to a directory
bool PharData::isWritable()
     Returns true if the tar/zip archive can be modified
bool PharData::offsetUnset(string $offset)
     remove a file from a tar/zip archive
bool PharData::setAlias(string $alias)
     dummy function (Phar::setAlias is not valid for PharData)
bool PharData::setDefaultStub([string $index = `` [, string $webindex = ``]])
     dummy function (Phar::setDefaultStub is not valid for PharData)
bool PharData::setStub(string $stub)
     dummy function (Phar::setStub is not valid for PharData)
bool PharFileInfo::compress(int $compression)
     Compresses the current Phar entry with either zlib or bzip2 compression
bool PharFileInfo::decompress()
     Decompresses the current Phar entry within the phar
bool PharFileInfo::delMetadata()
     Deletes the metadata of the entry
bool PharFileInfo::hasMetadata()
     Returns the metadata of the entry
bool PharFileInfo::isCompressed([int $compression_type = 9021976])
     Returns whether the entry is compressed
bool PharFileInfo::isCompressedBZIP2()
     Returns whether the entry is compressed using bzip2
bool PharFileInfo::isCompressedGZ()
     Returns whether the entry is compressed using gz
bool PharFileInfo::isCRCChecked()
     Returns whether file entry has had its CRC verified
bool PharFileInfo::setCompressedBZIP2()
     Compresses the current Phar entry within the phar using Bzip2 compression
bool PharFileInfo::setCompressedGZ()
     Compresses the current Phar entry within the phar using gz compression
bool PharFileInfo::setUncompressed()
     Uncompresses the current Phar entry within the phar, if it is compressed
bool phpcredits([int $flag = CREDITS_ALL])
     Prints out the credits for PHP
bool phpinfo([int $what = INFO_ALL])
     Outputs information about PHP`s configuration
bool php_check_syntax(string $filename [, string $error_message = ``])
     Check the PHP syntax of (and execute) the specified file
bool png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold)
     Convert PNG image file to WBMP image file
bool posix_access(string $file [, int $mode = POSIX_F_OK])
     Determine accessibility of a file
bool posix_initgroups(string $name, int $base_group_id)
     Calculate the group access list
bool posix_isatty(int $fd)
     Determine if a file descriptor is an interactive terminal
bool posix_kill(int $pid, int $sig)
     Send a signal to a process
bool posix_mkfifo(string $pathname, int $mode)
     Create a fifo special file (a named pipe)
bool posix_mknod(string $pathname, int $mode [, int $major = `` [, int $minor = ``]])
     Create a special or ordinary file (POSIX.1)
bool posix_setegid(int $gid)
     Set the effective GID of the current process
bool posix_seteuid(int $uid)
     Set the effective UID of the current process
bool posix_setgid(int $gid)
     Set the GID of the current process
bool posix_setpgid(int $pid, int $pgid)
     Set process group id for job control
bool posix_setuid(int $uid)
     Set the UID of the current process
bool proc_nice(int $increment)
     Change the priority of the current process
bool proc_terminate(resource $process [, int $signal = 15])
     Kills a process opened by proc_open
bool property_exists(mixed $class, string $property)
     Checks if the object or class has a property
bool pspell_add_to_personal(int $dictionary_link, string $word)
     Add the word to a personal wordlist
bool pspell_add_to_session(int $dictionary_link, string $word)
     Add the word to the wordlist in the current session
bool pspell_check(int $dictionary_link, string $word)
     Check a word
bool pspell_clear_session(int $dictionary_link)
     Clear the current session
bool pspell_config_data_dir(int $conf, string $directory)
     location of language data files
bool pspell_config_dict_dir(int $conf, string $directory)
     Location of the main word list
bool pspell_config_ignore(int $dictionary_link, int $n)
     Ignore words less than N characters long
bool pspell_config_mode(int $dictionary_link, int $mode)
     Change the mode number of suggestions returned
bool pspell_config_personal(int $dictionary_link, string $file)
     Set a file that contains personal wordlist
bool pspell_config_repl(int $dictionary_link, string $file)
     Set a file that contains replacement pairs
bool pspell_config_runtogether(int $dictionary_link, bool $flag)
     Consider run-together words as valid compounds
bool pspell_config_save_repl(int $dictionary_link, bool $flag)
     Determine whether to save a replacement pairs list  along with the wordlist
bool pspell_save_wordlist(int $dictionary_link)
     Save the personal wordlist to a file
bool pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct)
     Store a replacement pair for a word
bool ps_add_launchlink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $filename)
     Adds link which launches file
bool ps_add_locallink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, int $page, string $dest)
     Adds link to a page in the same document
bool ps_add_note(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open)
     Adds note to current page
bool ps_add_pdflink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $dest)
     Adds link to a page in a second pdf document
bool ps_add_weblink(resource $psdoc, float $llx, float $lly, float $urx, float $ury, string $url)
     Adds link to a web location
bool ps_arc(resource $psdoc, float $x, float $y, float $radius, float $alpha, float $beta)
     Draws an arc counterclockwise
bool ps_arcn(resource $psdoc, float $x, float $y, float $radius, float $alpha, float $beta)
     Draws an arc clockwise
bool ps_begin_page(resource $psdoc, float $width, float $height)
     Start a new page
bool ps_circle(resource $psdoc, float $x, float $y, float $radius)
     Draws a circle
bool ps_clip(resource $psdoc)
     Clips drawing to current path
bool ps_close(resource $psdoc)
     Closes a PostScript document
bool ps_closepath(resource $psdoc)
     Closes path
bool ps_closepath_stroke(resource $psdoc)
     Closes and strokes path
bool ps_continue_text(resource $psdoc, string $text)
     Continue text in next line
bool ps_curveto(resource $psdoc, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
     Draws a curve
bool ps_delete(resource $psdoc)
     Deletes all resources of a PostScript document
bool ps_end_page(resource $psdoc)
     End a page
bool ps_end_pattern(resource $psdoc)
     End a pattern
bool ps_end_template(resource $psdoc)
     End a template
bool ps_fill(resource $psdoc)
     Fills the current path
bool ps_fill_stroke(resource $psdoc)
     Fills and strokes the current path
bool ps_include_file(resource $psdoc, string $file)
     Reads an external file with raw PostScript code
bool ps_lineto(resource $psdoc, float $x, float $y)
     Draws a line
bool ps_moveto(resource $psdoc, float $x, float $y)
     Sets current point
bool ps_open_file(resource $psdoc [, string $filename = ``])
     Opens a file for output
bool ps_place_image(resource $psdoc, int $imageid, float $x, float $y, float $scale)
     Places image on the page
bool ps_rect(resource $psdoc, float $x, float $y, float $width, float $height)
     Draws a rectangle
bool ps_restore(resource $psdoc)
     Restore previously save context
bool ps_rotate(resource $psdoc, float $rot)
     Sets rotation factor
bool ps_save(resource $psdoc)
     Save current context
bool ps_scale(resource $psdoc, float $x, float $y)
     Sets scaling factor
bool ps_setcolor(resource $psdoc, string $type, string $colorspace, float $c1, float $c2, float $c3, float $c4)
     Sets current color
bool ps_setdash(resource $psdoc, float $on, float $off)
     Sets appearance of a dashed line
bool ps_setflat(resource $psdoc, float $value)
     Sets flatness
bool ps_setfont(resource $psdoc, int $fontid, float $size)
     Sets font to use for following output
bool ps_setgray(resource $psdoc, float $gray)
     Sets gray value
bool ps_setlinecap(resource $psdoc, int $type)
     Sets appearance of line ends
bool ps_setlinejoin(resource $psdoc, int $type)
     Sets how contected lines are joined
bool ps_setlinewidth(resource $psdoc, float $width)
     Sets width of a line
bool ps_setmiterlimit(resource $psdoc, float $value)
     Sets the miter limit
bool ps_setoverprintmode(resource $psdoc, int $mode)
     Sets overprint mode
bool ps_setpolydash(resource $psdoc, float $arr)
     Sets appearance of a dashed line
bool ps_set_border_color(resource $psdoc, float $red, float $green, float $blue)
     Sets color of border for annotations
bool ps_set_border_dash(resource $psdoc, float $black, float $white)
     Sets length of dashes for border of annotations
bool ps_set_border_style(resource $psdoc, string $style, float $width)
     Sets border style of annotations
bool ps_set_info(resource $p, string $key, string $val)
     Sets information fields of document
bool ps_set_parameter(resource $psdoc, string $name, string $value)
     Sets certain parameters
bool ps_set_text_pos(resource $psdoc, float $x, float $y)
     Sets position for text output
bool ps_set_value(resource $psdoc, string $name, float $value)
     Sets certain values
bool ps_shfill(resource $psdoc, int $shadingid)
     Fills an area with a shading
bool ps_show(resource $psdoc, string $text)
     Output text
bool ps_show2(resource $psdoc, string $text, int $len)
     Output a text at current position
bool ps_show_xy(resource $psdoc, string $text, float $x, float $y)
     Output text at given position
bool ps_show_xy2(resource $psdoc, string $text, int $len, float $xcoor, float $ycoor)
     Output text at position
bool ps_stroke(resource $psdoc)
     Draws the current path
bool ps_symbol(resource $psdoc, int $ord)
     Output a glyph
bool ps_translate(resource $psdoc, float $x, float $y)
     Sets translation
bool putenv(string $setting)
     Sets the value of an environment variable
bool px_close(resource $pxdoc)
     Closes a paradox database
bool px_create_fp(resource $pxdoc, resource $file, array $fielddesc)
     Create a new paradox database
bool px_delete(resource $pxdoc)
     Deletes resource of paradox database
bool px_delete_record(resource $pxdoc, int $num)
     Deletes record from paradox database
bool px_open_fp(resource $pxdoc, resource $file)
     Open paradox database
bool px_put_record(resource $pxdoc, array $record [, int $recpos = -1])
     Stores record into paradox database
bool px_set_blob_file(resource $pxdoc, string $filename)
     Sets the file where blobs are read from
bool px_set_parameter(resource $pxdoc, string $name, string $value)
     Sets a parameter
bool px_set_targetencoding(resource $pxdoc, string $encoding)
     Sets the encoding for character fields (deprecated)
bool px_set_value(resource $pxdoc, string $name, float $value)
     Sets a value
bool px_update_record(resource $pxdoc, array $data, int $num)
     Updates record in paradox database
bool radius_add_server(resource $radius_handle, string $hostname, int $port, string $secret, int $timeout, int $max_tries)
     Adds a server
bool radius_close(resource $radius_handle)
     Frees all ressources
bool radius_config(resource $radius_handle, string $file)
     Causes the library to read the given configuration file
bool radius_create_request(resource $radius_handle, int $type)
     Create accounting or authentication request
bool radius_put_addr(resource $radius_handle, int $type, string $addr)
     Attaches an IP-Address attribute
bool radius_put_attr(resource $radius_handle, int $type, string $value)
     Attaches a binary attribute
bool radius_put_int(resource $radius_handle, int $type, int $value)
     Attaches an integer attribute
bool radius_put_string(resource $radius_handle, int $type, string $value)
     Attaches a string attribute
bool radius_put_vendor_addr(resource $radius_handle, int $vendor, int $type, string $addr)
     Attaches a vendor specific IP-Address attribute
bool radius_put_vendor_attr(resource $radius_handle, int $vendor, int $type, string $value)
     Attaches a vendor specific binary attribute
bool radius_put_vendor_int(resource $radius_handle, int $vendor, int $type, int $value)
     Attaches a vendor specific integer attribute
bool radius_put_vendor_string(resource $radius_handle, int $vendor, int $type, string $value)
     Attaches a vendor specific string attribute
bool RarArchive::close(RarArchive $rarfile)
     Close RAR archive and free all resources
bool RarArchive::isBroken(RarArchive $rarfile)
     Test whether an archive is broken (incomplete)
bool RarArchive::isSolid(RarArchive $rarfile)
     Check whether the RAR archive is solid
bool RarArchive::setAllowBroken(bool $allow_broken, RarArchive $rarfile)
     Whether opening broken archives is allowed
bool RarEntry::extract(string $dir [, string $filepath = `` [, string $password = null [, bool $extended_data = false]]])
     Extract entry from the archive
bool RarEntry::isDirectory()
     Test whether an entry represents a directory
bool RarEntry::isEncrypted()
     Test whether an entry is encrypted
bool RarException::isUsingExceptions()
     Check whether error handling with exceptions is in use
bool rar_broken_is(RarArchive $rarfile)
     Test whether an archive is broken (incomplete)
bool rar_close(RarArchive $rarfile)
     Close RAR archive and free all resources
bool rar_solid_is(RarArchive $rarfile)
     Check whether the RAR archive is solid
bool readline_add_history(string $line)
     Adds a line to the history
bool readline_callback_handler_install(string $prompt, callback $callback)
     Initializes the readline callback interface and terminal, prints the prompt and returns immediately
bool readline_callback_handler_remove()
     Removes a previously installed callback handler and restores terminal settings
bool readline_clear_history()
     Clears the history
bool readline_completion_function(callback $function)
     Registers a completion function
bool readline_read_history([string $filename = ``])
     Reads the history
bool readline_write_history([string $filename = ``])
     Writes the history
bool recode_file(string $request, resource $input, resource $output)
     Recode from file to file according to recode request
bool RecursiveCachingIterator::hasChildren()
     Check whether the current element of the inner iterator has children
bool RecursiveDirectoryIterator::hasChildren([bool $allow_links = ``])
     Returns whether current entry is a directory and not `.` or `..`
bool RecursiveIterator::hasChildren()
     Returns if an iterator can be created fot the current entry.
bool RecursiveIteratorIterator::callHasChildren()
     Has children
bool RecursiveIteratorIterator::valid()
     Check whether the current position is valid
bool RecursiveRegexIterator::hasChildren()
     Returns whether an iterator can be obtained for the current entry.
bool RecursiveTreeIterator::callHasChildren()
     Has children
bool RecursiveTreeIterator::valid()
     Check validity
bool ReflectionClass::hasConstant(string $name)
     Checks if constant is defined
bool ReflectionClass::hasMethod(string $name)
     Checks if method is defined
bool ReflectionClass::hasProperty(string $name)
     Checks if property is defined
bool ReflectionClass::implementsInterface(string $interface)
     Implements interface
bool ReflectionClass::inNamespace()
     Checks if in namespace
bool ReflectionClass::isAbstract()
     Checks if class is abstract
bool ReflectionClass::isFinal()
     Checks if class is final
bool ReflectionClass::isInstance(object $object)
     Checks class for instance
bool ReflectionClass::isInstantiable()
     Checks if instantiable
bool ReflectionClass::isInterface()
     Checks if interface
bool ReflectionClass::isInternal()
     Checks if internal
bool ReflectionClass::isIterateable()
     Checks if iterateable
bool ReflectionClass::isSubclassOf(string $class)
     Checks if a subclass
bool ReflectionClass::isUserDefined()
     Checks if user defined
bool ReflectionFunction::isDisabled()
     Checks if function is disabled
bool ReflectionFunctionAbstract::inNamespace()
     Checks if function in namespace
bool ReflectionFunctionAbstract::isClosure()
     Checks if closure
bool ReflectionFunctionAbstract::isDeprecated()
     Checks if deprecated
bool ReflectionFunctionAbstract::isInternal()
     Checks if is internal
bool ReflectionFunctionAbstract::isUserDefined()
     Checks if user defined
bool ReflectionFunctionAbstract::returnsReference()
     Checks if returns reference
bool ReflectionMethod::isAbstract()
     Checks if method is abstract
bool ReflectionMethod::isConstructor()
     Checks if method is a constructor
bool ReflectionMethod::isDestructor()
     Checks if method is a destructor
bool ReflectionMethod::isFinal()
     Checks if method is final
bool ReflectionMethod::isPrivate()
     Checks if method is private
bool ReflectionMethod::isProtected()
     Checks if method is protected
bool ReflectionMethod::isPublic()
     Checks if method is public
bool ReflectionMethod::isStatic()
     Checks if method is static
bool ReflectionParameter::allowsNull()
     Checks if null is allowed
bool ReflectionParameter::isArray()
     Checks if parameter expects an array
bool ReflectionParameter::isDefaultValueAvailable()
     Checks if a default value is available
bool ReflectionParameter::isOptional()
     Checks if optional
bool ReflectionParameter::isPassedByReference()
     Checks if passed by reference
bool ReflectionProperty::isDefault()
     Checks if default value
bool ReflectionProperty::isPrivate()
     Checks if property is private
bool ReflectionProperty::isProtected()
     Checks if property is protected
bool ReflectionProperty::isPublic()
     Checks if property is public
bool ReflectionProperty::isStatic()
     Checks if property is static
bool RegexIterator::accept()
     Get accept status
bool register_tick_function(callback $function [, mixed $arg = `` [, mixed $... = ``]])
     Register a function for execution on each tick
bool rename(string $oldname, string $newname [, resource $context = ``])
     Renames a file or directory
bool rename_function(string $original_name, string $new_name)
     Renames orig_name to new_name in the global function table
bool restore_error_handler()
     Restores the previous error handler function
bool restore_exception_handler()
     Restores the previously defined exception handler function
bool rewind(resource $handle)
     Rewind the position of a file pointer
bool rmdir(string $dirname [, resource $context = ``])
     Removes directory
bool rpm_close(resource $rpmr)
     Closes an RPM file
bool rpm_is_valid(string $filename)
     Tests a filename for validity as an RPM file
bool RRDCreator::save()
     Saves the RRD database to a file
bool RRDUpdater::update(array $values [, string $time = time()])
     Update the RRD database file
bool rrd_create(string $filename, array $options)
     Creates rrd database file
bool rrd_restore(string $xml_file, string $rrd_file [, array $options = ``])
     Restores the RRD file from XML dump.
bool rrd_tune(string $filename, array $options)
     Tunes some RRD database file header options.
bool rrd_update(string $filename, array $options)
     Updates the RRD database.
bool rsort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array in reverse order
bool runkit_class_adopt(string $classname, string $parentname)
     Convert a base class to an inherited class, add ancestral methods when appropriate
bool runkit_class_emancipate(string $classname)
     Convert an inherited class to a base class, removes any method whose scope is ancestral
bool runkit_constant_add(string $constname, mixed $value)
     Similar to define(), but allows defining in class definitions as well
bool runkit_constant_redefine(string $constname, mixed $newvalue)
     Redefine an already defined constant
bool runkit_constant_remove(string $constname)
     Remove/Delete an already defined constant
bool runkit_function_add(string $funcname, string $arglist, string $code)
     Add a new function, similar to create_function
bool runkit_function_copy(string $funcname, string $targetname)
     Copy a function to a new function name
bool runkit_function_redefine(string $funcname, string $arglist, string $code)
     Replace a function definition with a new implementation
bool runkit_function_remove(string $funcname)
     Remove a function definition
bool runkit_function_rename(string $funcname, string $newname)
     Change a function`s name
bool runkit_import(string $filename [, int $flags = RUNKIT_IMPORT_CLASS_METHODS])
     Process a PHP file importing function and class definitions, overwriting where appropriate
bool runkit_lint(string $code)
     Check the PHP syntax of the specified php code
bool runkit_lint_file(string $filename)
     Check the PHP syntax of the specified file
bool runkit_method_add(string $classname, string $methodname, string $args, string $code [, int $flags = RUNKIT_ACC_PUBLIC])
     Dynamically adds a new method to a given class
bool runkit_method_copy(string $dClass, string $dMethod, string $sClass [, string $sMethod = ``])
     Copies a method from class to another
bool runkit_method_redefine(string $classname, string $methodname, string $args, string $code [, int $flags = RUNKIT_ACC_PUBLIC])
     Dynamically changes the code of the given method
bool runkit_method_remove(string $classname, string $methodname)
     Dynamically removes the given method
bool runkit_method_rename(string $classname, string $methodname, string $newname)
     Dynamically changes the name of the given method
bool runkit_return_value_used()
     Determines if the current functions return value will be used
bool SAMConnection::commit()
     Commits (completes) the current unit of work.
bool SAMConnection::connect(string $protocol [, array $properties = ``])
     Establishes a connection to a Messaging Server
bool SAMConnection::disconnect()
     Disconnects from a Messaging Server
bool SAMConnection::isConnected()
     Queries whether a connection is established to a Messaging Server
bool SAMConnection::rollback()
     Cancels (rolls back) an in-flight unit of work.
bool SAMConnection::unsubscribe(string $subscriptionId [, string $targetTopic = ``])
     Cancel a subscription to a specified topic.
bool SDO_DAS_ChangeSummary::isLogging()
     Test to see whether change logging is switched on
bool SDO_DAS_Setting::is()
     Test whether a property was set prior to being modified
bool SDO_Model_Property::isContainment()
     Test to see if the property defines a containment relationship
bool SDO_Model_Property::isMany()
     Test to see if the property is many-valued
bool SDO_Model_Type::isAbstractType()
     Test to see if this SDO_Model_Type is an abstract data type
bool SDO_Model_Type::isDataType()
     Test to see if this SDO_Model_Type is a primitive data type
bool SDO_Model_Type::isInstance(SDO_DataObject $data_object)
     Test for an SDO_DataObject being an instance of this SDO_Model_Type
bool SDO_Model_Type::isOpenType()
     Test to see if this type is an open type
bool SDO_Model_Type::isSequencedType()
     Test to see if this is a sequenced type
bool sem_acquire(resource $sem_identifier)
     Acquire a semaphore
bool sem_release(resource $sem_identifier)
     Release a semaphore
bool sem_remove(resource $sem_identifier)
     Remove a semaphore
bool session_decode(string $data)
     Decodes session data from a string
bool session_destroy()
     Destroys all data registered to a session
bool session_is_registered(string $name)
     Find out whether a global variable is registered in a session
bool session_pgsql_add_error(int $error_level [, string $error_message = ``])
     Increments error counts and sets last error message
bool session_pgsql_reset()
     Reset connection to session database servers
bool session_pgsql_set_field(string $value)
     Set custom field value
bool session_regenerate_id([bool $delete_old_session = false])
     Update the current session id with a newly generated one
bool session_register(mixed $name [, mixed $... = ``])
     Register one or more global variables with the current session
bool session_set_save_handler(callback $open, callback $close, callback $read, callback $write, callback $destroy, callback $gc)
     Sets user-level session storage functions
bool session_start()
     Initialize session data
bool session_unregister(string $name)
     Unregister a global variable from the current session
bool setcookie(string $name [, string $value = `` [, int $expire = `` [, string $path = `` [, string $domain = `` [, bool $secure = false [, bool $httponly = false]]]]]])
     Send a cookie
bool setrawcookie(string $name [, string $value = `` [, int $expire = `` [, string $path = `` [, string $domain = `` [, bool $secure = false [, bool $httponly = false]]]]]])
     Send a cookie without urlencoding the cookie value
bool setthreadtitle(string $title)
     Set the thread title
bool settype(mixed $var, string $type)
     Set the type of a variable
bool set_magic_quotes_runtime(bool $new_setting)
     Sets the current active configuration setting of magic_quotes_runtime
bool shmop_delete(int $shmid)
     Delete shared memory block
bool shm_detach(resource $shm_identifier)
     Disconnects from shared memory segment
bool shm_has_var(resource $shm_identifier, int $variable_key)
     Check whether a specific entry exists
bool shm_put_var(resource $shm_identifier, int $variable_key, mixed $variable)
     Inserts or updates a variable in shared memory
bool shm_remove(resource $shm_identifier)
     Removes shared memory from Unix systems
bool shm_remove_var(resource $shm_identifier, int $variable_key)
     Removes a variable from shared memory
bool shuffle(array $array)
     Shuffle an array
bool SimpleXMLElement::registerXPathNamespace(string $prefix, string $ns)
     Creates a prefix/ns context for the next XPath query
bool SimpleXMLIterator::hasChildren()
     Checks whether the current element has sub elements.
bool SimpleXMLIterator::valid()
     Check whether the current element is valid
bool snmp2_set(string $host, string $community, string $object_id, string $type, string $value [, string $timeout = 1000000 [, string $retries = 5]])
     Set the value of an SNMP object
bool snmp3_set(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $type, string $value [, string $timeout = 1000000 [, string $retries = 5]])
     Description
bool snmpset(string $host, string $community, string $object_id, string $type, mixed $value [, int $timeout = 1000000 [, int $retries = 5]])
     Set the value of an SNMP object
bool snmp_get_quick_print()
     Fetches the current value of the UCD library`s quick_print setting
bool snmp_read_mib(string $filename)
     Reads and parses a MIB file into the active MIB tree
bool snmp_set_enum_print(int $enum_print)
     Return all values that are enums with their enum value instead of the raw integer
bool snmp_set_oid_output_format(int $oid_format)
     Set the OID output format
bool snmp_set_quick_print(bool $quick_print)
     Set the value of quick_print within the UCD SNMP library
bool snmp_set_valueretrieval(int $method)
     Specify the method how the SNMP values will be returned
bool SoapClient::__setSoapHeaders([mixed $soapheaders = ``])
     Sets SOAP headers for subsequent calls
bool socket_bind(resource $socket, string $address [, int $port = ``])
     Binds a name to a socket
bool socket_connect(resource $socket, string $address [, int $port = ``])
     Initiates a connection on a socket
bool socket_create_pair(int $domain, int $type, int $protocol, array $fd)
     Creates a pair of indistinguishable sockets and stores them in an array
bool socket_getpeername(resource $socket, string $address [, int $port = ``])
     Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
bool socket_getsockname(resource $socket, string $addr [, int $port = ``])
     Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
bool socket_listen(resource $socket [, int $backlog = ``])
     Listens for a connection on a socket
bool socket_set_block(resource $socket)
     Sets blocking mode on a socket resource
bool socket_set_nonblock(resource $socket)
     Sets nonblocking mode for file descriptor fd
bool socket_set_option(resource $socket, int $level, int $optname, mixed $optval)
     Sets socket options for the socket
bool socket_shutdown(resource $socket [, int $how = 2])
     Shuts down a socket for receiving, sending, or both
bool SolrClient::setServlet(int $type, string $value)
     Changes the specified servlet type to a new value
bool SolrDocument::addField(string $fieldName, string $fieldValue)
     Adds a field to the document
bool SolrDocument::clear()
     Drops all the fields in the document
bool SolrDocument::deleteField(string $fieldName)
     Removes a field from the document
bool SolrDocument::fieldExists(string $fieldName)
     Checks if a field exists in the document
bool SolrDocument::merge(SolrDocument $sourceDoc [, bool $overwrite = true])
     Merges source to the current SolrDocument
bool SolrDocument::offsetExists(string $fieldName)
     Checks if a particular field exists
bool SolrDocument::reset()
     This is an alias to SolrDocument::clear()
bool SolrDocument::sort(int $sortOrderBy [, int $sortDirection = SolrDocument::SORT_ASC])
     Sorts the fields in the document
bool SolrDocument::valid()
     Checks if the current position internally is still valid
bool SolrDocument::__isset(string $fieldName)
     Checks if a field exists
bool SolrDocument::__set(string $fieldName, string $fieldValue)
     Adds another field to the document
bool SolrDocument::__unset(string $fieldName)
     Removes a field from the document
bool SolrInputDocument::addField(string $fieldName, string $fieldValue [, float $fieldBoostValue = 0.0])
     Adds a field to the document
bool SolrInputDocument::clear()
     Resets the input document
bool SolrInputDocument::deleteField(string $fieldName)
     Removes a field from the document
bool SolrInputDocument::fieldExists(string $fieldName)
     Checks if a field exists
bool SolrInputDocument::merge(SolrInputDocument $sourceDoc [, bool $overwrite = true])
     Merges one input document into another
bool SolrInputDocument::reset()
     This is an alias of SolrInputDocument::clear
bool SolrInputDocument::setBoost(float $documentBoostValue)
     Sets the boost value for this document
bool SolrInputDocument::setFieldBoost(string $fieldName, float $fieldBoostValue)
     Sets the index-time boost value for a field
bool SolrInputDocument::sort(int $sortOrderBy [, int $sortDirection = SolrInputDocument::SORT_ASC])
     Sorts the fields within the document
bool SolrObject::offsetExists(string $property_name)
     Checks if the property exists
bool SolrQuery::getFacet()
     Returns the value of the facet parameter
bool SolrQuery::getFacetMissing([string $field_override = ``])
     Returns the current state of the facet.missing parameter
bool SolrQuery::getHighlight()
     Returns the state of the hl parameter
bool SolrQuery::getHighlightHighlightMultiTerm()
     Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
bool SolrQuery::getHighlightMergeContiguous([string $field_override = ``])
     Returns whether or not the collapse contiguous fragments into a single fragment
bool SolrQuery::getHighlightRequireFieldMatch()
     Returns if a field will only be highlighted if the query matched in this particular field
bool SolrQuery::getHighlightUsePhraseHighlighter()
     Returns the state of the hl.usePhraseHighlighter parameter
bool SolrQuery::getMlt()
     Returns whether or not MoreLikeThis results should be enabled
bool SolrQuery::getMltBoost()
     Returns whether or not the query will be boosted by the interesting term relevance
bool SolrQuery::getStats()
     Returns whether or not stats is enabled
bool SolrQuery::getTerms()
     Returns whether or not the TermsComponent is enabled
bool SolrQuery::getTermsIncludeLowerBound()
     Returns whether or not to include the lower bound in the result set
bool SolrQuery::getTermsIncludeUpperBound()
     Returns whether or not to include the upper bound term in the result set
bool SolrQuery::getTermsReturnRaw()
     Whether or not to return raw characters
bool SolrResponse::setParseMode([int $parser_mode = ``])
     Sets the parse mode
bool SolrResponse::success()
     Was the request a success
bool sort(array $array [, int $sort_flags = SORT_REGULAR])
     Sort an array
bool SphinxClient::close()
     Closes previously opened persistent connection
bool SphinxClient::open()
     Opens persistent connection to the server
bool SphinxClient::setArrayResult(bool $array_result)
     Change the format of result set array
bool SphinxClient::setConnectTimeout(float $timeout)
     Set connection timeout
bool SphinxClient::setFieldWeights(array $weights)
     Set field weights
bool SphinxClient::setFilter(string $attribute, array $values [, bool $exclude = false])
     Add new integer values set filter
bool SphinxClient::setFilterFloatRange(string $attribute, float $min, float $max [, bool $exclude = false])
     Add new float range filter
bool SphinxClient::setFilterRange(string $attribute, int $min, int $max [, bool $exclude = false])
     Add new integer range filter
bool SphinxClient::setGeoAnchor(string $attrlat, string $attrlong, float $latitude, float $longitude)
     Set anchor point for a geosphere distance calculations
bool SphinxClient::setGroupBy(string $attribute, int $func [, string $groupsort = \"@group desc\"])
     Set grouping attribute
bool SphinxClient::setGroupDistinct(string $attribute)
     Set attribute name for per-group distinct values count calculations
bool SphinxClient::setIDRange(int $min, int $max)
     Set a range of accepted document IDs
bool SphinxClient::setIndexWeights(array $weights)
     Set per-index weights
bool SphinxClient::setLimits(int $offset, int $limit [, int $max_matches = `` [, int $cutoff = ``]])
     Set offset and limit of the result set
bool SphinxClient::setMatchMode(int $mode)
     Set full-text query matching mode
bool SphinxClient::setMaxQueryTime(int $qtime)
     Set maximum query time
bool SphinxClient::setOverride(string $attribute, int $type, array $values)
     Sets temporary per-document attribute value   overrides
bool SphinxClient::setRankingMode(int $ranker)
     Set ranking mode
bool SphinxClient::setRetries(int $count [, int $delay = ``])
     Set retry count and delay
bool SphinxClient::setSelect(string $clause)
     Set select clause
bool SphinxClient::setServer(string $server, int $port)
     Set searchd host and port
bool SphinxClient::setSortMode(int $mode [, string $sortby = ``])
     Set matches sorting mode
bool SplDoublyLinkedList::isEmpty()
     Checks whether the doubly linked list is empty.
bool SplDoublyLinkedList::offsetExists(mixed $index)
     Returns whether the requested $index exists
bool SplDoublyLinkedList::valid()
     Check whether the doubly linked list contains more nodes
bool SplFileInfo::isDir()
     Tells if the file is a directory
bool SplFileInfo::isExecutable()
     Tells if the file is executable
bool SplFileInfo::isFile()
     Tells if the object references a regular file
bool SplFileInfo::isLink()
     Tells if the file is a link
bool SplFileInfo::isReadable()
     Tells if file is readable
bool SplFileInfo::isWritable()
     Tells if the entry is writable
bool SplFileObject::eof()
     Reached end of file
bool SplFileObject::fflush()
     Flushes the output to the file
bool SplFileObject::flock(int $operation [, int $wouldblock = ``])
     Portable file locking
bool SplFileObject::ftruncate(int $size)
     Truncates the file to a given length
bool SplFileObject::hasChildren()
     SplFileObject does not have children
bool SplFileObject::valid()
     Not at EOF
bool SplFixedArray::offsetExists(int $index)
     Returns whether the requested index exists
bool SplFixedArray::valid()
     Check whether the array contains more elements
bool SplHeap::isEmpty()
     Checks whether the heap is empty.
bool SplHeap::valid()
     Check whether the heap contains more nodes
bool SplObjectStorage::valid()
     Returns if the current iterator entry is valid
bool SplPriorityQueue::isEmpty()
     Checks whether the queue is empty.
bool SplPriorityQueue::valid()
     Check whether the queue contains more nodes
bool spl_autoload_register([callback $autoload_function = `` [, bool $throw = true [, bool $prepend = false]]])
     Register given function as __autoload() implementation
bool spl_autoload_unregister(mixed $autoload_function)
     Unregister given function as __autoload() implementation
bool SQLite3::busyTimeout(int $msecs)
     Sets the busy connection handler
bool SQLite3::close()
     Closes the database connection
bool SQLite3::createAggregate(string $name, mixed $step_callback, mixed $final_callback [, int $argument_count = -1])
     Registers a PHP function for use as an SQL aggregate function
bool SQLite3::createFunction(string $name, mixed $callback [, int $argument_count = -1])
     Registers a PHP function for use as an SQL scalar function
bool SQLite3::exec(string $query)
     Executes a result-less query against a given database
bool SQLite3::loadExtension(string $shared_library)
     Attempts to load an SQLite extension library
bool SQLite3Result::finalize()
     Closes the result set
bool SQLite3Result::reset()
     Resets the result set back to the first row
bool SQLite3Stmt::bindParam(string $sql_param, mixed $param [, int $type = ``])
     Binds a parameter to a statement variable
bool SQLite3Stmt::bindValue(string $sql_param, mixed $value [, int $type = ``])
     Binds the value of a parameter to a statement variable
bool SQLite3Stmt::clear()
     Clears all current bound parameters
bool SQLite3Stmt::close()
     Closes the prepared statement
bool SQLite3Stmt::reset()
     Resets the prepared statement
bool SQLiteDatabase::exec(resource $dbhandle, string $query [, string $error_msg = ``])
     Executes a result-less query against a given database
bool SQLiteResult::hasPrev(resource $result)
     Returns whether or not a previous row is available
bool SQLiteResult::next(resource $result)
     Seek to the next row number
bool SQLiteResult::prev(resource $result)
     Seek to the previous row number of a result set
bool SQLiteResult::rewind(resource $result)
     Seek to the first row number
bool SQLiteResult::seek(resource $result, int $rownum)
     Seek to a particular row number of a buffered result set
bool SQLiteResult::valid(resource $result)
     Returns whether more rows are available
bool SQLiteUnbuffered::next(resource $result)
     Seek to the next row number
bool SQLiteUnbuffered::valid(resource $result)
     Returns whether more rows are available
bool sqlite_exec(resource $dbhandle, string $query [, string $error_msg = ``])
     Executes a result-less query against a given database
bool sqlite_has_more(resource $result)
     Finds whether or not more rows are available
bool sqlite_has_prev(resource $result)
     Returns whether or not a previous row is available
bool sqlite_next(resource $result)
     Seek to the next row number
bool sqlite_prev(resource $result)
     Seek to the previous row number of a result set
bool sqlite_rewind(resource $result)
     Seek to the first row number
bool sqlite_seek(resource $result, int $rownum)
     Seek to a particular row number of a buffered result set
bool sqlite_valid(resource $result)
     Returns whether more rows are available
bool ssh2_auth_hostbased_file(resource $session, string $username, string $hostname, string $pubkeyfile, string $privkeyfile [, string $passphrase = `` [, string $local_username = ``]])
     Authenticate using a public hostkey
bool ssh2_auth_password(resource $session, string $username, string $password)
     Authenticate over SSH using a plain password
bool ssh2_auth_pubkey_file(resource $session, string $username, string $pubkeyfile, string $privkeyfile [, string $passphrase = ``])
     Authenticate using a public key
bool ssh2_publickey_add(resource $pkey, string $algoname, string $blob [, bool $overwrite = false [, array $attributes = ``]])
     Add an authorized publickey
bool ssh2_publickey_remove(resource $pkey, string $algoname, string $blob)
     Remove an authorized publickey
bool ssh2_scp_recv(resource $session, string $remote_file, string $local_file)
     Request a file via SCP
bool ssh2_scp_send(resource $session, string $local_file, string $remote_file [, int $create_mode = 0644])
     Send a file via SCP
bool ssh2_sftp_mkdir(resource $sftp, string $dirname [, int $mode = 0777 [, bool $recursive = false]])
     Create a directory
bool ssh2_sftp_rename(resource $sftp, string $from, string $to)
     Rename a remote file
bool ssh2_sftp_rmdir(resource $sftp, string $dirname)
     Remove a directory
bool ssh2_sftp_symlink(resource $sftp, string $target, string $link)
     Create a symlink
bool ssh2_sftp_unlink(resource $sftp, string $filename)
     Delete a file
bool Stomp::abort(string $transaction_id [, array $headers = ``, resource $link])
     Rolls back a transaction in progress
bool Stomp::ack(mixed $msg [, array $headers = ``, resource $link])
     Acknowledges consumption of a message
bool Stomp::begin(string $transaction_id [, array $headers = ``, resource $link])
     Starts a transaction
bool Stomp::commit(string $transaction_id [, array $headers = ``, resource $link])
     Commits a transaction in progress
bool Stomp::hasFrame(resource $link)
     Indicates whether or not there is a frame ready to read
bool Stomp::send(string $destination, mixed $msg [, array $headers = ``, resource $link])
     Sends a message
bool Stomp::subscribe(string $destination [, array $headers = ``, resource $link])
     Registers to listen to a given destination
bool Stomp::unsubscribe(string $destination [, array $headers = ``, resource $link])
     Removes an existing subscription
bool Stomp::__destruct(resource $link)
     Closes stomp connection
bool stomp_abort(string $transaction_id [, array $headers = ``, resource $link])
     Rolls back a transaction in progress
bool stomp_ack(mixed $msg [, array $headers = ``, resource $link])
     Acknowledges consumption of a message
bool stomp_begin(string $transaction_id [, array $headers = ``, resource $link])
     Starts a transaction
bool stomp_close(resource $link)
     Closes stomp connection
bool stomp_commit(string $transaction_id [, array $headers = ``, resource $link])
     Commits a transaction in progress
bool stomp_has_frame(resource $link)
     Indicates whether or not there is a frame ready to read
bool stomp_send(string $destination, mixed $msg [, array $headers = ``, resource $link])
     Sends a message
bool stomp_subscribe(string $destination [, array $headers = ``, resource $link])
     Registers to listen to a given destination
bool stomp_unsubscribe(string $destination [, array $headers = ``, resource $link])
     Removes an existing subscription
bool streamWrapper::dir_closedir()
     Close directory handle
bool streamWrapper::dir_opendir(string $path, int $options)
     Open directory handle
bool streamWrapper::dir_rewinddir()
     Rewind directory handle
bool streamWrapper::mkdir(string $path, int $mode, int $options)
     Create a directory
bool streamWrapper::rename(string $path_from, string $path_to)
     Renames a file or directory
bool streamWrapper::rmdir(string $path, int $options)
     Removes a directory
bool streamWrapper::stream_eof()
     Tests for end-of-file on a file pointer
bool streamWrapper::stream_flush()
     Flushes the output
bool streamWrapper::stream_lock(mode $operation)
     Advisory file locking
bool streamWrapper::stream_open(string $path, string $mode, int $options, string $opened_path)
     Opens file or URL
bool streamWrapper::stream_seek(int $offset, int $whence)
     Seeks to specific location in a stream
bool streamWrapper::stream_set_option(int $option, int $arg1, int $arg2)
     Change stream options
bool streamWrapper::unlink(string $path)
     Delete a file
bool stream_context_set_option(resource $stream_or_context, string $wrapper, string $option, mixed $value, array $options)
     Sets an option for a stream/wrapper/context
bool stream_context_set_params(resource $stream_or_context, array $params)
     Set parameters for a stream/wrapper/context
bool stream_encoding(resource $stream [, string $encoding = ``])
     Set character set for stream encoding
bool stream_filter_register(string $filtername, string $classname)
     Register a user defined stream filter
bool stream_filter_remove(resource $stream_filter)
     Remove a filter from a stream
bool stream_is_local(mixed $stream_or_url)
     Checks if a stream is a local stream
bool stream_set_blocking(resource $stream, int $mode)
     Set blocking/non-blocking mode on a stream
bool stream_set_timeout(resource $stream, int $seconds [, int $microseconds = ``])
     Set timeout period on a stream
bool stream_socket_shutdown(resource $stream, int $how)
     Shutdown a full-duplex connection
bool stream_supports_lock(resource $stream)
     Tells whether the stream supports locking.
bool stream_wrapper_register(string $protocol, string $classname [, int $flags = ``])
     Register a URL wrapper implemented as a PHP class
bool stream_wrapper_restore(string $protocol)
     Restores a previously unregistered built-in wrapper
bool stream_wrapper_unregister(string $protocol)
     Unregister a URL wrapper
bool svn_add(string $path [, bool $recursive = true [, bool $force = false]])
     Schedules the addition of an item in a working directory
bool svn_checkout(string $repos, string $targetpath [, int $revision = `` [, int $flags = ``]])
     Checks out a working copy from the repository
bool svn_cleanup(string $workingdir)
     Recursively cleanup a working copy directory, finishing incomplete operations and removing locks
bool svn_delete(string $path [, bool $force = false])
     Delete items from a working copy or repository.
bool svn_export(string $frompath, string $topath [, bool $working_copy = true [, int $revision_no = -1]])
     Export the contents of a SVN directory
bool svn_fs_abort_txn(resource $txn)
     Abort a transaction, returns true if everything is okay, false otherwise
bool svn_fs_change_node_prop(resource $root, string $path, string $name, string $value)
     Return true if everything is ok, false otherwise
bool svn_fs_contents_changed(resource $root1, string $path1, resource $root2, string $path2)
     Return true if content is different, false otherwise
bool svn_fs_copy(resource $from_root, string $from_path, resource $to_root, string $to_path)
     Copies a file or a directory, returns true if all is ok, false otherwise
bool svn_fs_delete(resource $root, string $path)
     Deletes a file or a directory, return true if all is ok, false otherwise
bool svn_fs_is_dir(resource $root, string $path)
     Return true if the path points to a directory, false otherwise
bool svn_fs_is_file(resource $root, string $path)
     Return true if the path points to a file, false otherwise
bool svn_fs_make_dir(resource $root, string $path)
     Creates a new empty directory, returns true if all is ok, false otherwise
bool svn_fs_make_file(resource $root, string $path)
     Creates a new empty file, returns true if all is ok, false otherwise
bool svn_fs_props_changed(resource $root1, string $path1, resource $root2, string $path2)
     Return true if props are different, false otherwise
bool svn_import(string $path, string $url, bool $nonrecursive)
     Imports an unversioned path into a repository
bool svn_mkdir(string $path [, string $log_message = ``])
     Creates a directory in a working copy or repository
bool svn_repos_hotcopy(string $repospath, string $destpath, bool $cleanlogs)
     Make a hot-copy of the repos at repospath; copy it to destpath
bool svn_repos_recover(string $path)
     Run recovery procedures on the repository located at path.
bool svn_revert(string $path [, bool $recursive = false])
     Revert changes to the working copy
bool sybase_close([resource $link_identifier = ``])
     Closes a Sybase connection
bool sybase_data_seek(resource $result_identifier, int $row_number)
     Moves internal row pointer
bool sybase_field_seek(resource $result, int $field_offset)
     Sets field offset
bool sybase_free_result(resource $result)
     Frees result memory
bool sybase_select_db(string $database_name [, resource $link_identifier = ``])
     Selects a Sybase database
bool sybase_set_message_handler(callback $handler [, resource $connection = ``])
     Sets the handler called when a server message is raised
bool symlink(string $target, string $link)
     Creates a symbolic link
bool syslog(int $priority, string $message)
     Generate a system log message
bool tcpwrap_check(string $daemon, string $address [, string $user = `` [, bool $nodns = false]])
     Performs a tcpwrap check
bool tidy::cleanRepair(tidy $object)
     Execute configured cleanup and repair operations on parsed markup
bool tidy::diagnose(tidy $object)
     Run configured diagnostics on parsed and repaired markup
bool tidy::isXhtml(tidy $object)
     Indicates if the document is a XHTML document
bool tidy::isXml(tidy $object)
     Indicates if the document is a generic (non HTML/XHTML) XML document
bool tidyNode::hasChildren()
     Checks if a node has children
bool tidyNode::hasSiblings()
     Checks if a node has siblings
bool tidyNode::isAsp()
     Checks if this node is ASP
bool tidyNode::isComment()
     Checks if a node represents a comment
bool tidyNode::isHtml()
     Checks if a node is part of a HTML document
bool tidyNode::isJste()
     Checks if this node is JSTE
bool tidyNode::isPhp()
     Checks if a node is PHP
bool tidyNode::isText()
     Checks if a node represents text (no markup)
bool tidy_clean_repair(tidy $object)
     Execute configured cleanup and repair operations on parsed markup
bool tidy_diagnose(tidy $object)
     Run configured diagnostics on parsed and repaired markup
bool tidy_is_xhtml(tidy $object)
     Indicates if the document is a XHTML document
bool tidy_is_xml(tidy $object)
     Indicates if the document is a generic (non HTML/XHTML) XML document
bool tidy_reset_config()
     Restore Tidy configuration to default values
bool tidy_save_config(string $filename)
     Save current settings to named file
bool tidy_setopt(string $option, mixed $value)
     Updates the configuration settings for the specified tidy document
bool tidy_set_encoding(string $encoding)
     Set the input/output character encoding for parsing markup
bool time_sleep_until(float $timestamp)
     Make the script sleep until the specified time
bool TokyoTyrantQuery::rewind()
     Rewinds the iterator
bool TokyoTyrantQuery::valid()
     Checks the validity of current item
bool touch(string $filename [, int $time = time() [, int $atime = ``]])
     Sets access and modification time of file
bool trigger_error(string $error_msg [, int $error_type = E_USER_NOTICE])
     Generates a user-level error/warning/notice message
bool uasort(array $array, callback $cmp_function)
     Sort an array with a user-defined comparison function and maintain index association
bool udm_add_search_limit(resource $agent, int $var, string $val)
     Add various search limits
bool udm_check_charset(resource $agent, string $charset)
     Check if the given charset is known to mnogosearch
bool udm_clear_search_limits(resource $agent)
     Clear all mnoGoSearch search restrictions
bool udm_free_ispell_data(int $agent)
     Free memory allocated for ispell data
bool udm_free_res(resource $res)
     Free mnoGoSearch result
bool udm_load_ispell_data(resource $agent, int $var, string $val1, string $val2, int $flag)
     Load ispell data
bool udm_set_agent_param(resource $agent, int $var, string $val)
     Set mnoGoSearch agent session parameters
bool uksort(array $array, callback $cmp_function)
     Sort an array by keys using a user-defined comparison function
bool unlink(string $filename [, resource $context = ``])
     Deletes a file
bool use_soap_error_handler([bool $handler = true])
     Set whether to use the SOAP error handler
bool usort(array $array, callback $cmp_function)
     Sort an array by values using a user-defined comparison function
bool V8Js::registerExtension(string $extension_name, string $script [, array $dependencies = array() [, bool $auto_enable = ``]])
     Register Javascript extensions for V8Js
bool virtual(string $filename)
     Perform an Apache sub-request
bool vpopmail_add_alias_domain(string $domain, string $aliasdomain)
     Add an alias for a virtual domain
bool vpopmail_add_alias_domain_ex(string $olddomain, string $newdomain)
     Add alias to an existing virtual domain
bool vpopmail_add_domain(string $domain, string $dir, int $uid, int $gid)
     Add a new virtual domain
bool vpopmail_add_domain_ex(string $domain, string $passwd [, string $quota = `` [, string $bounce = `` [, bool $apop = ``]]])
     Add a new virtual domain
bool vpopmail_add_user(string $user, string $domain, string $password [, string $gecos = `` [, bool $apop = ``]])
     Add a new user to the specified virtual domain
bool vpopmail_alias_add(string $user, string $domain, string $alias)
     Insert a virtual alias
bool vpopmail_alias_del(string $user, string $domain)
     Deletes all virtual aliases of a user
bool vpopmail_alias_del_domain(string $domain)
     Deletes all virtual aliases of a domain
bool vpopmail_auth_user(string $user, string $domain, string $password [, string $apop = ``])
     Attempt to validate a username/domain/password
bool vpopmail_del_domain(string $domain)
     Delete a virtual domain
bool vpopmail_del_domain_ex(string $domain)
     Delete a virtual domain
bool vpopmail_del_user(string $user, string $domain)
     Delete a user from a virtual domain
bool vpopmail_passwd(string $user, string $domain, string $password [, bool $apop = ``])
     Change a virtual user`s password
bool vpopmail_set_user_quota(string $user, string $domain, string $quota)
     Sets a virtual user`s quota
bool w32api_deftype(string $typename, string $member1_type, string $member1_name [, string $... = ``])
     Defines a type for use with other w32api_functions
bool w32api_register_function(string $library, string $function_name, string $return_type)
     Registers function function_name from library with PHP
bool wddx_add_vars(resource $packet_id, mixed $var_name [, mixed $... = ``])
     Add variables to a WDDX packet with the specified ID
bool win32_set_service_status(int $status [, int $checkpoint = ``])
     Update the service status
bool wincache_lock(string $key [, bool $isglobal = false])
     Acquires an exclusive lock on a given key
bool wincache_refresh_if_changed([array $files = ``])
     Refreshes the cache entries for the cached files
bool wincache_ucache_add(string $key, mixed $value [, int $ttl = ``, array $values [, mixed $unused = ``]])
     Adds a variable in user cache only if variable does not already exist in the cache
bool wincache_ucache_cas(string $key, int $old_value, int $new_value)
     Compares the variable with old value and assigns new value to it
bool wincache_ucache_clear()
     Deletes entire content of the user cache
bool wincache_ucache_delete(mixed $key)
     Deletes variables from the user cache
bool wincache_ucache_exists(string $key)
     Checks if a variable exists in the user cache
bool wincache_ucache_set(mixed $key, mixed $value [, int $ttl = ``, array $values [, mixed $unused = ``]])
     Adds a variable in user cache and overwrites a variable if it already exists in the cache
bool wincache_unlock(string $key)
     Releases an exclusive lock on a given key
bool xattr_remove(string $filename, string $name [, int $flags = ``])
     Remove an extended attribute
bool xattr_set(string $filename, string $name, string $value [, int $flags = ``])
     Set an extended attribute
bool xattr_supported(string $filename [, int $flags = ``])
     Check if filesystem supports extended attributes
bool xdiff_file_bdiff(string $old_file, string $new_file, string $dest)
     Make binary diff of two files
bool xdiff_file_bpatch(string $file, string $patch, string $dest)
     Patch a file with a binary diff
bool xdiff_file_diff(string $old_file, string $new_file, string $dest [, int $context = 3 [, bool $minimal = false]])
     Make unified diff of two files
bool xdiff_file_diff_binary(string $old_file, string $new_file, string $dest)
     Alias of xdiff_file_bdiff
bool xdiff_file_patch_binary(string $file, string $patch, string $dest)
     Alias of xdiff_file_bpatch
bool xdiff_file_rabdiff(string $old_file, string $new_file, string $dest)
     Make binary diff of two files using the Rabin`s polynomial fingerprinting algorithm
bool XMLReader::close()
     Close the XMLReader input
bool XMLReader::getParserProperty(int $property)
     Indicates if specified property has been set
bool XMLReader::isValid()
     Indicates if the parsed document is valid
bool XMLReader::lookupNamespace(string $prefix)
     Lookup namespace for a prefix
bool XMLReader::moveToAttribute(string $name)
     Move cursor to a named attribute
bool XMLReader::moveToAttributeNo(int $index)
     Move cursor to an attribute by index
bool XMLReader::moveToAttributeNs(string $localName, string $namespaceURI)
     Move cursor to a named attribute
bool XMLReader::moveToElement()
     Position cursor on the parent Element of current Attribute
bool XMLReader::moveToFirstAttribute()
     Position cursor on the first Attribute
bool XMLReader::moveToNextAttribute()
     Position cursor on the next Attribute
bool XMLReader::next([string $localname = ``])
     Move cursor to next node skipping all subtrees
bool XMLReader::open(string $URI [, string $encoding = `` [, int $options = ``]])
     Set the URI containing the XML to parse
bool XMLReader::read()
     Move to next node in document
bool XMLReader::setParserProperty(int $property, bool $value)
     Set or Unset parser options
bool XMLReader::setRelaxNGSchema(string $filename)
     Set the filename or URI for a RelaxNG Schema
bool XMLReader::setRelaxNGSchemaSource(string $source)
     Set the data containing a RelaxNG Schema
bool XMLReader::setSchema(string $filename)
     Validate document against XSD
bool XMLReader::XML(string $source [, string $encoding = `` [, int $options = ``]])
     Set the data containing the XML to parse
bool xmlrpc_is_fault(array $arg)
     Determines if an array value represents an XMLRPC fault
bool xmlrpc_server_register_introspection_callback(resource $server, string $function)
     Register a PHP function to generate documentation
bool xmlrpc_server_register_method(resource $server, string $method_name, string $function)
     Register a PHP function to resource method matching method_name
bool xmlrpc_set_type(string $value, string $type)
     Sets xmlrpc type, base64 or datetime, for a PHP string value
bool XMLWriter::endAttribute(resource $xmlwriter)
     End attribute
bool XMLWriter::endCData(resource $xmlwriter)
     End current CDATA
bool XMLWriter::endComment(resource $xmlwriter)
     Create end comment
bool XMLWriter::endDocument(resource $xmlwriter)
     End current document
bool XMLWriter::endDTD(resource $xmlwriter)
     End current DTD
bool XMLWriter::endDTDAttlist(resource $xmlwriter)
     End current DTD AttList
bool XMLWriter::endDTDElement(resource $xmlwriter)
     End current DTD element
bool XMLWriter::endDTDEntity(resource $xmlwriter)
     End current DTD Entity
bool XMLWriter::endElement(resource $xmlwriter)
     End current element
bool XMLWriter::endPI(resource $xmlwriter)
     End current PI
bool XMLWriter::fullEndElement(resource $xmlwriter)
     End current element
bool XMLWriter::setIndent(bool $indent, resource $xmlwriter)
     Toggle indentation on/off
bool XMLWriter::setIndentString(string $indentString, resource $xmlwriter)
     Set string used for indenting
bool XMLWriter::startAttribute(string $name, resource $xmlwriter)
     Create start attribute
bool XMLWriter::startAttributeNS(string $prefix, string $name, string $uri, resource $xmlwriter)
     Create start namespaced attribute
bool XMLWriter::startCData(resource $xmlwriter)
     Create start CDATA tag
bool XMLWriter::startComment(resource $xmlwriter)
     Create start comment
bool XMLWriter::startDocument([string $version = `` [, string $encoding = `` [, string $standalone = ``, resource $xmlwriter]]])
     Create document tag
bool XMLWriter::startDTD(string $qualifiedName [, string $publicId = `` [, string $systemId = ``, resource $xmlwriter]])
     Create start DTD tag
bool XMLWriter::startDTDAttlist(string $name, resource $xmlwriter)
     Create start DTD AttList
bool XMLWriter::startDTDElement(string $qualifiedName, resource $xmlwriter)
     Create start DTD element
bool XMLWriter::startDTDEntity(string $name, bool $isparam, resource $xmlwriter)
     Create start DTD Entity
bool XMLWriter::startElement(string $name, resource $xmlwriter)
     Create start element tag
bool XMLWriter::startElementNS(string $prefix, string $name, string $uri, resource $xmlwriter)
     Create start namespaced element tag
bool XMLWriter::startPI(string $target, resource $xmlwriter)
     Create start PI tag
bool XMLWriter::text(string $content, resource $xmlwriter)
     Write text
bool XMLWriter::writeAttribute(string $name, string $value, resource $xmlwriter)
     Write full attribute
bool XMLWriter::writeAttributeNS(string $prefix, string $name, string $uri, string $content, resource $xmlwriter)
     Write full namespaced attribute
bool XMLWriter::writeCData(string $content, resource $xmlwriter)
     Write full CDATA tag
bool XMLWriter::writeComment(string $content, resource $xmlwriter)
     Write full comment tag
bool XMLWriter::writeDTD(string $name [, string $publicId = `` [, string $systemId = `` [, string $subset = ``, resource $xmlwriter]]])
     Write full DTD tag
bool XMLWriter::writeDTDAttlist(string $name, string $content, resource $xmlwriter)
     Write full DTD AttList tag
bool XMLWriter::writeDTDElement(string $name, string $content, resource $xmlwriter)
     Write full DTD element tag
bool XMLWriter::writeDTDEntity(string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid, resource $xmlwriter)
     Write full DTD Entity tag
bool XMLWriter::writeElement(string $name [, string $content = ``, resource $xmlwriter])
     Write full element tag
bool XMLWriter::writeElementNS(string $prefix, string $name, string $uri [, string $content = ``, resource $xmlwriter])
     Write full namespaced element tag
bool XMLWriter::writePI(string $target, string $content, resource $xmlwriter)
     Writes a PI
bool XMLWriter::writeRaw(string $content, resource $xmlwriter)
     Write a raw XML text
bool xml_parser_free(resource $parser)
     Free an XML parser
bool xml_parser_set_option(resource $parser, int $option, mixed $value)
     Set options in an XML parser
bool xml_set_character_data_handler(resource $parser, callback $handler)
     Set up character data handler
bool xml_set_default_handler(resource $parser, callback $handler)
     Set up default handler
bool xml_set_element_handler(resource $parser, callback $start_element_handler, callback $end_element_handler)
     Set up start and end element handlers
bool xml_set_end_namespace_decl_handler(resource $parser, callback $handler)
     Set up end namespace declaration handler
bool xml_set_external_entity_ref_handler(resource $parser, callback $handler)
     Set up external entity reference handler
bool xml_set_notation_decl_handler(resource $parser, callback $handler)
     Set up notation declaration handler
bool xml_set_object(resource $parser, object $object)
     Use XML Parser within an object
bool xml_set_processing_instruction_handler(resource $parser, callback $handler)
     Set up processing instruction (PI) handler
bool xml_set_start_namespace_decl_handler(resource $parser, callback $handler)
     Set up start namespace declaration handler
bool xml_set_unparsed_entity_decl_handler(resource $parser, callback $handler)
     Set up unparsed entity declaration handler
bool xpath_register_ns(XPathContext $xpath_context, string $prefix, string $uri)
     Register the given namespace in the passed XPath context
bool xpath_register_ns_auto(XPathContext $xpath_context [, object $context_node = ``])
     Register the given namespace in the passed XPath context
bool XSLTProcessor::hasExsltSupport()
     Determine if PHP has EXSLT support
bool XSLTProcessor::removeParameter(string $namespaceURI, string $localName)
     Remove parameter
bool XSLTProcessor::setParameter(string $namespace, string $name, string $value, array $options)
     Set value for a parameter
bool XSLTProcessor::setProfiling(string $filename)
     Sets profiling output file
bool xslt_set_object(resource $processor, object $obj)
     Sets the object in which to resolve callback functions
bool yaml_emit_file(string $filename, mixed $data [, int $encoding = YAML_ANY_ENCODING [, int $linebreak = YAML_ANY_BREAK]])
     Send the YAML representation of a value to a file
bool yaz_ccl_parse(resource $id, string $query, array $result)
     Invoke CCL Parser
bool yaz_close(resource $id)
     Close YAZ connection
bool yaz_database(resource $id, string $databases)
     Specifies the databases within a session
bool yaz_element(resource $id, string $elementset)
     Specifies Element-Set Name for retrieval
bool yaz_present(resource $id)
     Prepares for retrieval (Z39.50 present)
bool yaz_search(resource $id, string $type, string $query)
     Prepares for a search
bool ZipArchive::addEmptyDir(string $dirname)
     Add a new directory
bool ZipArchive::addFile(string $filename [, string $localname = `` [, int $start = `` [, int $length = ``]]])
     Adds a file to a ZIP archive from the given path
bool ZipArchive::addFromString(string $localname, string $contents)
     Add a file to a ZIP archive using its contents
bool ZipArchive::close()
     Close the active archive (opened or newly created)
bool ZipArchive::deleteIndex(int $index)
     delete an entry in the archive using its index
bool ZipArchive::deleteName(string $name)
     delete an entry in the archive using its name
bool ZipArchive::extractTo(string $destination [, mixed $entries = ``])
     Extract the archive contents
bool ZipArchive::renameIndex(int $index, string $newname)
     Renames an entry defined by its index
bool ZipArchive::renameName(string $name, string $newname)
     Renames an entry defined by its name
bool zip_entry_close(resource $zip_entry)
     Close a directory entry
bool zip_entry_open(resource $zip, resource $zip_entry [, string $mode = ``])
     Open a directory entry for reading
 CachingIterator::__construct(Iterator $iterator [, string $flags = ``])
     Construct a new CachingIterator object for the iterator.
 CairoContext::__construct(CairoSurface $surface)
     Creates a new CairoContext
CairoContext cairo_create(CairoSurface $surface)
     Returns a new CairoContext object on the requested surface.
 CairoFontFace::__construct()
     Creates a new CairoFontFace object
CairoFontFace cairo_scaled_font_get_font_face(CairoScaledFont $scaledfont)
     Description
 CairoFontOptions::__construct()
     The __construct purpose
CairoFontOptions cairo_font_options_create()
     Description
CairoFontOptions cairo_scaled_font_get_font_matrix(CairoScaledFont $scaledfont)
     Description
CairoFontOptions cairo_scaled_font_get_font_options(CairoScaledFont $scaledfont)
     Description
CairoFontOptions cairo_surface_get_font_options(CairoSurface $surface)
     Description
 CairoImageSurface::__construct(int $format, int $width, int $height)
     Creates a new CairoImageSurface
CairoImageSurface CairoImageSurface::createFromPng(string $file)
     Creates a new CairoImageSurface form a png image file
CairoImageSurface cairo_image_surface_create(int $format, int $width, int $height)
     Description
CairoImageSurface cairo_image_surface_create_for_data(string $data, int $format, int $width, int $height [, int $stride = -1])
     Description
CairoImageSurface cairo_image_surface_create_from_png(string $file)
     Description
 CairoLinearGradient::__construct(float $x0, float $y0, float $x1, float $y1)
     The __construct purpose
CairoMatrix CairoMatrix::multiply(CairoMatrix $matrix1, CairoMatrix $matrix2)
     The multiply purpose
CairoMatrix CairoScaledFont::getCtm()
     The getCtm purpose
CairoMatrix cairo_matrix_multiply(CairoMatrix $matrix1, CairoMatrix $matrix2)
     Description
CairoMatrix cairo_pattern_get_matrix(CairoPattern $pattern)
     Description
CairoMatrix cairo_scaled_font_get_ctm(CairoScaledFont $scaledfont)
     Description
CairoMatrix cairo_scaled_font_get_scale_matrix(CairoScaledFont $scaledfont)
     Description
CairoPath CairoContext::copyPath(CairoContext $context)
     Creates a copy of the current path
CairoPath CairoContext::copyPathFlat(CairoContext $context)
     Gets a flattened copy of the current path
CairoPath cairo_copy_path(CairoContext $context)
     Creates a copy of the current path
CairoPath cairo_copy_path_flat(CairoContext $context)
     Gets a flattened copy of the current path
 CairoPattern::__construct()
     The __construct purpose
CairoPattern CairoRadialGradient::__construct(float $x0, float $y0, float $r0, float $x1, float $y1, float $r1)
     The __construct purpose
CairoPattern cairo_pattern_create_for_surface(CairoSurface $surface)
     Description
CairoPattern cairo_pattern_create_linear(float $x0, float $y0, float $x1, float $y1)
     Description
CairoPattern cairo_pattern_create_radial(float $x0, float $y0, float $r0, float $x1, float $y1, float $r1)
     Description
CairoPattern cairo_pattern_create_rgb(float $red, float $green, float $blue)
     Description
CairoPattern cairo_pattern_create_rgba(float $red, float $green, float $blue, float $alpha)
     Description
 CairoPdfSurface::__construct(string $file, float $width, float $height)
     The __construct purpose
CairoPdfSurface cairo_pdf_surface_create(string $file, float $width, float $height)
     Description
 CairoPsSurface::__construct(string $file, float $width, float $height)
     The __construct purpose
CairoPsSurface cairo_ps_surface_create(string $file, float $width, float $height)
     Description
 CairoScaledFont::__construct(CairoFontFace $font_face, CairoMatrix $matrix, CairoMatrix $ctm, CairoFontOptions $options)
     The __construct purpose
CairoScaledFont cairo_scaled_font_create(CairoFontFace $fontface, CairoMatrix $matrix, CairoMatrix $ctm, CairoFontOptions $fontoptions)
     Description
 CairoSolidPattern::__construct(float $red, float $green, float $blue [, float $alpha = ``])
     The __construct purpose
 CairoSurface::__construct()
     The __construct purpose
CairoSurface cairo_pattern_get_surface(CairoSurfacePattern $pattern)
     Description
CairoSurface cairo_surface_create_similar(CairoSurface $surface, int $content, float $width, float $height)
     Description
 CairoSurfacePattern::__construct(CairoSurface $surface)
     The __construct purpose
 CairoSvgSurface::__construct(string $file, float $width, float $height)
     The __construct purpose
CairoSvgSurface cairo_svg_surface_create(string $file, float $width, float $height)
     Description
 cairo_matrix_create_translate()
     Alias of CairoMatrix::initTranslate
callback set_exception_handler(callback $exception_handler)
     Sets a user-defined exception handler function
callback stream_notification_callback(int $notification_code, int $severity, string $message, int $message_code, int $bytes_transferred, int $bytes_max)
     A callback function for the notification context paramater
 chdb::__construct(string $pathname)
     Creates a chdb instance
 chop()
     Alias of rtrim
 Collator::__construct(string $locale)
     Create a collator
Collator Collator::create(string $locale)
     Create a collator
Collator collator_create(string $locale)
     Create a collator
 COM()
     COM class
 com_get()
     Gets the value of a COM Component`s property [deprecated]
 com_invoke()
     Calls a COM component`s method [deprecated]
 com_load()
     Creates a new reference to a COM component [deprecated]
 com_propget()
     Alias of com_get
 com_propput()
     Alias of com_set
 com_propset()
     Alias of com_set
 com_set()
     Assigns a value to a COM component`s property
 DateInterval::__construct(string $interval_spec)
     Creates new DateInterval object
DateInterval DateInterval::createFromDateString(string $time)
     Sets up a DateInterval from the relative parts of the string
DateInterval DateTime::diff(DateTime $datetime2 [, bool $absolute = false, DateTime $datetime1])
     Returns the difference between two DateTime objects
 DatePeriod::__construct(DateTime $start, DateInterval $interval, int $recurrences [, int $options = ``, DateTime $end, string $isostr])
     Creates new DatePeriod object
DateTime DateTime::add(DateInterval $interval, DateTime $object)
     Adds an amount of days, months, years, hours, minutes and seconds to a   DateTime object
DateTime DateTime::createFromFormat(string $format, string $time [, DateTimeZone $timezone = ``])
     Returns new DateTime object formatted according to the specified format
DateTime DateTime::modify(string $modify, DateTime $object)
     Alters the timestamp
DateTime DateTime::setDate(int $year, int $month, int $day, DateTime $object)
     Sets the date
DateTime DateTime::setISODate(int $year, int $week [, int $day = 1, DateTime $object])
     Sets the ISO date
DateTime DateTime::setTime(int $hour, int $minute [, int $second = ``, DateTime $object])
     Sets the time
DateTime DateTime::setTimestamp(int $unixtimestamp, DateTime $object)
     Sets the date and time based on an Unix timestamp
DateTime DateTime::setTimezone(DateTimeZone $timezone, DateTime $object)
     Sets the time zone for the DateTime object
DateTime DateTime::sub(DateInterval $interval, DateTime $object)
     Subtracts an amount of days, months, years, hours, minutes and seconds from   a DateTime object
DateTime DateTime::__construct([string $time = \"now\" [, DateTimeZone $timezone = ``]])
     Returns new DateTime object
DateTime DateTime::__set_state(array $array)
     The __set_state handler
DateTime DateTime::__wakeup()
     The __wakeup handler
DateTimeZone DateTime::getTimezone(DateTime $object)
     Return time zone relative to given DateTime
DateTimeZone DateTimeZone::__construct(string $timezone)
     Creates new DateTimeZone object
 date_add()
     Alias of DateTime::add
 date_create()
     Alias of DateTime::__construct
 date_create_from_format()
     Alias of DateTime::createFromFormat
 date_date_set()
     Alias of DateTime::setDate
 date_diff()
     Alias of DateTime::diff
 date_format()
     Alias of DateTime::format
 date_get_last_errors()
     Alias of DateTime::getLastErrors
 date_interval_create_from_date_string()
     Alias of DateInterval::createFromDateString
 date_interval_format()
     Alias of DateInterval::format
 date_isodate_set()
     Alias of DateTime::setISODate
 date_modify()
     Alias of DateTime::modify
 date_offset_get()
     Alias of DateTime::getOffset
 date_sub()
     Alias of DateTime::sub
 date_timestamp_get()
     Alias of DateTime::getTimestamp
 date_timestamp_set()
     Alias of DateTime::setTimestamp
 date_timezone_get()
     Alias of DateTime::getTimezone
 date_timezone_set()
     Alias of DateTime::setTimezone
 date_time_set()
     Alias of DateTime::setTime
 die()
     Equivalent to exit
 DirectoryIterator::__construct(string $path)
     Constructs a new directory iterator from a path
DirectoryIterator DirectoryIterator::current()
     Return the current DirectoryIterator item.
 diskfreespace()
     Alias of disk_free_space
 dns_check_record()
     Alias of checkdnsrr
 dns_get_mx()
     Alias of getmxrr
 DOMAttr::__construct(string $name [, string $value = ``])
     Creates a new DOMAttr object
DOMAttr DOMDocument::createAttribute(string $name)
     Create new attribute
DOMAttr DOMDocument::createAttributeNS(string $namespaceURI, string $qualifiedName)
     Create new attribute node with an associated namespace
DOMAttr DOMElement::getAttributeNode(string $name)
     Returns attribute node
DOMAttr DOMElement::getAttributeNodeNS(string $namespaceURI, string $localName)
     Returns attribute node
DOMAttr DOMElement::setAttribute(string $name, string $value)
     Adds new attribute
DOMAttr DOMElement::setAttributeNode(DOMAttr $attr)
     Adds new attribute node to element
DOMAttr DOMElement::setAttributeNodeNS(DOMAttr $attr)
     Adds new attribute node to element
DomAttribute DomElement::get_attribute_node(string $name)
     Returns the node of the given attribute
DomAttribute DomElement::set_attribute(string $name, string $value)
     Sets the value of an attribute
DOMCDATASection DOMDocument::createCDATASection(string $data)
     Create new cdata node
 DOMComment::__construct([string $value = ``])
     Creates a new DOMComment object
DOMComment DOMDocument::createComment(string $data)
     Create new comment node
 DomDocument.xinclude()
     Substitutes XIncludes in a DomDocument Object
 DomDocument::add_root()
     Adds a root node [deprecated]
 DomDocument::create_attribute()
     Create new attribute
 DomDocument::create_cdata_section()
     Create new cdata node
 DomDocument::create_comment()
     Create new comment node
 DomDocument::create_element()
     Create new element node
 DomDocument::create_element_ns()
     Create new element node with an associated namespace
 DomDocument::create_entity_reference()
     Create an entity reference
 DomDocument::create_processing_instruction()
     Creates new PI node
 DomDocument::create_text_node()
     Create new text node
 DomDocument::doctype()
     Returns the document type
 DomDocument::document_element()
     Returns root element node
 DomDocument::dump_file()
     Dumps the internal XML tree back into a file
 DomDocument::dump_mem()
     Dumps the internal XML tree back into a string
 DomDocument::get_elements_by_tagname()
     Returns array with nodes with given tagname in document or empty array, if not found
 DomDocument::get_element_by_id()
     Searches for an element with a certain id
 DomDocument::html_dump_mem()
     Dumps the internal XML tree back into a string as HTML
 DomDocument::xinclude()
     Substitutes XIncludes in a DomDocument Object
 DOMDocument::__construct([string $version = `` [, string $encoding = ``]])
     Creates a new DOMDocument object
DOMDocument DOMImplementation::createDocument([string $namespaceURI = `` [, string $qualifiedName = `` [, DOMDocumentType $doctype = ``]]])
     Creates a DOMDocument object of the specified type with its document element
DomDocument domxml_new_doc(string $version)
     Creates new empty XML document
DomDocument domxml_open_file(string $filename [, int $mode = `` [, array $error = ``]])
     Creates a DOM object from an XML file
DomDocument domxml_open_mem(string $str [, int $mode = `` [, array $error = ``]])
     Creates a DOM object of an XML document
DomDocument domxml_xmltree(string $str)
     Creates a tree of PHP objects from an XML document
DomDocument DomXsltStylesheet::process(DomDocument $xml_doc [, array $xslt_params = `` [, bool $is_xpath_param = `` [, string $profile_filename = ``]]])
     Applies the XSLT-Transformation on a DomDocument Object
DOMDocumentFragment DOMDocument::createDocumentFragment()
     Create new document fragment
DOMDocumentType DOMImplementation::createDocumentType([string $qualifiedName = `` [, string $publicId = `` [, string $systemId = ``]]])
     Creates an empty DOMDocumentType object
DOMDocument XSLTProcessor::transformToDoc(DOMNode $doc)
     Transform to a DOMDocument
 DOMElement::__construct(string $name [, string $value = `` [, string $namespaceURI = ``]])
     Creates a new DOMElement object
DOMElement DOMDocument::createElement(string $name [, string $value = ``])
     Create new element node
DOMElement DOMDocument::createElementNS(string $namespaceURI, string $qualifiedName [, string $value = ``])
     Create new element node with an associated namespace
DOMElement DOMDocument::getElementById(string $elementId)
     Searches for an element with a certain id
DOMElement dom_import_simplexml(SimpleXMLElement $node)
     Gets a DOMElement object from a   SimpleXMLElement object
 DOMEntityReference::__construct(string $name)
     Creates a new DOMEntityReference object
DOMEntityReference DOMDocument::createEntityReference(string $name)
     Create new entity reference node
 DOMImplementation::__construct()
     Creates a new DOMImplementation object
 DomNode::append_sibling()
     Adds new sibling to a node
 DomNode::attributes()
     Returns list of attributes
 DomNode::child_nodes()
     Returns children of node
 DomNode::clone_node()
     Clones a node
 DomNode::dump_node()
     Dumps a single node
 DomNode::first_child()
     Returns first child of node
 DomNode::get_content()
     Gets content of node
 DomNode::has_attributes()
     Checks if node has attributes
 DomNode::has_child_nodes()
     Checks if node has children
 DomNode::insert_before()
     Inserts new node as child
 DomNode::is_blank_node()
     Checks if node is blank
 DomNode::last_child()
     Returns last child of node
 DomNode::next_sibling()
     Returns the next sibling of node
 DomNode::node_name()
     Returns name of node
 DomNode::node_type()
     Returns type of node
 DomNode::node_value()
     Returns value of a node
 DomNode::owner_document()
     Returns the document this node belongs to
 DomNode::parent_node()
     Returns the parent of the node
 DomNode::prefix()
     Returns name space prefix of node
 DomNode::previous_sibling()
     Returns the previous sibling of node
 DomNode::remove_child()
     Removes child from list of children
 DomNode::replace_child()
     Replaces a child
 DomNode::replace_node()
     Replaces node
 DomNode::set_content()
     Sets content of node
 DomNode::set_name()
     Sets name of node
 DomNode::set_namespace()
     Sets namespace of a node
 DomNode::unlink_node()
     Deletes node
DOMNode DOMDocument::importNode(DOMNode $importedNode [, bool $deep = ``])
     Import node into current document
DomNode DomElement::set_attribute_node(DomNode $attr)
     Adds new attribute
DOMNode DOMNamedNodeMap::getNamedItem(string $name)
     Retrieves a node specified by name
DOMNode DOMNamedNodeMap::getNamedItemNS(string $namespaceURI, string $localName)
     Retrieves a node specified by local name and namespace URI
DOMNode DOMNamedNodeMap::item(int $index)
     Retrieves a node specified by index
DOMNode DOMNode::appendChild(DOMNode $newnode)
     Adds new child at the end of the children
DOMNode DomNode::append_child(DOMNode $newnode)
     Adds a new child at the end of the children
DOMNode DOMNode::cloneNode([bool $deep = ``])
     Clones a node
DOMNode DOMNode::insertBefore(DOMNode $newnode [, DOMNode $refnode = ``])
     Adds a new child before a reference node
DOMNode DOMNode::removeChild(DOMNode $oldnode)
     Removes child from list of children
DOMNode DOMNode::replaceChild(DOMNode $newnode, DOMNode $oldnode)
     Replaces a child
DOMNode DOMNodelist::item(int $index)
     Retrieves a node specified by index
DOMNodeList DOMDocument::getElementsByTagName(string $name)
     Searches for all elements with given tag name
DOMNodeList DOMDocument::getElementsByTagNameNS(string $namespaceURI, string $localName)
     Searches for all elements with given tag name in specified namespace
DOMNodeList DOMElement::getElementsByTagName(string $name)
     Gets elements by tagname
DOMNodeList DOMElement::getElementsByTagNameNS(string $namespaceURI, string $localName)
     Get elements by namespaceURI and localName
DOMNodeList DOMXPath::query(string $expression [, DOMNode $contextnode = `` [, bool $registerNodeNS = true]])
     Evaluates the given XPath expression
DOMNode XMLReader::expand([DOMNode $basenode = ``])
     Returns a copy of the current node as a DOM object
 DOMProcessingInstruction::__construct(string $name [, string $value = ``])
     Creates a new DOMProcessingInstruction object
DOMProcessingInstruction DOMDocument::createProcessingInstruction(string $target [, string $data = ``])
     Creates new PI node
 DOMText::__construct([string $value = ``])
     Creates a new DOMText object
DOMText DOMDocument::createTextNode(string $content)
     Create new text node
DOMText DOMText::splitText(int $offset)
     Breaks this node into two nodes at the specified offset
 DOMXPath::__construct(DOMDocument $doc)
     Creates a new DOMXPath object
DomXsltStylesheet domxml_xslt_stylesheet(string $xsl_buf)
     Creates a DomXsltStylesheet object from an XSL document in a string
DomXsltStylesheet domxml_xslt_stylesheet_doc(DomDocument $xsl_doc)
     Creates a DomXsltStylesheet Object from a DomDocument Object
DomXsltStylesheet domxml_xslt_stylesheet_file(string $xsl_file)
     Creates a DomXsltStylesheet Object from an XSL document in a file
 DOTNET()
     DOTNET class
double HttpResponse::getThrottleDelay()
     Get throttle delay
 doubleval()
     Alias of floatval
 fbsql_tablename()
     Alias of fbsql_table_name
 FilesystemIterator::__construct(string $path [, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS])
     Constructs a new filesystem iterator
 FilterIterator::__construct(Iterator $iterator)
     Construct a filterIterator
float acos(float $arg)
     Arc cosine
float acosh(float $arg)
     Inverse hyperbolic cosine
float asin(float $arg)
     Arc sine
float asinh(float $arg)
     Inverse hyperbolic sine
float atan(float $arg)
     Arc tangent
float atan2(float $y, float $x)
     Arc tangent of two variables
float atanh(float $arg)
     Inverse hyperbolic tangent
float bindec(string $binary_string)
     Binary to decimal
float CairoContext::getLineWidth(CairoContext $context)
     The getLineWidth purpose
float CairoContext::getMiterLimit(CairoContext $context)
     The getMiterLimit purpose
float CairoContext::getTolerance(CairoContext $context)
     The getTolerance purpose
float cairo_get_line_width(CairoContext $context)
     The getLineWidth purpose
float cairo_get_miter_limit(CairoContext $context)
     The getMiterLimit purpose
float cairo_get_tolerance(CairoContext $context)
     The getTolerance purpose
float ceil(float $value)
     Round fractions up
float cos(float $arg)
     Cosine
float cosh(float $arg)
     Hyperbolic cosine
float deg2rad(float $number)
     Converts the number in degrees to the radian equivalent
float disk_free_space(string $directory)
     Returns available space on filesystem or disk partition
float disk_total_space(string $directory)
     Returns the total size of a filesystem or disk partition
float exp(float $arg)
     Calculates the exponent of e
float expm1(float $arg)
     Returns exp(number) - 1, computed in a way that is accurate even   when the value of number is close to zero
float floatval(mixed $var)
     Get float value of a variable
float floor(float $value)
     Round fractions down
float fmod(float $x, float $y)
     Returns the floating point remainder (modulo) of the division  of the arguments
float Gmagick::getimagegamma()
     Gets the image gamma
float GmagickDraw::getfillopacity()
     Returns the opacity used when drawing
float GmagickDraw::getfontsize()
     Returns the font pointsize
float GmagickDraw::getstrokeopacity()
     Returns the opacity of stroked object outlines
float GmagickDraw::getstrokewidth()
     Returns the width of the stroke used to draw object outlines
float GmagickPixel::getcolorvalue(int $color)
     Gets the normalized value of the provided color channel
float HaruPage::getCharSpace()
     Get the current value of character spacing
float HaruPage::getCurrentFontSize()
     Get the current font size
float HaruPage::getFlatness()
     Get the flatness of the page
float HaruPage::getGrayFill()
     Get the current filling color
float HaruPage::getGrayStroke()
     Get the current stroking color
float HaruPage::getHeight()
     Get the height of the page
float HaruPage::getHorizontalScaling()
     Get the current value of horizontal scaling
float HaruPage::getLineWidth()
     Get the current line width
float HaruPage::getMiterLimit()
     Get the value of miter limit
float HaruPage::getTextLeading()
     Get the current value of line spacing
float HaruPage::getTextRise()
     Get the current value of text rising
float HaruPage::getTextWidth(string $text)
     Get the width of the text using current fontsize, character spacing and word spacing
float HaruPage::getWidth()
     Get the width of the page
float HaruPage::getWordSpace()
     Get the current value of word spacing
float hypot(float $x, float $y)
     Calculate the length of the hypotenuse of a right-angle triangle
float Imagick::getImageChannelDistortion(Imagick $reference, int $channel, int $metric)
     Compares image channels of an image to a reconstructed image
float Imagick::getImageChannelDistortions(Imagick $reference, int $metric [, int $channel = Imagick::CHANNEL_DEFAULT])
     Gets channel distortions
float Imagick::getImageDistortion(MagickWand $reference, int $metric)
     Compares an image to a reconstructed image
float Imagick::getImageGamma()
     Gets the image gamma
float Imagick::getImageTotalInkDensity()
     Gets the image total ink density
float Imagick::getPointSize()
     Gets point size
float ImagickDraw::getFillOpacity()
     Returns the opacity used when drawing
float ImagickDraw::getFontSize()
     Returns the font pointsize
float ImagickDraw::getStrokeDashOffset()
     Returns the offset into the dash pattern to start the dash
float ImagickDraw::getStrokeOpacity()
     Returns the opacity of stroked object outlines
float ImagickDraw::getStrokeWidth()
     Returns the width of the stroke used to draw object outlines
float ImagickPixel::getColorValue(int $color)
     Gets the normalized value of the provided color channel
float lcg_value()
     Combined linear congruential generator
float log(float $arg [, float $base = M_E])
     Natural logarithm
float log1p(float $number)
     Returns log(1 + number), computed in a way that is accurate even when   the value of number is close to zero
float log10(float $arg)
     Base-10 logarithm
float notes_version(string $database_name)
     Get the version Lotus Notes
float NumberFormatter::parseCurrency(string $value, string $currency [, int $position = ``, NumberFormatter $fmt])
     Parse a currency number
float numfmt_parse_currency(string $value, string $currency [, int $position = ``, NumberFormatter $fmt])
     Parse a currency number
float PDF_get_pdi_value(resource $p, string $key, int $doc, int $page, int $reserved)
     Get PDI numerical parameter [deprecated]
float PDF_get_value(resource $p, string $key, float $modifier)
     Get numerical parameter
float PDF_info_font(resource $pdfdoc, int $font, string $keyword, string $optlist)
     Query detailed information about a loaded font
float PDF_info_matchbox(resource $pdfdoc, string $boxname, int $num, string $keyword)
     Query matchbox information
float PDF_info_table(resource $pdfdoc, int $table, string $keyword)
     Retrieve table information
float PDF_info_textflow(resource $pdfdoc, int $textflow, string $keyword)
     Query textflow state
float PDF_info_textline(resource $pdfdoc, string $text, string $keyword, string $optlist)
     Perform textline formatting and query metrics
float PDF_pcos_get_number(resource $p, int $doc, string $path)
     Get value of pCOS path with type number or boolean
float PDF_stringwidth(resource $p, string $text, int $font, float $fontsize)
     Return width of text
float pi()
     Get value of pi
float pow(number $base, number $exp)
     Exponential expression
float ps_get_value(resource $psdoc, string $name [, float $modifier = ``])
     Gets certain values
float ps_stringwidth(resource $psdoc, string $text [, int $fontid = `` [, float $size = 0.0]])
     Gets width of a string
float ps_symbol_width(resource $psdoc, int $ord [, int $fontid = `` [, float $size = 0.0]])
     Gets width of a glyph
float px_get_value(resource $pxdoc, string $name)
     Gets a value
float rad2deg(float $number)
     Converts the radian number to the equivalent number in degrees
float round(float $val [, int $precision = `` [, int $mode = PHP_ROUND_HALF_UP]])
     Rounds a float
float sin(float $arg)
     Sine
float sinh(float $arg)
     Hyperbolic sine
float SolrInputDocument::getBoost()
     Retrieves the current boost value for the document
float SolrInputDocument::getFieldBoost(string $fieldName)
     Retrieves the boost value for a particular field
float SolrQuery::getHighlightRegexSlop()
     Returns the deviation factor from the ideal fragment size
float sqrt(float $arg)
     Square root
float stats_absolute_deviation(array $a)
     Returns the absolute deviation of an array of values
float stats_cdf_beta(float $par1, float $par2, float $par3, int $which)
     CDF function for BETA Distribution. Calculates any one parameter of the beta distribution given values for the others.
float stats_cdf_binomial(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the binomial distribution given values for the others.
float stats_cdf_cauchy(float $par1, float $par2, float $par3, int $which)
     Not documented
float stats_cdf_chisquare(float $par1, float $par2, int $which)
     Calculates any one parameter of the chi-square distribution given values for the others.
float stats_cdf_exponential(float $par1, float $par2, int $which)
     Not documented
float stats_cdf_f(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the F distribution given values for the others.
float stats_cdf_gamma(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the gamma distribution given values for the others.
float stats_cdf_laplace(float $par1, float $par2, float $par3, int $which)
     Not documented
float stats_cdf_logistic(float $par1, float $par2, float $par3, int $which)
     Not documented
float stats_cdf_negative_binomial(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the negative binomial distribution given values for the others.
float stats_cdf_noncentral_chisquare(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the non-central chi-square distribution given values for the others.
float stats_cdf_noncentral_f(float $par1, float $par2, float $par3, float $par4, int $which)
     Calculates any one parameter of the Non-central F distribution given values for the others.
float stats_cdf_poisson(float $par1, float $par2, int $which)
     Calculates any one parameter of the Poisson distribution given values for the others.
float stats_cdf_t(float $par1, float $par2, int $which)
     Calculates any one parameter of the T distribution given values for the others.
float stats_cdf_uniform(float $par1, float $par2, float $par3, int $which)
     Not documented
float stats_cdf_weibull(float $par1, float $par2, float $par3, int $which)
     Not documented
float stats_covariance(array $a, array $b)
     Computes the covariance of two data sets
float stats_dens_beta(float $x, float $a, float $b)
     Not documented
float stats_dens_cauchy(float $x, float $ave, float $stdev)
     Not documented
float stats_dens_chisquare(float $x, float $dfr)
     Not documented
float stats_dens_exponential(float $x, float $scale)
     Not documented
float stats_dens_f(float $x, float $dfr1, float $dfr2)
     
float stats_dens_gamma(float $x, float $shape, float $scale)
     Not documented
float stats_dens_laplace(float $x, float $ave, float $stdev)
     Not documented
float stats_dens_logistic(float $x, float $ave, float $stdev)
     Not documented
float stats_dens_negative_binomial(float $x, float $n, float $pi)
     Not documented
float stats_dens_normal(float $x, float $ave, float $stdev)
     Not documented
float stats_dens_pmf_binomial(float $x, float $n, float $pi)
     Not documented
float stats_dens_pmf_hypergeometric(float $n1, float $n2, float $N1, float $N2)
     
float stats_dens_pmf_poisson(float $x, float $lb)
     Not documented
float stats_dens_t(float $x, float $dfr)
     Not documented
float stats_dens_weibull(float $x, float $a, float $b)
     Not documented
float stats_den_uniform(float $x, float $a, float $b)
     Not documented
float stats_kurtosis(array $a)
     Computes the kurtosis of the data in the array
float stats_rand_gen_beta(float $a, float $b)
     Generates beta random deviate
float stats_rand_gen_chisquare(float $df)
     Generates random deviate from the distribution of a chisquare with \"df\" degrees of freedom random variable.
float stats_rand_gen_exponential(float $av)
     Generates a single random deviate from an exponential distribution with mean \"av\"
float stats_rand_gen_f(float $dfn, float $dfd)
     Generates a random deviate
float stats_rand_gen_funiform(float $low, float $high)
     Generates uniform float between low (exclusive) and high (exclusive)
float stats_rand_gen_gamma(float $a, float $r)
     Generates random deviates from a gamma distribution
float stats_rand_gen_noncenral_chisquare(float $df, float $xnonc)
     Generates random deviate from the distribution of a noncentral chisquare with \"df\" degrees of freedom and noncentrality parameter \"xnonc\". d must be >= 1.0, xnonc must >= 0.0
float stats_rand_gen_noncentral_f(float $dfn, float $dfd, float $xnonc)
     Generates a random deviate from the noncentral F (variance ratio) distribution with \"dfn\" degrees of freedom in the numerator, and \"dfd\" degrees of freedom in the denominator, and noncentrality parameter \"xnonc\". Method : directly generates ratio of noncentral numerator chisquare variate to central denominator chisquare variate.
float stats_rand_gen_noncentral_t(float $df, float $xnonc)
     Generates a single random deviate from a noncentral T distribution
float stats_rand_gen_normal(float $av, float $sd)
     Generates a single random deviate from a normal distribution with mean, av, and standard deviation, sd (sd >= 0). Method : Renames SNORM from TOMS as slightly modified by BWB to use RANF instead of SUNIF.
float stats_rand_gen_t(float $df)
     Generates a single random deviate from a T distribution
float stats_rand_ranf()
     Returns a random floating point number from a uniform distribution over 0 - 1 (endpoints of this interval are not returned) using the current generator
float stats_skew(array $a)
     Computes the skewness of the data in the array
float stats_standard_deviation(array $a [, bool $sample = false])
     Returns the standard deviation
float stats_stat_binomial_coef(int $x, int $n)
     Not documented
float stats_stat_correlation(array $arr1, array $arr2)
     Not documented
float stats_stat_gennch(int $n)
     Not documented
float stats_stat_independent_t(array $arr1, array $arr2)
     Not documented
float stats_stat_innerproduct(array $arr1, array $arr2)
     
float stats_stat_noncentral_t(float $par1, float $par2, float $par3, int $which)
     Calculates any one parameter of the noncentral t distribution give values for the others.
float stats_stat_paired_t(array $arr1, array $arr2)
     Not documented
float stats_stat_percentile(float $df, float $xnonc)
     Not documented
float stats_stat_powersum(array $arr, float $power)
     Not documented
float stats_variance(array $a [, bool $sample = false])
     Returns the population variance
float SWFBitmap::getHeight()
     Returns the bitmap`s height
float SWFBitmap::getWidth()
     Returns the bitmap`s width
float SWFDisplayItem::getRot()
     
float SWFDisplayItem::getX()
     
float SWFDisplayItem::getXScale()
     
float SWFDisplayItem::getXSkew()
     
float SWFDisplayItem::getY()
     
float SWFDisplayItem::getYScale()
     
float SWFDisplayItem::getYSkew()
     
float SWFFont::getAscent()
     Returns the ascent of the font, or 0 if not available
float SWFFont::getDescent()
     Returns the descent of the font, or 0 if not available
float SWFFont::getLeading()
     Returns the leading of the font, or 0 if not available
float SWFFont::getUTF8Width(string $string)
     Calculates the width of the given string in this font at full height
float SWFFont::getWidth(string $string)
     Returns the string`s width
float SWFText::getAscent()
     Returns the ascent of the current font at its current size, or 0 if not available
float SWFText::getDescent()
     Returns the descent of the current font at its current size, or 0 if not available
float SWFText::getLeading()
     Returns the leading of the current font at its current size, or 0 if not available
float SWFText::getUTF8Width(string $string)
     calculates the width of the given string in this text objects current font and size
float SWFText::getWidth(string $string)
     Computes string`s width
float swf_textwidth(string $str)
     Get the width of a string
float tan(float $arg)
     Tangent
float tanh(float $arg)
     Hyperbolic tangent
 fputs()
     Alias of fwrite
 ftp_quit()
     Alias of ftp_close
 GearmanClient::__construct()
     Create a GearmanClient instance
GearmanClient GearmanClient::clone()
     Create a copy of a GearmanClient object
 GearmanJob::__construct()
     Create a GearmanJob instance
 GearmanTask::__construct()
     Create a GearmanTask instance
GearmanTask GearmanClient::addTask(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a task to be run in parallel
GearmanTask GearmanClient::addTaskBackground(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a background task to be run in parallel
GearmanTask GearmanClient::addTaskHigh(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a high priority task to run in parallel
GearmanTask GearmanClient::addTaskHighBackground(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a high priority background task to be run in parallel
GearmanTask GearmanClient::addTaskLow(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a low priority task to run in parallel
GearmanTask GearmanClient::addTaskLowBackground(string $function_name, string $workload [, mixed $context = `` [, string $unique = ``]])
     Add a low priority background task to be run in parallel
GearmanTask GearmanClient::addTaskStatus(string $job_handle [, string $context = ``])
     Add a task to get status
GearmanTask GearmanTask::create()
     Create a task (deprecated)
 GearmanWorker::__construct()
     Create a GearmanWorker instance
 get_required_files()
     Alias of get_included_files
 GlobIterator::__construct(string $path [, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO])
     Construct a directory using glob
 Gmagick::__construct([string $filename = ``])
     The Gmagick constructor
GmagickDraw GmagickDraw::annotate(float $x, float $y, string $text)
     Draws text on the image
GmagickDraw GmagickDraw::arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed)
     Draws an arc
GmagickDraw GmagickDraw::bezier(array $coordinate_array)
     Draws a bezier curve
GmagickDraw GmagickDraw::ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end)
     Draws an ellipse on the image
GmagickDraw GmagickDraw::line(float $sx, float $sy, float $ex, float $ey)
     The line purpose
GmagickDraw GmagickDraw::point(float $x, float $y)
     Draws a point
GmagickDraw GmagickDraw::polygon(array $coordinates)
     Draws a polygon
GmagickDraw GmagickDraw::polyline(array $coordinate_array)
     Draws a polyline
GmagickDraw GmagickDraw::rectangle(float $x1, float $y1, float $x2, float $y2)
     Draws a rectangle
GmagickDraw GmagickDraw::rotate(float $degrees)
     Applies the specified rotation to the current coordinate space
GmagickDraw GmagickDraw::roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry)
     Draws a rounded rectangle
GmagickDraw GmagickDraw::scale(float $x, float $y)
     Adjusts the scaling factor
GmagickDraw GmagickDraw::setfillcolor(string $color)
     Sets the fill color to be used for drawing filled objects.
GmagickDraw GmagickDraw::setfillopacity(float $fill_opacity)
     The setfillopacity purpose
GmagickDraw GmagickDraw::setfont(string $font)
     Sets the fully-specified font to use when annotating with text.
GmagickDraw GmagickDraw::setfontsize(float $pointsize)
     Sets the font pointsize to use when annotating with text.
GmagickDraw GmagickDraw::setfontstyle(int $style)
     Sets the font style to use when annotating with text
GmagickDraw GmagickDraw::setfontweight(int $weight)
     Sets the font weight
GmagickDraw GmagickDraw::setstrokecolor(GmagickPixel $color)
     Sets the color used for stroking object outlines.
GmagickDraw GmagickDraw::setstrokeopacity(float $stroke_opacity)
     Specifies the opacity of stroked object outlines.
GmagickDraw GmagickDraw::setstrokewidth(float $width)
     Sets the width of the stroke used to draw object outlines.
GmagickDraw GmagickDraw::settextdecoration(int $decoration)
     Specifies a decoration
GmagickDraw GmagickDraw::settextencoding(string $encoding)
     Specifies specifies the text code set
Gmagick Gmagick::addimage(Gmagick $Gmagick)
     Adds new image to Gmagick object image list
Gmagick Gmagick::addnoiseimage(int $NOISE)
     Adds random noise to the image
Gmagick Gmagick::annotateimage(GmagickDraw $GmagickDraw, float $x, float $y, float $angle, string $text)
     Annotates an image with text
Gmagick Gmagick::blurimage(float $radius, float $sigma [, int $channel = ``])
     Adds blur filter to image
Gmagick Gmagick::borderimage(GmagickPixel $color, int $width, int $height)
     Surrounds the image with a border
Gmagick Gmagick::charcoalimage(float $radius, float $sigma)
     Simulates a charcoal drawing
Gmagick Gmagick::chopimage(int $width, int $height, int $x, int $y)
     Removes a region of an image and trims
Gmagick Gmagick::clear()
     Clears all resources associated to Gmagick object
Gmagick Gmagick::commentimage(string $comment)
     Adds a comment to your image
Gmagick Gmagick::compositeimage(Gmagick $source, int $COMPOSE, int $x, int $y)
     Composite one image onto another
Gmagick Gmagick::cropimage(int $width, int $height, int $x, int $y)
     Extracts a region of the image
Gmagick Gmagick::cropthumbnailimage(int $width, int $height)
     Creates a crop thumbnail
Gmagick Gmagick::current()
     The current purpose
Gmagick Gmagick::cyclecolormapimage(int $displace)
     Displaces an image`s colormap
Gmagick Gmagick::despeckleimage()
     The despeckleimage purpose
Gmagick Gmagick::destroy()
     The destroy purpose
Gmagick Gmagick::drawimage(GmagickDraw $GmagickDraw)
     Renders the GmagickDraw object on the current image
Gmagick Gmagick::edgeimage(float $radius)
     Enhance edges within the image
Gmagick Gmagick::embossimage(float $radius, float $sigma)
     Returns a grayscale image with a three-dimensional effect
Gmagick Gmagick::enhanceimage()
     Improves the quality of a noisy image
Gmagick Gmagick::equalizeimage()
     Equalizes the image histogram
Gmagick Gmagick::flipimage()
     Creates a vertical mirror image
Gmagick Gmagick::flopimage()
     The flopimage purpose
Gmagick Gmagick::frameimage(GmagickPixel $color, int $width, int $height, int $inner_bevel, int $outer_bevel)
     Adds a simulated three-dimensional border
Gmagick Gmagick::gammaimage(float $gamma)
     Gamma-corrects an image
Gmagick Gmagick::mapimage(gmagick $gmagick, bool $dither)
     Replaces the colors of an image with the closest color from a reference image.
Gmagick Gmagick::rotateimage(mixed $color, float $degrees)
     Rotates an image
Gmagick Gmagick::scaleimage(int $width, int $height [, bool $fit = false])
     Scales the size of an image
Gmagick Gmagick::separateimagechannel(int $channel)
     Separates a channel from the image
Gmagick Gmagick::setfilename(string $filename)
     Sets the filename before you read or write the image
Gmagick Gmagick::setimagebackgroundcolor(GmagickPixel $color)
     Sets the image background color.
Gmagick Gmagick::setimageblueprimary(float $x, float $y)
     Sets the image chromaticity blue primary point.
Gmagick Gmagick::setimagebordercolor(GmagickPixel $color)
     Sets the image border color.
Gmagick Gmagick::setimagechanneldepth(int $channel, int $depth)
     Sets the depth of a particular image channel
Gmagick Gmagick::setimagecolorspace(int $colorspace)
     Sets the image colorspace
Gmagick Gmagick::setimagecompose(int $composite)
     Sets the image composite operator
Gmagick Gmagick::setimagedelay(int $delay)
     Sets the image delay
Gmagick Gmagick::setimagedepth(int $depth)
     Sets the image depth
Gmagick Gmagick::setimagedispose(int $disposeType)
     Sets the image disposal method
Gmagick Gmagick::setimagefilename(string $filename)
     Sets the filename of a particular image in a sequence
Gmagick Gmagick::setimageformat(string $imageFormat)
     Sets the format of a particular image
Gmagick Gmagick::setimagegamma(float $gamma)
     Sets the image gamma
Gmagick Gmagick::setimagegreenprimary(float $x, float $y)
     TSets the image chromaticity green primary point.
Gmagick Gmagick::setimageindex(int $index)
     Set the iterator to the position in the image list specified with the index parameter
Gmagick Gmagick::setimageinterlacescheme(int $interlace)
     Sets the interlace scheme of the image.
Gmagick Gmagick::setimageiterations(int $iterations)
     Sets the image iterations.
Gmagick Gmagick::setimageprofile(string $name, string $profile)
     Adds a named profile to the Gmagick object
Gmagick Gmagick::setimageredprimary(float $x, float $y)
     Sets the image chromaticity red primary point.
Gmagick Gmagick::setimagerenderingintent(int $rendering_intent)
     Sets the image rendering intent
Gmagick Gmagick::setimageresolution(float $xResolution, float $yResolution)
     Sets the image resolution
Gmagick Gmagick::setimagescene(int $scene)
     Sets the image scene
Gmagick Gmagick::setimagetype(int $imgType)
     Sets the image type
Gmagick Gmagick::setimageunits(int $resolution)
     Sets the image units of resolution.
Gmagick Gmagick::setimagewhitepoint(float $x, float $y)
     Sets the image chromaticity white point.
Gmagick Gmagick::setsamplingfactors(array $factors)
     Sets the image sampling factors.
Gmagick Gmagick::setsize(int $columns, int $rows)
     Sets the size of the Gmagick object
Gmagick Gmagick::shearimage(mixed $color, float $xShear, float $yShear)
     Creating a parallelogram
Gmagick Gmagick::solarizeimage(int $threshold)
     Applies a solarizing effect to the image
Gmagick Gmagick::spreadimage(float $radius)
     Randomly displaces each pixel in a block
Gmagick Gmagick::stripimage()
     Strips an image of all profiles and comments
Gmagick Gmagick::swirlimage(float $degrees)
     Swirls the pixels about the center of the image
Gmagick Gmagick::thumbnailimage(int $width, int $height [, bool $fit = false])
     Changes the size of an image
Gmagick Gmagick::trimimage(float $fuzz)
     Remove edges from the image
Gmagick Gmagick::writeimage(string $filename [, bool $all_frames = false])
     Writes an image to the specified filename
 GmagickPixel::__construct([string $color = ``])
     The GmagickPixel constructor
GmagickPixel GmagickPixel::setcolor(string $color)
     Sets the color
GmagickPixel GmagickPixel::setcolorvalue(int $color, float $value)
     Sets the normalized value of one of the channels
 gmp_div()
     Alias of gmp_div_q
 gzputs()
     Alias of gzwrite
HttpDeflateStream HttpDeflateStream::factory([int $flags = `` [, string $class_name = \"HttpDeflateStream\"]])
     HttpDeflateStream class factory
HttpInflateStream HttpInflateStream::factory([int $flags = `` [, string $class_name = \"HttpInflateStream\"]])
     HttpInflateStream class factory
HttpMessage HttpMessage::detach()
     Detach HttpMessage
HttpMessage HttpMessage::factory([string $raw_message = `` [, string $class_name = \"HttpMessage\"]])
     Create HttpMessage from string
HttpMessage HttpMessage::fromEnv(int $message_type [, string $class_name = \"HttpMessage\"])
     Create HttpMessage from environment
HttpMessage HttpMessage::fromString([string $raw_message = `` [, string $class_name = \"HttpMessage\"]])
     Create HttpMessage from string
HttpMessage HttpMessage::getParentMessage()
     Get parent message
HttpMessage HttpMessage::reverse()
     Reverse message chain
HttpMessage HttpRequest::getHistory()
     Get history
HttpMessage HttpRequest::getRequestMessage()
     Get request message
HttpMessage HttpRequest::getResponseMessage()
     Get response message
HttpMessage HttpRequest::send()
     Send request
HttpQueryString HttpQueryString::mod(mixed $params)
     Modifiy query string copy
HttpQueryString HttpQueryString::singleton([bool $global = true])
     HttpQueryString singleton
HttpRequest|HttpResponse HttpMessage::toMessageTypeObject()
     Create HTTP object regarding message type
HW_API hwapi_hgcsp(string $hostname [, int $port = ``])
     Returns object of class hw_api
HW_API_Attribute hw_api_attribute([string $name = `` [, string $value = ``]])
     Creates instance of class hw_api_attribute
HW_API_Content hw_api::content(array $parameter)
     Returns content of an object
hw_api_content hw_api::copy(array $parameter)
     Copies physically
HW_API_Content hw_api_content(string $content, string $mimetype)
     Create new instance of class hw_api_content
hw_api_object hw_api::dbstat(array $parameter)
     Returns statistics about database server
hw_api_object hw_api::dcstat(array $parameter)
     Returns statistics about document cache server
hw_api_object hw_api::dstofsrcanchor(array $parameter)
     Returns destination of a source anchor
hw_api_object hw_api::ftstat(array $parameter)
     Returns statistics about fulltext server
hw_api_object hw_api::hwstat(array $parameter)
     Returns statistics about Hyperwave server
hw_api_object hw_api::insert(array $parameter)
     Inserts a new object
hw_api_object hw_api::insertanchor(array $parameter)
     Inserts a new object of type anchor
hw_api_object hw_api::insertcollection(array $parameter)
     Inserts a new object of type collection
hw_api_object hw_api::insertdocument(array $parameter)
     Inserts a new object of type document
hw_api_object hw_api::object(array $parameter)
     Retrieve attribute information
hw_api_object hw_api::objectbyanchor(array $parameter)
     Returns the object an anchor belongs to
hw_api_object hw_api::replace(array $parameter)
     Replaces an object
hw_api_object hw_api::setcommittedversion(array $parameter)
     Commits version other than last version
hw_api_object hw_api::user(array $parameter)
     Returns the own user object
hw_api_object hw_api_object(array $parameter)
     Creates a new instance of class hw_api_object
HW_API_Reason hw_api_error::reason()
     Returns reason of error
HW_API_Reason hw_api_reason::type()
     Returns type of reason
 idn_to_unicode()
     Alias of idn_to_utf8
ImagickDraw ImagickDraw::clone()
     Makes an exact copy of the specified ImagickDraw object
ImagickDraw ImagickDraw::__construct()
     The ImagickDraw constructor
Imagick Imagick::appendImages(bool $stack)
     Append a set of images
Imagick Imagick::averageImages()
     Average a set of images
Imagick Imagick::clone()
     Makes an exact copy of the Imagick object
Imagick Imagick::coalesceImages()
     Composites a set of images
Imagick Imagick::combineImages(int $channelType)
     Combines one or more images into a single image
Imagick Imagick::compareImageLayers(int $method)
     Returns the maximum bounding region between images
Imagick Imagick::current()
     Returns a reference to the current Imagick object
Imagick Imagick::deconstructImages()
     Returns certain pixel differences between images
Imagick Imagick::flattenImages()
     Merges a sequence of images
Imagick Imagick::fxImage(string $expression [, int $channel = Imagick::CHANNEL_ALL])
     Evaluate expression for each pixel in the image
Imagick Imagick::getImage()
     Returns a new Imagick object
Imagick Imagick::getImageClipMask()
     Gets image clip mask
Imagick Imagick::getImageRegion(int $width, int $height, int $x, int $y)
     Extracts a region of the image
Imagick Imagick::montageImage(ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame)
     Creates a composite image
Imagick Imagick::morphImages(int $number_frames)
     Method morphs a set of images
Imagick Imagick::mosaicImages()
     Forms a mosaic from images
Imagick Imagick::steganoImage(Imagick $watermark_wand, int $offset)
     Hides a digital watermark within the image
Imagick Imagick::transformImage(string $crop, string $geometry)
     Convenience method for setting crop size and the image geometry
Imagick Imagick::__construct([mixed $files = ``])
     The Imagick constructor
ImagickPixel Imagick::getImageBackgroundColor()
     Returns the image background color
ImagickPixel Imagick::getImageBorderColor()
     Returns the image border color
ImagickPixel Imagick::getImageColormapColor(int $index)
     Returns the color of the specified colormap index
ImagickPixel Imagick::getImageMatteColor()
     Returns the image matte color
ImagickPixel Imagick::getImagePixelColor(int $x, int $y)
     Returns the color of the specified pixel
ImagickPixel ImagickDraw::getFillColor()
     Returns the fill color
ImagickPixel ImagickDraw::getStrokeColor()
     Returns the color used for stroking object outlines
ImagickPixel ImagickDraw::getTextUnderColor()
     Returns the text under color
ImagickPixel ImagickPixel::__construct([string $color = ``])
     The ImagickPixel constructor
ImagickPixelIterator Imagick::getPixelIterator()
     Returns a MagickPixelIterator
ImagickPixelIterator Imagick::getPixelRegionIterator(int $x, int $y, int $columns, int $rows)
     Get an ImagickPixelIterator for an image section
ImagickPixelIterator ImagickPixelIterator::__construct(Imagick $wand)
     The ImagickPixelIterator constructor
 imap_header()
     Alias of imap_headerinfo
 imap_listmailbox()
     Alias of imap_list
 imap_listsubscribed()
     Alias of imap_lsub
 imap_scanmailbox()
     Alias of imap_listscan
 InfiniteIterator::__construct(Iterator $iterator)
     Constructs an InfiniteIterator
 ini_alter()
     Alias of ini_set
int APCIterator::getTotalCount()
     Get total count
int APCIterator::getTotalHits()
     Get total cache hits
int APCIterator::getTotalSize()
     Get total cache size
int apc_bin_dumpfile(array $files, array $user_vars, string $filename [, int $flags = `` [, resource $context = ``]])
     Output a binary dump of cached files and user variables to a file
int apc_dec(string $key [, int $step = 1 [, bool $success = ``]])
     Decrease a stored number
int apc_inc(string $key [, int $step = 1 [, bool $success = ``]])
     Increase a stored number
int ArrayObject::count()
     Get the number of public properties in the ArrayObject
int ArrayObject::getFlags()
     Gets the behavior flags.
int array_push(array $array, mixed $var [, mixed $... = ``])
     Push one or more elements onto the end of array
int array_unshift(array $array, mixed $var [, mixed $... = ``])
     Prepend one or more elements to the beginning of an array
int bccomp(string $left_operand, string $right_operand [, int $scale = ``])
     Compare two arbitrary precision numbers
int bzclose(resource $bz)
     Close a bzip2 file
int bzerrno(resource $bz)
     Returns a bzip2 error number
int bzflush(resource $bz)
     Force a write of all buffered data
int bzwrite(resource $bz, string $data [, int $length = ``])
     Binary safe bzip2 file write
int CachingIterator::count()
     The number of elements in the iterator
int Cairo::version()
     Retrives cairo`s library version
int CairoContext::getAntialias(CairoContext $context)
     Retrives the current antialias mode
int CairoContext::getDashCount(CairoContext $context)
     The getDashCount purpose
int CairoContext::getFillRule(CairoContext $context)
     The getFillRule purpose
int CairoContext::getLineCap(CairoContext $context)
     The getLineCap purpose
int CairoContext::getLineJoin(CairoContext $context)
     The getLineJoin purpose
int CairoContext::getOperator(CairoContext $context)
     The getOperator purpose
int CairoContext::status(CairoContext $context)
     The status purpose
int CairoFontFace::getType()
     Retrieves the font face type
int CairoFontFace::status(CairoFontFace $fontface)
     Check for CairoFontFace errors
int CairoFontOptions::getAntialias(CairoContext $context)
     The getAntialias purpose
int CairoFontOptions::getHintMetrics()
     The getHintMetrics purpose
int CairoFontOptions::getHintStyle()
     The getHintStyle purpose
int CairoFontOptions::getSubpixelOrder()
     The getSubpixelOrder purpose
int CairoFontOptions::hash()
     The hash purpose
int CairoFontOptions::status(CairoContext $context)
     The status purpose
int CairoFormat::strideForWidth(int $format, int $width)
     Provides an appropiate stride to use
int CairoGradientPattern::getColorStopCount()
     The getColorStopCount purpose
int CairoGradientPattern::getExtend()
     The getExtend purpose
int CairoImageSurface::getFormat()
     Get the image format
int CairoImageSurface::getHeight()
     Retrieves the height of the CairoImageSurface
int CairoImageSurface::getStride()
     The getStride purpose
int CairoImageSurface::getWidth()
     Retrieves the width of the CairoImageSurface
int CairoPattern::getType()
     The getType purpose
int CairoPattern::status(CairoContext $context)
     The status purpose
int CairoScaledFont::getType()
     The getType purpose
int CairoScaledFont::status(CairoContext $context)
     The status purpose
int CairoSurface::getContent()
     The getContent purpose
int CairoSurface::getType()
     The getType purpose
int CairoSurface::status(CairoContext $context)
     The status purpose
int CairoSurfacePattern::getExtend()
     The getExtend purpose
int CairoSurfacePattern::getFilter()
     The getFilter purpose
int cairo_font_face_get_type(CairoFontFace $fontface)
     Description
int cairo_font_face_status(CairoFontFace $fontface)
     Check for CairoFontFace errors
int cairo_font_face_status(CairoFontFace $fontface)
     Check for CairoFontFace errors
int cairo_font_options_get_antialias(CairoFontOptions $options)
     Description
int cairo_font_options_get_hint_metrics(CairoFontOptions $options)
     Description
int cairo_font_options_get_hint_style(CairoFontOptions $options)
     Description
int cairo_font_options_get_subpixel_order(CairoFontOptions $options)
     Description
int cairo_font_options_hash(CairoFontOptions $options)
     Description
int cairo_font_options_status(CairoFontOptions $options)
     Description
int cairo_format_stride_for_width(int $format, int $width)
     Description
int cairo_get_antialias(CairoContext $context)
     The getAntialias purpose
int cairo_get_antialias(CairoContext $context)
     The getAntialias purpose
int cairo_get_dash_count(CairoContext $context)
     The getDashCount purpose
int cairo_get_fill_rule(CairoContext $context)
     The getFillRule purpose
int cairo_get_line_cap(CairoContext $context)
     The getLineCap purpose
int cairo_get_line_join(CairoContext $context)
     The getLineJoin purpose
int cairo_get_operator(CairoContext $context)
     The getOperator purpose
int cairo_image_surface_get_format(CairoImageSurface $surface)
     Description
int cairo_image_surface_get_height(CairoImageSurface $surface)
     Description
int cairo_image_surface_get_stride(CairoImageSurface $surface)
     Description
int cairo_image_surface_get_width(CairoImageSurface $surface)
     Description
int cairo_pattern_get_color_stop_count(CairoGradientPattern $pattern)
     Description
int cairo_pattern_get_extend(string $pattern)
     Description
int cairo_pattern_get_filter(CairoSurfacePattern $pattern)
     Description
int cairo_pattern_get_type(CairoPattern $pattern)
     Description
int cairo_pattern_status(CairoPattern $pattern)
     Description
int cairo_scaled_font_get_type(CairoScaledFont $scaledfont)
     Description
int cairo_scaled_font_status(CairoScaledFont $scaledfont)
     Description
int cairo_status(CairoContext $context)
     The status purpose
int cairo_status(CairoContext $context)
     The status purpose
int cairo_status(CairoContext $context)
     The status purpose
int cairo_status(CairoContext $context)
     The status purpose
int cairo_status(CairoContext $context)
     The status purpose
int cairo_surface_get_content(CairoSurface $surface)
     Description
int cairo_surface_get_type(CairoSurface $surface)
     Description
int cairo_surface_status(CairoSurface $surface)
     Description
int cairo_version()
     Retrives cairo`s library version
int cal_days_in_month(int $calendar, int $month, int $year)
     Return the number of days in a month for a given year and calendar
int cal_to_jd(int $calendar, int $month, int $day, int $year)
     Converts from a supported calendar to Julian Day Count
int Collator::compare(string $str1, string $str2, Collator $coll)
     Compare two Unicode strings
int Collator::getAttribute(int $attr, Collator $coll)
     Get collation attribute value
int Collator::getErrorCode(Collator $coll)
     Get collator`s last error code
int Collator::getStrength(Collator $coll)
     Get current collation strength
int collator_compare(string $str1, string $str2, Collator $coll)
     Compare two Unicode strings
int collator_get_attribute(int $attr, Collator $coll)
     Get collation attribute value
int collator_get_error_code(Collator $coll)
     Get collator`s last error code
int collator_get_strength(Collator $coll)
     Get current collation strength
int connection_aborted()
     Check whether client disconnected
int connection_status()
     Returns connection status bitfield
int connection_timeout()
     Check if the script timed out
int count(mixed $var [, int $mode = COUNT_NORMAL])
     Count all elements in an array, or properties in an object
int Countable::count()
     Count elements of an object
int crc32(string $str)
     Calculates the crc32 polynomial of a string
int cubrid_affected_rows([resource $req_identifier = ``])
     Return the number of rows affected by the last SQL statement
int cubrid_close_prepare(resource $req_identifier)
     Close the request handle
int cubrid_col_size(resource $conn_identifier, string $oid, string $attr_name)
     Get the number of elements in collection type column using OID
int cubrid_data_seek(resource $req_identifier, int $row_number)
     Move the internal row pointer of the CUBRID result
int cubrid_errno([resource $conn_identifier = ``])
     Return the numerical value of the error message from previous CUBRID operation
int cubrid_error_code()
     Get error code for the most recent function call
int cubrid_error_code_facility()
     Get the facility code of error
int cubrid_field_len(resource $result, int $field_offset)
     Get the maximum length of the specified field
int cubrid_is_instance(resource $conn_identifier, string $oid)
     Check whether the instance pointed by OID exists
int cubrid_load_from_glo(resource $conn_identifier, string $oid, string $file_name)
     Read data from a GLO instance and save it in a file
int cubrid_move_cursor(resource $req_identifier, int $offset [, int $origin = CUBRID_CURSOR_CURRENT])
     Move the cursor in the result
int cubrid_num_cols(resource $req_identifier)
     Return the number of columns in the result set
int cubrid_num_fields(resource $result)
     Return the number of columns in the result set
int cubrid_num_rows(resource $req_identifier)
     Get the number of rows in the result set
int cubrid_put(resource $conn_identifier, string $oid [, string $attr = ``, mixed $value])
     Update a column using OID
int cubrid_save_to_glo(resource $conn_identifier, string $oid, string $file_name)
     Save requested file in a GLO instance
int cubrid_send_glo(resource $conn_identifier, string $oid)
     Read data from glo and send it to std output
int curl_errno(resource $ch)
     Return the last error number
int curl_multi_add_handle(resource $mh, resource $ch)
     Add a normal cURL handle to a cURL multi handle
int curl_multi_exec(resource $mh, int $still_running)
     Run the sub-connections of the current cURL handle
int curl_multi_remove_handle(resource $mh, resource $ch)
     Remove a multi handle from a set of cURL handles
int curl_multi_select(resource $mh [, float $timeout = 1.0])
     Wait for activity on any curl_multi connection
int datefmt_get_calendar(IntlDateFormatter $fmt)
     Get the calendar used for the IntlDateFormatter
int datefmt_get_datetype(IntlDateFormatter $fmt)
     Get the datetype used for the IntlDateFormatter
int datefmt_get_error_code(IntlDateFormatter $fmt)
     Get the error code from last operation
int datefmt_get_timetype(IntlDateFormatter $fmt)
     Get the timetype used for the IntlDateFormatter
int datefmt_parse(string $value [, int $position = ``, IntlDateFormatter $fmt])
     Parse string to a timestamp value
int DateTime::getOffset(DateTime $object)
     Returns the timezone offset
int DateTime::getTimestamp(DateTime $object)
     Gets the Unix timestamp
int DateTimeZone::getOffset(DateTime $datetime, DateTimeZone $object)
     Returns the timezone offset from GMT
int db2_cursor_type(resource $stmt)
     Returns the cursor type used by a statement resource
int db2_field_display_size(resource $stmt, mixed $column)
     Returns the maximum number of bytes required to display a column
int db2_field_num(resource $stmt, mixed $column)
     Returns the position of the named column in a result set
int db2_field_precision(resource $stmt, mixed $column)
     Returns the precision of the indicated column in a result set
int db2_field_scale(resource $stmt, mixed $column)
     Returns the scale of the indicated column in a result set
int db2_field_width(resource $stmt, mixed $column)
     Returns the width of the current value of the indicated column in a result set
int db2_num_fields(resource $stmt)
     Returns the number of fields contained in a result set
int dbase_create(string $filename, array $fields)
     Creates a database
int dbase_numfields(int $dbase_identifier)
     Gets the number of fields of a database
int dbase_numrecords(int $dbase_identifier)
     Gets the number of records in a database
int dbase_open(string $filename, int $mode)
     Opens a database
int dbplus_add(resource $relation, array $tuple)
     Add a tuple to a relation
int dbplus_curr(resource $relation, array $tuple)
     Get current tuple from relation
int dbplus_errno()
     Get error code for last operation
int dbplus_find(resource $relation, array $constraints, mixed $tuple)
     Set a constraint on a relation
int dbplus_first(resource $relation, array $tuple)
     Get first tuple from relation
int dbplus_flush(resource $relation)
     Flush all changes made on a relation
int dbplus_freealllocks()
     Free all locks held by this client
int dbplus_freelock(resource $relation, string $tuple)
     Release write lock on tuple
int dbplus_freerlocks(resource $relation)
     Free all tuple locks on given relation
int dbplus_getlock(resource $relation, string $tuple)
     Get a write lock on a tuple
int dbplus_getunique(resource $relation, int $uniqueid)
     Get an id number unique to a relation
int dbplus_info(resource $relation, string $key, array $result)
     Get information about a relation
int dbplus_last(resource $relation, array $tuple)
     Get last tuple from relation
int dbplus_lockrel(resource $relation)
     Request write lock on relation
int dbplus_next(resource $relation, array $tuple)
     Get next tuple from relation
int dbplus_prev(resource $relation, array $tuple)
     Get previous tuple from relation
int dbplus_rchperm(resource $relation, int $mask, string $user, string $group)
     Change relation permissions
int dbplus_restorepos(resource $relation, array $tuple)
     Restore position
int dbplus_rrename(resource $relation, string $name)
     Rename a relation
int dbplus_runlink(resource $relation)
     Remove relation from filesystem
int dbplus_rzap(resource $relation)
     Remove all tuples from relation
int dbplus_savepos(resource $relation)
     Save position
int dbplus_setindex(resource $relation, string $idx_name)
     Set index
int dbplus_setindexbynumber(resource $relation, int $idx_number)
     Set index by number
int dbplus_tremove(resource $relation, array $tuple [, array $current = ``])
     Remove tuple and return new current tuple
int dbplus_undo(resource $relation)
     Undo
int dbplus_undoprepare(resource $relation)
     Prepare undo
int dbplus_unlockrel(resource $relation)
     Give up write lock on relation
int dbplus_unselect(resource $relation)
     Remove a constraint from relation
int dbplus_update(resource $relation, array $old, array $new)
     Update specified tuple in relation
int dbplus_xlockrel(resource $relation)
     Request exclusive lock on relation
int dbplus_xunlockrel(resource $relation)
     Free exclusive lock on relation
int dbx_close(object $link_identifier)
     Close an open connection/database
int dbx_compare(array $row_a, array $row_b, string $column_key [, int $flags = DBX_CMP_ASC | DBX_CMP_NATIVE])
     Compare two rows for sorting purposes
int dio_seek(resource $fd, int $pos [, int $whence = SEEK_SET])
     Seeks to pos on fd from whence
int dio_write(resource $fd, string $data [, int $len = ``])
     Writes data to fd with optional truncation at length
int DirectoryIterator::getATime()
     Get last access time of the current DirectoryIterator item
int DirectoryIterator::getCTime()
     Get inode change time of the current DirectoryIterator item
int DirectoryIterator::getGroup()
     Get group for the current DirectoryIterator item
int DirectoryIterator::getInode()
     Get inode for the current DirectoryIterator item
int DirectoryIterator::getMTime()
     Get last modification time of current DirectoryIterator item
int DirectoryIterator::getOwner()
     Get owner of current DirectoryIterator item
int DirectoryIterator::getPerms()
     Get the permissions of current DirectoryIterator item
int DirectoryIterator::getSize()
     Get size of current DirectoryIterator item
int DOMDocument::save(string $filename [, int $options = ``])
     Dumps the internal XML tree back into a file
int DOMDocument::saveHTMLFile(string $filename)
     Dumps the internal document into a file using HTML formatting
int DOMNode::getLineNo()
     Get line number for a node
int domxml_xslt_version()
     Gets the XSLT library version
int dotnet_load(string $assembly_name [, string $datatype_name = `` [, int $codepage = ``]])
     Loads a DOTNET module
int easter_date([int $year = ``])
     Get Unix timestamp for midnight on Easter of a given year
int easter_days([int $year = `` [, int $method = CAL_EASTER_DEFAULT]])
     Get number of days after March 21 on which Easter falls for a given year
integer intval(mixed $var [, int $base = 10])
     Get the integer value of a variable
integer max(array $values, mixed $value1, mixed $value2 [, mixed $value3... = ``])
     Find highest value
integer mb_substitute_character([mixed $substrchar = ``])
     Set/Get substitution character
integer min(array $values, mixed $value1, mixed $value2 [, mixed $value3... = ``])
     Find lowest value
integer openssl_cipher_iv_length(string $method)
     Gets the cipher iv length
integer pg_field_prtlen(resource $result, int $row_number, mixed $field_name_or_number)
     Returns the printed length
integer SplFileObject::getFlags()
     Gets flags for the SplFileObject
int ereg(string $pattern, string $string [, array $regs = ``])
     Regular expression match
int eregi(string $pattern, string $string [, array $regs = ``])
     Case insensitive regular expression match
int error_reporting([int $level = ``])
     Sets which PHP errors are reported
int event_base_loop(resource $event_base [, int $flags = ``])
     Handle events
int exif_imagetype(string $filename)
     Determine the type of an image
int expect_expectl(resource $expect, array $cases [, array $match = ``])
     Waits until the output from a process matches one  of the patterns, a specified time period has passed, or an EOF is seen
int extract(array $var_array [, int $extract_type = EXTR_OVERWRITE [, string $prefix = ``]])
     Import variables into the current symbol table from an array
int ezmlm_hash(string $addr)
     Calculate the hash value needed by EZMLM
int fam_pending(resource $fam)
     Check for pending FAM events
int fbsql_affected_rows([resource $link_identifier = ``])
     Get number of affected rows in previous FrontBase operation
int fbsql_blob_size(string $blob_handle [, resource $link_identifier = ``])
     Get the size of a BLOB
int fbsql_clob_size(string $clob_handle [, resource $link_identifier = ``])
     Get the size of a CLOB
int fbsql_db_status(string $database_name [, resource $link_identifier = ``])
     Get the status for a given database
int fbsql_errno([resource $link_identifier = ``])
     Returns the error number from previous operation
int fbsql_field_len(resource $result [, int $field_offset = ``])
     Returns the length of the specified field
int fbsql_insert_id([resource $link_identifier = ``])
     Get the id generated from the previous INSERT operation
int fbsql_num_fields(resource $result)
     Get number of fields in result
int fbsql_num_rows(resource $result)
     Get number of rows in result
int fbsql_rows_fetched(resource $result)
     Get the number of rows affected by the last statement
int fdf_errno()
     Return error code for last fdf operation
int fdf_get_flags(resource $fdf_document, string $fieldname, int $whichflags)
     Gets the flags of a field
int fileatime(string $filename)
     Gets last access time of file
int filectime(string $filename)
     Gets inode change time of file
int filegroup(string $filename)
     Gets file group
int fileinode(string $filename)
     Gets file inode
int filemtime(string $filename)
     Gets file modification time
int fileowner(string $filename)
     Gets file owner
int fileperms(string $filename)
     Gets file permissions
int filepro_fieldcount()
     Find out how many fields are in a filePro database
int filepro_fieldwidth(int $field_number)
     Gets the width of a field
int filepro_rowcount()
     Find out how many rows are in a filePro database
int filesize(string $filename)
     Gets file size
int FilesystemIterator::getFlags()
     Get the handling flags
int file_put_contents(string $filename, mixed $data [, int $flags = `` [, resource $context = ``]])
     Write a string to a file
int filter_id(string $filtername)
     Returns the filter ID belonging to a named filter
int fpassthru(resource $handle)
     Output all remaining data on a file pointer
int fprintf(resource $handle, string $format [, mixed $args = `` [, mixed $... = ``]])
     Write a formatted string to a stream
int fputcsv(resource $handle, array $fields [, string $delimiter = `,` [, string $enclosure = `\"`]])
     Format line as CSV and write to file pointer
int FrenchToJD(int $month, int $day, int $year)
     Converts a date from the French Republican Calendar to a Julian Day Count
int fseek(resource $handle, int $offset [, int $whence = SEEK_SET])
     Seeks on a file pointer
int ftell(resource $handle)
     Returns the current position of the file read/write pointer
int ftok(string $pathname, string $proj)
     Convert a pathname and a project identifier to a System V IPC key
int ftp_chmod(resource $ftp_stream, int $mode, string $filename)
     Set permissions on a file via FTP
int ftp_mdtm(resource $ftp_stream, string $remote_file)
     Returns the last modified time of the given file
int ftp_nb_continue(resource $ftp_stream)
     Continues retrieving/sending a file (non-blocking)
int ftp_nb_fget(resource $ftp_stream, resource $handle, string $remote_file, int $mode [, int $resumepos = ``])
     Retrieves a file from the FTP server and writes it to an open file (non-blocking)
int ftp_nb_fput(resource $ftp_stream, string $remote_file, resource $handle, int $mode [, int $startpos = ``])
     Stores a file from an open file to the FTP server (non-blocking)
int ftp_nb_get(resource $ftp_stream, string $local_file, string $remote_file, int $mode [, int $resumepos = ``])
     Retrieves a file from the FTP server and writes it to a local file (non-blocking)
int ftp_nb_put(resource $ftp_stream, string $remote_file, string $local_file, int $mode [, int $startpos = ``])
     Stores a file on the FTP server (non-blocking)
int ftp_size(resource $ftp_stream, string $remote_file)
     Returns the size of the given file
int func_num_args()
     Returns the number of arguments passed to the function
int fwrite(resource $handle, string $string [, int $length = ``])
     Binary-safe file write
int gc_collect_cycles()
     Forces collection of any existing garbage cycles
int GearmanClient::getErrno()
     Get an errno value
int GearmanClient::returnCode()
     Get the last Gearman return code
int GearmanClient::timeout()
     Get current socket I/O activity timeout value
int GearmanJob::returnCode()
     Get last return code
int GearmanJob::workloadSize()
     Get size of work load
int GearmanTask::dataSize()
     Get the size of returned data
int GearmanTask::returnCode()
     Get the last return code
int GearmanTask::sendData(string $data)
     Send data for a task (deprecated)
int GearmanTask::sendWorkload(string $data)
     Send data for a task
int GearmanTask::taskDenominator()
     Get completion percentage denominator
int GearmanTask::taskNumerator()
     Get completion percentage numerator
int GearmanWorker::getErrno()
     Get errno
int GearmanWorker::options()
     Get worker options
int GearmanWorker::returnCode()
     Get last Gearman return code
int GearmanWorker::timeout()
     Get socket I/O activity timeout
int geoip_id_by_name(string $hostname)
     Get the Internet connection type
int getlastmod()
     Gets time of last page modification
int getmygid()
     Get PHP script owner`s GID
int getmyinode()
     Gets the inode of the current script
int getmypid()
     Gets PHP`s process ID
int getmyuid()
     Gets PHP script owner`s UID
int getprotobyname(string $name)
     Get protocol number associated with protocol name
int getrandmax()
     Show largest possible random value
int getservbyname(string $service, string $protocol)
     Get port number associated with an Internet service and protocol
int get_magic_quotes_gpc()
     Gets the current configuration setting of magic_quotes_gpc
int get_magic_quotes_runtime()
     Gets the current active configuration setting of magic_quotes_runtime
int GlobIterator::count()
     Get the number of directories and files
int Gmagick::getimagechanneldepth(int $channel_type)
     Gets the depth for a particular image channel
int Gmagick::getimagecolors()
     Returns the color of the specified colormap index
int Gmagick::getimagecolorspace()
     Gets the image colorspace
int Gmagick::getimagecompose()
     Returns the composite operator associated with the image
int Gmagick::getimagedelay()
     Gets the image delay
int Gmagick::getimagedepth()
     Gets the depth of the image
int Gmagick::getimagedispose()
     Gets the image disposal method
int Gmagick::getimageheight()
     Returns the image height
int Gmagick::getimageindex()
     Gets the index of the current active image
int Gmagick::getimageinterlacescheme()
     Gets the image interlace scheme
int Gmagick::getimageiterations()
     Gets the image iterations
int Gmagick::getimagematte()
     Return if the image has a matte channel
int Gmagick::getimagerenderingintent()
     Gets the image rendering intent
int Gmagick::getimagescene()
     Gets the image scene
int Gmagick::getimagetype()
     Gets the potential image type.
int Gmagick::getimageunits()
     Gets the image units of resolution
int Gmagick::getimagewidth()
     Returns the width of the image
int GmagickDraw::getfontstyle()
     Returns the font style
int GmagickDraw::getfontweight()
     Returns the font weight
int GmagickDraw::gettextdecoration()
     Returns the text decoration
int GmagickPixel::getcolorcount()
     Returns the color count associated with this color
int gmmktime([int $hour = gmdate(\"H\") [, int $minute = gmdate(\"i\") [, int $second = gmdate(\"s\") [, int $month = gmdate(\"n\") [, int $day = gmdate(\"j\") [, int $year = gmdate(\"Y\") [, int $is_dst = -1]]]]]]])
     Get Unix timestamp for a GMT date
int gmp_cmp(resource $a, resource $b)
     Compare numbers
int gmp_hamdist(resource $a, resource $b)
     Hamming distance
int gmp_intval(resource $gmpnumber)
     Convert GMP number to integer
int gmp_jacobi(resource $a, resource $p)
     Jacobi symbol
int gmp_legendre(resource $a, resource $p)
     Legendre symbol
int gmp_popcount(resource $a)
     Population count
int gmp_prob_prime(resource $a [, int $reps = 10])
     Check if number is \"probably prime\"
int gmp_scan0(resource $a, int $start)
     Scan for 0
int gmp_scan1(resource $a, int $start)
     Scan for 1
int gmp_sign(resource $a)
     Sign of number
int gnupg_getprotocol(resource $identifier)
     Returns the currently active protocol for all operations
int grapheme_stripos(string $haystack, string $needle [, int $offset = ``])
     Find position (in grapheme units) of first occurrence of a case-insensitive string
int grapheme_strlen(string $input)
     Get string length in grapheme units
int grapheme_strpos(string $haystack, string $needle [, int $offset = ``])
     Find position (in grapheme units) of first occurrence of a string
int grapheme_strripos(string $haystack, string $needle [, int $offset = ``])
     Find position (in grapheme units) of last occurrence of a case-insensitive string
int grapheme_strrpos(string $haystack, string $needle [, int $offset = ``])
     Find position (in grapheme units) of last occurrence of a string
int grapheme_substr(string $string, int $start [, int $length = ``])
     Return part of a string
int GregorianToJD(int $month, int $day, int $year)
     Converts a Gregorian date to Julian Day Count
int gupnp_context_get_port(resource $context)
     Get the port
int gupnp_context_get_subscription_timeout(resource $context)
     Get the event subscription timeout
int gzeof(resource $zp)
     Test for EOF on a gz-file pointer
int gzpassthru(resource $zp)
     Output all remaining data on a gz-file pointer
int gzseek(resource $zp, int $offset [, int $whence = SEEK_SET])
     Seek on a gz-file pointer
int gztell(resource $zp)
     Tell gz-file pointer read/write position
int gzwrite(resource $zp, string $string [, int $length = ``])
     Binary-safe gz-file write
int HaruDoc::getPageLayout()
     Get current page layout
int HaruDoc::getPageMode()
     Get current page mode
int HaruDoc::getStreamSize()
     Get the size of the temporary stream
int HaruEncoder::getByteType(string $text, int $index)
     Get the type of the byte in the text
int HaruEncoder::getType()
     Get the type of the encoder
int HaruEncoder::getUnicode(int $character)
     Convert the specified character to unicode
int HaruEncoder::getWritingMode()
     Get the writing mode of the encoder
int HaruFont::getAscent()
     Get the vertical ascent of the font
int HaruFont::getCapHeight()
     Get the distance from the baseline of uppercase letters
int HaruFont::getDescent()
     Get the vertical descent of the font
int HaruFont::getUnicodeWidth(int $character)
     Get the width of the character in the font
int HaruFont::getXHeight()
     Get the distance from the baseline of lowercase letters
int HaruFont::measureText(string $text, float $width, float $font_size, float $char_space, float $word_space [, bool $word_wrap = false])
     Calculate the number of characters which can be included within the specified width
int HaruImage::getBitsPerComponent()
     Get the number of bits used to describe each color component of the image
int HaruImage::getHeight()
     Get the height of the image
int HaruImage::getWidth()
     Get the width of the image
int HaruPage::getFillingColorSpace()
     Get the current filling color space
int HaruPage::getGMode()
     Get the current graphics mode
int HaruPage::getLineCap()
     Get the current line cap style
int HaruPage::getLineJoin()
     Get the current line join style
int HaruPage::getStrokingColorSpace()
     Get the current stroking color space
int HaruPage::getTextRenderingMode()
     Get the current text rendering mode
int HaruPage::measureText(string $text, float $width [, bool $wordwrap = false])
     Calculate the number of characters which can be included within the specified width
int hash_update_stream(resource $context, resource $handle [, int $length = -1])
     Pump data into an active hashing context from an open stream
int HttpMessage::getResponseCode()
     Get response code
int HttpMessage::getType()
     Get message type
int HttpRequest::getMethod()
     Get method
int HttpRequest::getResponseCode()
     Get response code
int HttpResponse::getBufferSize()
     Get buffer size
int HttpResponse::getLastModified()
     Get last modified
int http_request_method_exists(mixed $method)
     Check whether request method exists
int http_request_method_register(string $method)
     Register request method
int http_support([int $feature = ``])
     Check built-in HTTP support
int hw_api_error::count()
     Returns number of reasons
int hw_api_object::count(array $parameter)
     Returns number of attributes
int hw_Connect(string $host, int $port [, string $username = ``, string $password])
     Opens a connection
int hw_cp(int $connection, array $object_id_array, int $destination_id)
     Copies objects
int hw_DocByAnchor(int $connection, int $anchorID)
     Object id object belonging to anchor
int hw_Document_Size(int $hw_document)
     Size of hw_document
int hw_Error(int $connection)
     Error number
int hw_GetRemote(int $connection, int $objectID)
     Gets a remote document
int hw_GetText(int $connection, int $objectID [, mixed $rootID/prefix = ``])
     Retrieve text document
int hw_InsColl(int $connection, int $objectID, array $object_array)
     Insert collection
int hw_InsDoc(resource $connection, int $parentID, string $object_record [, string $text = ``])
     Insert document
int hw_InsertDocument(int $connection, int $parent_id, int $hw_document)
     Upload any document
int hw_InsertObject(int $connection, string $object_rec, string $parameter)
     Inserts an object record
int hw_mapid(int $connection, int $server_id, int $object_id)
     Maps global id on virtual local id
int hw_mv(int $connection, array $object_id_array, int $source_id, int $destination_id)
     Moves objects
int hw_New_Document(string $object_record, string $document_data, int $document_size)
     Create new document
int hw_pConnect(string $host, int $port [, string $username = ``, string $password])
     Make a persistent database connection
int hw_PipeDocument(int $connection, int $objectID [, array $url_prefixes = ``])
     Retrieve any document
int hw_Root()
     Root object id
int hw_setlinkroot(int $link, int $rootid)
     Set the id to which links are calculated
int ibase_affected_rows([resource $link_identifier = ``])
     Return the number of rows that were affected by the previous query
int ibase_errcode()
     Return an error code
int ibase_num_fields(resource $result_id)
     Get the number of fields in a result set
int ibase_num_params(resource $query)
     Return the number of parameters in a prepared query
int iconv_strlen(string $str [, string $charset = ini_get(\"iconv.internal_encoding\")])
     Returns the character count of string
int iconv_strpos(string $haystack, string $needle [, int $offset = `` [, string $charset = ini_get(\"iconv.internal_encoding\")]])
     Finds position of first occurrence of a needle within a haystack
int iconv_strrpos(string $haystack, string $needle [, string $charset = ini_get(\"iconv.internal_encoding\")])
     Finds the last occurrence of a needle within a haystack
int id3_get_genre_id(string $genre)
     Get the id for a genre
int id3_get_version(string $filename)
     Get version of an ID3 tag
int idate(string $format [, int $timestamp = time()])
     Format a local time/date as integer
int ifxus_create_slob(int $mode)
     Creates an slob object and opens it
int ifxus_open_slob(int $bid, int $mode)
     Opens an slob object
int ifxus_seek_slob(int $bid, int $mode, int $offset)
     Sets the current file or seek position
int ifxus_tell_slob(int $bid)
     Returns the current file or seek position
int ifxus_write_slob(int $bid, string $content)
     Writes a string into the slob object
int ifx_affected_rows(resource $result_id)
     Get number of rows affected by a query
int ifx_copy_blob(int $bid)
     Duplicates the given blob object
int ifx_create_blob(int $type, int $mode, string $param)
     Creates an blob object
int ifx_create_char(string $param)
     Creates an char object
int ifx_htmltbl_result(resource $result_id [, string $html_table_options = ``])
     Formats all rows of a query into a HTML table
int ifx_num_fields(resource $result_id)
     Returns the number of columns in the query
int ifx_num_rows(resource $result_id)
     Count the rows already fetched from a query
int ignore_user_abort([string $value = ``])
     Set whether a client disconnect should abort script execution
int iis_add_server(string $path, string $comment, string $server_ip, int $port, string $host_name, int $rights, int $start_server)
     Creates a new virtual web server
int iis_get_dir_security(int $server_instance, string $virtual_path)
     Gets Directory Security
int iis_get_server_by_comment(string $comment)
     Return the instance number associated with the Comment
int iis_get_server_by_path(string $path)
     Return the instance number associated with the Path
int iis_get_server_rights(int $server_instance, string $virtual_path)
     Gets server rights
int iis_get_service_state(string $service_id)
     Returns the state for the service defined by ServiceId
int iis_remove_server(int $server_instance)
     Removes the virtual web server indicated by ServerInstance
int iis_set_app_settings(int $server_instance, string $virtual_path, string $application_scope)
     Creates application scope for a virtual directory
int iis_set_dir_security(int $server_instance, string $virtual_path, int $directory_flags)
     Sets Directory Security
int iis_set_script_map(int $server_instance, string $virtual_path, string $script_extension, string $engine_path, int $allow_scripting)
     Sets script mapping on a virtual directory
int iis_set_server_rights(int $server_instance, string $virtual_path, int $directory_flags)
     Sets server rights
int iis_start_server(int $server_instance)
     Starts the virtual web server
int iis_start_service(string $service_id)
     Starts the service defined by ServiceId
int iis_stop_server(int $server_instance)
     Stops the virtual web server
int iis_stop_service(string $service_id)
     Stops the service defined by ServiceId
int imagecolorallocate(resource $image, int $red, int $green, int $blue)
     Allocate a color for an image
int imagecolorallocatealpha(resource $image, int $red, int $green, int $blue, int $alpha)
     Allocate a color for an image
int imagecolorat(resource $image, int $x, int $y)
     Get the index of the color of a pixel
int imagecolorclosest(resource $image, int $red, int $green, int $blue)
     Get the index of the closest color to the specified color
int imagecolorclosestalpha(resource $image, int $red, int $green, int $blue, int $alpha)
     Get the index of the closest color to the specified color + alpha
int imagecolorclosesthwb(resource $image, int $red, int $green, int $blue)
     Get the index of the color which has the hue, white and blackness
int imagecolorexact(resource $image, int $red, int $green, int $blue)
     Get the index of the specified color
int imagecolorexactalpha(resource $image, int $red, int $green, int $blue, int $alpha)
     Get the index of the specified color + alpha
int imagecolorresolve(resource $image, int $red, int $green, int $blue)
     Get the index of the specified color or its closest possible alternative
int imagecolorresolvealpha(resource $image, int $red, int $green, int $blue, int $alpha)
     Get the index of the specified color + alpha or its closest possible alternative
int imagecolorstotal(resource $image)
     Find out the number of colors in an image`s palette
int imagecolortransparent(resource $image [, int $color = ``])
     Define a color as transparent
int imagefontheight(int $font)
     Get font height
int imagefontwidth(int $font)
     Get font width
int imageinterlace(resource $image [, int $interlace = ``])
     Enable or disable interlace
int imageloadfont(string $file)
     Load a new font
int imagesx(resource $image)
     Get image width
int imagesy(resource $image)
     Get image height
int imagetypes()
     Return the image types supported by this PHP build
int Imagick::getColorspace()
     Gets the colorspace
int Imagick::getCompression()
     Gets the object compression type
int Imagick::getCompressionQuality()
     Gets the object compression quality
int Imagick::getGravity()
     Gets the gravity
int Imagick::getImageAlphaChannel()
     Gets the image alpha channel
int Imagick::getImageChannelDepth(int $channel)
     Gets the depth for a particular image channel
int Imagick::getImageColors()
     Gets the number of unique colors in the image
int Imagick::getImageColorspace()
     Gets the image colorspace
int Imagick::getImageCompose()
     Returns the composite operator associated with the image
int Imagick::getImageCompression()
     Gets the current image`s compression type
int Imagick::getImageCompressionQuality()
     Gets the current image`s compression quality
int Imagick::getImageDelay()
     Gets the image delay
int Imagick::getImageDepth()
     Gets the image depth
int Imagick::getImageDispose()
     Gets the image disposal method
int Imagick::getImageGravity()
     Gets the image gravity
int Imagick::getImageHeight()
     Returns the image height
int Imagick::getImageIndex()
     Gets the index of the current active image
int Imagick::getImageInterlaceScheme()
     Gets the image interlace scheme
int Imagick::getImageInterpolateMethod()
     Returns the interpolation method
int Imagick::getImageIterations()
     Gets the image iterations
int Imagick::getImageLength()
     Returns the image length in bytes
int Imagick::getImageOrientation()
     Gets the image orientation
int Imagick::getImageRenderingIntent()
     Gets the image rendering intent
int Imagick::getImageScene()
     Gets the image scene
int Imagick::getImageSize()
     Returns the image length in bytes
int Imagick::getImageTicksPerSecond()
     Gets the image ticks-per-second
int Imagick::getImageType()
     Gets the potential image type
int Imagick::getImageUnits()
     Gets the image units of resolution
int Imagick::getImageVirtualPixelMethod()
     Returns the virtual pixel method
int Imagick::getImageWidth()
     Returns the image width
int Imagick::getInterlaceScheme()
     Gets the object interlace scheme
int Imagick::getIteratorIndex()
     Gets the index of the current active image
int Imagick::getNumberImages()
     Returns the number of images in the object
int Imagick::getResource(int $type)
     Returns the specified resource`s memory usage
int Imagick::getResourceLimit(int $type)
     Returns the specified resource limit
int Imagick::getSizeOffset()
     Returns the size offset
int ImagickDraw::getClipRule()
     Returns the current polygon fill rule
int ImagickDraw::getClipUnits()
     Returns the interpretation of clip path units
int ImagickDraw::getFillRule()
     Returns the fill rule
int ImagickDraw::getFontStyle()
     Returns the font style
int ImagickDraw::getFontWeight()
     Returns the font weight
int ImagickDraw::getGravity()
     Returns the text placement gravity
int ImagickDraw::getStrokeLineCap()
     Returns the shape to be used at the end of open subpaths when they are stroked
int ImagickDraw::getStrokeLineJoin()
     Returns the shape to be used at the corners of paths when they are stroked
int ImagickDraw::getStrokeMiterLimit()
     Returns the stroke miter limit
int ImagickDraw::getTextAlignment()
     Returns the text alignment
int ImagickDraw::getTextDecoration()
     Returns the text decoration
int ImagickPixel::getColorCount()
     Returns the color count associated with this color
int ImagickPixelIterator::getIteratorRow()
     Returns the current pixel iterator row
int imap_msgno(resource $imap_stream, int $uid)
     Gets the message sequence number for the given UID
int imap_num_msg(resource $imap_stream)
     Gets the number of messages in the current mailbox
int imap_num_recent(resource $imap_stream)
     Gets the number of recent messages in current mailbox
int imap_uid(resource $imap_stream, int $msg_number)
     This function returns the UID for the given message sequence number
int ingres_errno([resource $link = ``])
     Get the last Ingres error number generated
int ingres_fetch_proc_return(resource $result)
     Get the return value from a procedure call
int ingres_field_length(resource $result, int $index)
     Get the length of a field
int ingres_field_precision(resource $result, int $index)
     Get the precision of a field
int ingres_field_scale(resource $result, int $index)
     Get the scale of a field
int ingres_num_fields(resource $result)
     Get the number of fields returned by the last query
int ingres_num_rows(resource $result)
     Get the number of rows affected or returned by a query
int inotify_add_watch(resource $inotify_instance, string $pathname, int $mask)
     Add a watch to an initialized inotify instance
int inotify_queue_len(resource $inotify_instance)
     Return a number upper than zero if there are pending events
int IntlDateFormatter::getCalendar(IntlDateFormatter $fmt)
     Get the calendar used for the IntlDateFormatter
int IntlDateFormatter::getDateType(IntlDateFormatter $fmt)
     Get the datetype used for the IntlDateFormatter
int IntlDateFormatter::getErrorCode(IntlDateFormatter $fmt)
     Get the error code from last operation
int IntlDateFormatter::getTimeType(IntlDateFormatter $fmt)
     Get the timetype used for the IntlDateFormatter
int IntlDateFormatter::parse(string $value [, int $position = ``, IntlDateFormatter $fmt])
     Parse string to a timestamp value
int intl_get_error_code()
     Get the last error code
int ip2long(string $ip_address)
     Converts a string containing an (IPv4) Internet Protocol dotted address into a proper address
int iterator_apply(Traversable $iterator, callback $function [, array $args = ``])
     Call a function for every element in an iterator
int iterator_count(Traversable $iterator)
     Count the elements in an iterator
int jdtounix(int $jday)
     Convert Julian Day to Unix timestamp
int JewishToJD(int $month, int $day, int $year)
     Converts a date in the Jewish Calendar to Julian Day Count
int json_last_error()
     Returns the last error occurred
int Judy::byCount(int $nth_index)
     Locate the Nth index present in the Judy array
int Judy::count([int $index_start = `` [, int $index_end = -1]])
     Count the number of elements in the Judy array
int Judy::firstEmpty([mixed $index = ``])
     Search for the first absent index in the Judy array
int Judy::free()
     Free the entire Judy array
int Judy::getType()
     Return the type of the current Judy array
int Judy::lastEmpty([int $index = -1])
     Search for the last absent index in the Judy array
int Judy::memoryUsage()
     Return the memory used by the Judy array
int Judy::nextEmpty(int $index)
     Search for the next absent index in the Judy array
int Judy::prevEmpty(mixed $index)
     Search for the previous absent index in the Judy array
int judy_type(Judy $array)
     Return the type of a Judy array
int JulianToJD(int $month, int $day, int $year)
     Converts a Julian Calendar date to Julian Day Count
int KTaglib_ID3v2_AttachedPictureFrame::getType()
     Returns the type of the image
int KTaglib_ID3v2_Frame::getSize()
     Returns the size of the frame in bytes
int KTaglib_MPEG_AudioProperties::getBitrate()
     Returns the bitrate of the MPEG file
int KTaglib_MPEG_AudioProperties::getChannels()
     Returns the amount of channels of a MPEG file
int KTaglib_MPEG_AudioProperties::getLayer()
     Returns the layer of a MPEG file
int KTaglib_MPEG_AudioProperties::getLength()
     Returns the length of a MPEG file
int KTaglib_MPEG_AudioProperties::getSampleBitrate()
     Returns the sample bitrate of a MPEG file
int KTaglib_MPEG_AudioProperties::getVersion()
     Returns the version of a MPEG file
int KTaglib_Tag::getTrack()
     Returns the track number from a ID3 tag
int KTaglib_Tag::getYear()
     Returns the year from a ID3 tag
int ldap_count_entries(resource $link_identifier, resource $result_identifier)
     Count the number of entries in a search
int ldap_errno(resource $link_identifier)
     Return the LDAP error number of the last LDAP command
IntlDateFormatter datefmt_create(string $locale, int $datetype, int $timetype [, string $timezone = `` [, int $calendar = `` [, string $pattern = ``]]])
     Create a date formatter
IntlDateFormatter IntlDateFormatter::create(string $locale, int $datetype, int $timetype [, string $timezone = `` [, int $calendar = `` [, string $pattern = ``]]])
     Create a date formatter
IntlDateFormatter IntlDateFormatter::__construct(string $locale, int $datetype, int $timetype [, string $timezone = `` [, int $calendar = `` [, string $pattern = ``]]])
     Create a date formatter
int levenshtein(string $str1, string $str2, int $cost_ins, int $cost_rep, int $cost_del)
     Calculate Levenshtein distance between two strings
int LimitIterator::getPosition()
     Return the current position
int LimitIterator::seek(int $position)
     Seek to the given position
int linkinfo(string $path)
     Gets information about a link
int lzf_optimized_for()
     Determines what LZF extension was optimized for
int maxdb::affected_rows(resource $link)
     Gets the number of affected rows in a previous MaxDB operation
int maxdb::errno(resource $link)
     Returns the error code for the most recent function call
int maxdb::field_count(resource $link)
     Returns the number of columns for the most recent query
int maxdb::num_rows(resource $result)
     Gets the number of rows in a result
int maxdb::rpl_query_type(resource $link)
     Returns RPL query type
int maxdb::server_version(resource $link)
     Returns the version of the MaxDB server as an integer
int maxdb::thread_id(resource $link)
     Returns the thread ID for the current connection
int maxdb::warning_count(resource $link)
     Returns the number of warnings from the last query for the given link
int maxdb_affected_rows(resource $link)
     Gets the number of affected rows in a previous MaxDB operation
int maxdb_connect_errno()
     Returns the error code from last connect call
int maxdb_errno(resource $link)
     Returns the error code for the most recent function call
int maxdb_field_count(resource $link)
     Returns the number of columns for the most recent query
int maxdb_field_tell(resource $result)
     Get current field offset of a result pointer
int maxdb_get_client_version()
     Get MaxDB client info
int maxdb_get_server_version(resource $link)
     Returns the version of the MaxDB server as an integer
int maxdb_num_fields(resource $result)
     Get the number of fields in a result
int maxdb_num_rows(resource $result)
     Gets the number of rows in a result
int maxdb_result::current_field(resource $result)
     Get current field offset of a result pointer
int maxdb_result::field_count(resource $result)
     Get the number of fields in a result
int maxdb_rpl_parse_enabled(resource $link)
     Check if RPL parse is enabled
int maxdb_rpl_query_type(resource $link)
     Returns RPL query type
int maxdb_stmt::affected_rows(resource $stmt)
     Returns the total number of rows changed, deleted, or  inserted by the last executed statement
int maxdb_stmt::errno(resource $stmt)
     Returns the error code for the most recent statement call
int maxdb_stmt::num_rows(resource $stmt)
     Return the number of rows in statements result set
int maxdb_stmt::param_count(resource $stmt)
     Returns the number of parameter for the given statement
int maxdb_stmt_affected_rows(resource $stmt)
     Returns the total number of rows changed, deleted, or  inserted by the last executed statement
int maxdb_stmt_errno(resource $stmt)
     Returns the error code for the most recent statement call
int maxdb_stmt_num_rows(resource $stmt)
     Return the number of rows in statements result set
int maxdb_stmt_param_count(resource $stmt)
     Returns the number of parameter for the given statement
int maxdb_thread_id(resource $link)
     Returns the thread ID for the current connection
int maxdb_warning_count(resource $link)
     Returns the number of warnings from the last query for the given link
int mb_ereg(string $pattern, string $string [, array $regs = ``])
     Regular expression match with multibyte support
int mb_eregi(string $pattern, string $string [, array $regs = ``])
     Regular expression match ignoring case with multibyte support
int mb_ereg_search_getpos()
     Returns start point for next regular expression match
int mb_stripos(string $haystack, string $needle [, int $offset = `` [, string $encoding = ``]])
     Finds position of first occurrence of a string within another, case insensitive
int mb_strripos(string $haystack, string $needle [, int $offset = `` [, string $encoding = ``]])
     Finds position of last occurrence of a string within another, case insensitive
int mb_strrpos(string $haystack, string $needle [, int $offset = `` [, string $encoding = ``]])
     Find position of last occurrence of a string in a string
int mcrypt_enc_get_block_size(resource $td)
     Returns the blocksize of the opened algorithm
int mcrypt_enc_get_iv_size(resource $td)
     Returns the size of the IV of the opened algorithm
int mcrypt_enc_get_key_size(resource $td)
     Returns the maximum supported keysize of the opened mode
int mcrypt_enc_self_test(resource $td)
     Runs a self test on the opened module
int mcrypt_generic_init(resource $td, string $key, string $iv)
     This function initializes all buffers needed for encryption
int mcrypt_get_block_size(string $cipher, string $module)
     Gets the block size of the specified cipher
int mcrypt_get_iv_size(string $cipher, string $mode)
     Returns the size of the IV belonging to a specific cipher/mode combination
int mcrypt_get_key_size(string $cipher, string $module)
     Gets the key size of the specified cipher
int mcrypt_module_get_algo_block_size(string $algorithm [, string $lib_dir = ``])
     Returns the blocksize of the specified algorithm
int mcrypt_module_get_algo_key_size(string $algorithm [, string $lib_dir = ``])
     Returns the maximum supported keysize of the opened mode
int Memcache::decrement(string $key [, int $value = 1])
     Decrement item`s value
int Memcache::getServerStatus(string $host [, int $port = 11211])
     Returns server status
int Memcache::increment(string $key [, int $value = 1])
     Increment item`s value
int Memcached::decrement(string $key [, int $offset = 1])
     Decrement numeric item`s value
int Memcached::getResultCode()
     Return the result code of the last operation
int Memcached::increment(string $key [, int $offset = 1])
     Increment numeric item`s value
int memory_get_peak_usage([bool $real_usage = false])
     Returns the peak of memory allocated by PHP
int memory_get_usage([bool $real_usage = false])
     Returns the amount of memory allocated to PHP
int MessageFormatter::getErrorCode(MessageFormatter $fmt)
     Get the error code from last operation
int mhash_count()
     Gets the highest available hash ID
int mhash_get_block_size(int $hash)
     Gets the block size of the specified hash
int ming_keypress(string $char)
     Returns the action flag for keyPress(char)
int mktime([int $hour = date(\"H\") [, int $minute = date(\"i\") [, int $second = date(\"s\") [, int $month = date(\"n\") [, int $day = date(\"j\") [, int $year = date(\"Y\") [, int $is_dst = -1]]]]]]])
     Get Unix timestamp for a date
int MongoCollection::count([array $query = array() [, int $limit = `` [, int $skip = ``]]])
     Counts the number of documents in this collection
int MongoCursor::count([bool $foundOnly = ``])
     Counts the number of results for this query
int MongoDB::getProfilingLevel()
     Gets this database`s profiling level
int MongoDB::setProfilingLevel(int $level)
     Sets this database`s profiling level
int MongoGridFSFile::getSize()
     Returns this file`s size
int MongoGridFSFile::write([string $filename = ``])
     Writes this file to the filesystem
int MongoId::getInc()
     Gets the incremented value to create this id
int MongoId::getPID()
     Gets the process id used to create this
int MongoId::getTimestamp()
     Gets the number of seconds since the epoch that this id was created
int msession_count()
     Get session count
int msession_lock(string $name)
     Lock a session
int msession_timeout(string $session [, int $param = ``])
     Set/get session timeout
int msession_unlock(string $session, int $key)
     Unlock a session
int msgfmt_get_error_code(MessageFormatter $fmt)
     Get the error code from last operation
int msql_affected_rows(resource $result)
     Returns number of affected rows
int msql_field_len(resource $result, int $field_offset)
     Get field length
int msql_field_table(resource $result, int $field_offset)
     Get table name for field
int msql_num_fields(resource $result)
     Get number of fields in result
int msql_num_rows(resource $query_identifier)
     Get number of rows in result
int mssql_fetch_batch(resource $result)
     Returns the next batch of records
int mssql_field_length(resource $result [, int $offset = -1])
     Get the length of a field
int mssql_num_fields(resource $result)
     Gets the number of fields in result
int mssql_num_rows(resource $result)
     Gets the number of rows in result
int mssql_rows_affected(resource $link_identifier)
     Returns the number of records affected by the query
int mt_getrandmax()
     Show largest possible random value
int mt_rand(int $min, int $max)
     Generate a better random value
int mysqli::affected_rows(mysqli $link)
     Gets the number of affected rows in a previous MySQL operation
int mysqli::client_version(mysqli $link)
     Get MySQL client info
int mysqli::client_version(mysqli $link)
     Get MySQL client info
int mysqli::connect_errno()
     Returns the error code from last connect call
int mysqli::errno(mysqli $link)
     Returns the error code for the most recent function call
int mysqli::field_count(mysqli $link)
     Returns the number of columns for the most recent query
int mysqli::poll(array $read, array $error, array $reject, int $sec [, int $usec = ``])
     Poll connections
int mysqli::protocol_version(mysqli $link)
     Returns the version of the MySQL protocol used
int mysqli::rpl_query_type(string $query, mysqli $link)
     Returns RPL query type
int mysqli::server_version(mysqli $link)
     Returns the version of the MySQL server as an integer
int mysqli::thread_id(mysqli $link)
     Returns the thread ID for the current connection
int mysqli::warning_count(mysqli $link)
     Returns the number of warnings from the last query for the given link
int mysqli_affected_rows(mysqli $link)
     Gets the number of affected rows in a previous MySQL operation
int mysqli_connect_errno()
     Returns the error code from last connect call
int mysqli_errno(mysqli $link)
     Returns the error code for the most recent function call
int mysqli_field_count(mysqli $link)
     Returns the number of columns for the most recent query
int mysqli_field_tell(mysqli_result $result)
     Get current field offset of a result pointer
int mysqli_get_client_version(mysqli $link)
     Get MySQL client info
int mysqli_get_client_version(mysqli $link)
     Get MySQL client info
int mysqli_get_proto_info(mysqli $link)
     Returns the version of the MySQL protocol used
int mysqli_get_server_version(mysqli $link)
     Returns the version of the MySQL server as an integer
int mysqli_num_fields(mysqli_result $result)
     Get the number of fields in a result
int mysqli_num_rows(mysqli_result $result)
     Gets the number of rows in a result
int mysqli_poll(array $read, array $error, array $reject, int $sec [, int $usec = ``])
     Poll connections
int mysqli_result::current_field(mysqli_result $result)
     Get current field offset of a result pointer
int mysqli_result::field_count(mysqli_result $result)
     Get the number of fields in a result
int mysqli_result::num_rows(mysqli_result $result)
     Gets the number of rows in a result
int mysqli_rpl_parse_enabled(mysqli $link)
     Check if RPL parse is enabled
int mysqli_rpl_query_type(string $query, mysqli $link)
     Returns RPL query type
int mysqli_stmt::affected_rows(mysqli_stmt $stmt)
     Returns the total number of rows changed, deleted, or  inserted by the last executed statement
int mysqli_stmt::attr_get(int $attr, mysqli_stmt $stmt)
     Used to get the current value of a statement attribute
int mysqli_stmt::errno(mysqli_stmt $stmt)
     Returns the error code for the most recent statement call
int mysqli_stmt::field_count(mysqli_stmt $stmt)
     Returns the number of field in the given statement
int mysqli_stmt::num_rows(mysqli_stmt $stmt)
     Return the number of rows in statements result set
int mysqli_stmt::param_count(mysqli_stmt $stmt)
     Returns the number of parameter for the given statement
int mysqli_stmt_affected_rows(mysqli_stmt $stmt)
     Returns the total number of rows changed, deleted, or  inserted by the last executed statement
int mysqli_stmt_attr_get(int $attr, mysqli_stmt $stmt)
     Used to get the current value of a statement attribute
int mysqli_stmt_errno(mysqli_stmt $stmt)
     Returns the error code for the most recent statement call
int mysqli_stmt_field_count(mysqli_stmt $stmt)
     Returns the number of field in the given statement
int mysqli_stmt_num_rows(mysqli_stmt $stmt)
     Return the number of rows in statements result set
int mysqli_stmt_param_count(mysqli_stmt $stmt)
     Returns the number of parameter for the given statement
int mysqli_thread_id(mysqli $link)
     Returns the thread ID for the current connection
int mysqli_warning_count(mysqli $link)
     Returns the number of warnings from the last query for the given link
int mysqlnd_ms_query_is_select(string $query)
     Find whether to send the query to the master, the slave or the last used MySQL server
int mysql_affected_rows([resource $link_identifier = ``])
     Get number of affected rows in previous MySQL operation
int mysql_errno([resource $link_identifier = ``])
     Returns the numerical value of the error message from previous MySQL operation
int mysql_field_len(resource $result, int $field_offset)
     Returns the length of the specified field
int mysql_get_proto_info([resource $link_identifier = ``])
     Get MySQL protocol info
int mysql_insert_id([resource $link_identifier = ``])
     Get the ID generated in the last query
int mysql_num_fields(resource $result)
     Get number of fields in result
int mysql_num_rows(resource $result)
     Get number of rows in result
int mysql_thread_id([resource $link_identifier = ``])
     Return the current thread ID
int m_checkstatus(resource $conn, int $identifier)
     Check to see if a transaction has completed
int m_completeauthorizations(resource $conn, int $array)
     Number of complete authorizations in queue, returning an array of their identifiers
int m_connect(resource $conn)
     Establish the connection to MCVE
int m_initengine(string $location)
     Ready the client for IP/SSL Communication
int m_iscommadelimited(resource $conn, int $identifier)
     Checks to see if response is comma delimited
int m_monitor(resource $conn)
     Perform communication with MCVE (send/receive data) Non-blocking
int m_numcolumns(resource $conn, int $identifier)
     Number of columns returned in a comma delimited response
int m_numrows(resource $conn, int $identifier)
     Number of rows returned in a comma delimited response
int m_parsecommadelimited(resource $conn, int $identifier)
     Parse the comma delimited response so m_getcell, etc will work
int m_returnstatus(resource $conn, int $identifier)
     Check to see if the transaction was successful
int m_setblocking(resource $conn, int $tf)
     Set blocking/non-blocking mode for connection
int m_setdropfile(resource $conn, string $directory)
     Set the connection method to Drop-File
int m_setip(resource $conn, string $host, int $port)
     Set the connection method to IP
int m_setssl(resource $conn, string $host, int $port)
     Set the connection method to SSL
int m_setssl_cafile(resource $conn, string $cafile)
     Set SSL CA (Certificate Authority) file for verification of server certificate
int m_setssl_files(resource $conn, string $sslkeyfile, string $sslcertfile)
     Set certificate key files and certificates if server requires client certificate verification
int m_settimeout(resource $conn, int $seconds)
     Set maximum transaction time (per trans)
int m_transactionssent(resource $conn)
     Check to see if outgoing buffer is clear
int m_transinqueue(resource $conn)
     Number of transactions in client-queue
int m_transkeyval(resource $conn, int $identifier, string $key, string $value)
     Add key/value pair to a transaction. Replaces deprecated transparam()
int m_transnew(resource $conn)
     Start a new transaction
int m_transsend(resource $conn, int $identifier)
     Finalize and send the transaction
int m_uwait(int $microsecs)
     Wait x microsecs
int m_validateidentifier(resource $conn, int $tf)
     Whether or not to validate the passed identifier on any transaction it is passed to
int ncurses_addch(int $ch)
     Add character at current position and advance cursor
int ncurses_addchnstr(string $s, int $n)
     Add attributed string with specified length at current position
int ncurses_addchstr(string $s)
     Add attributed string at current position
int ncurses_addnstr(string $s, int $n)
     Add string with specified length at current position
int ncurses_addstr(string $text)
     Output text at current position
int ncurses_assume_default_colors(int $fg, int $bg)
     Define default colors for color 0
int ncurses_attroff(int $attributes)
     Turn off the given attributes
int ncurses_attron(int $attributes)
     Turn on the given attributes
int ncurses_attrset(int $attributes)
     Set given attributes
int ncurses_baudrate()
     Returns baudrate of terminal
int ncurses_beep()
     Let the terminal beep
int ncurses_bkgd(int $attrchar)
     Set background property for terminal screen
int ncurses_border(int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner)
     Draw a border around the screen using attributed characters
int ncurses_bottom_panel(resource $panel)
     Moves a visible panel to the bottom of the stack
int ncurses_color_content(int $color, int $r, int $g, int $b)
     Retrieves RGB components of a color
int ncurses_color_set(int $pair)
     Set active foreground and background colors
int ncurses_curs_set(int $visibility)
     Set cursor state
int ncurses_define_key(string $definition, int $keycode)
     Define a keycode
int ncurses_delay_output(int $milliseconds)
     Delay output on terminal using padding characters
int ncurses_echochar(int $character)
     Single character output including refresh
int ncurses_end()
     Stop using ncurses, clean up the screen
int ncurses_getch()
     Read a character from keyboard
int ncurses_halfdelay(int $tenth)
     Put terminal into halfdelay mode
int ncurses_has_key(int $keycode)
     Check for presence of a function key on terminal keyboard
int ncurses_hide_panel(resource $panel)
     Remove panel from the stack, making it invisible
int ncurses_hline(int $charattr, int $n)
     Draw a horizontal line at current position using an attributed character and max. n characters long
int ncurses_init_color(int $color, int $r, int $g, int $b)
     Define a terminal color
int ncurses_init_pair(int $pair, int $fg, int $bg)
     Define a color pair
int ncurses_insch(int $character)
     Insert character moving rest of line including character at current position
int ncurses_insdelln(int $count)
     Insert lines before current line scrolling down (negative numbers delete and scroll up)
int ncurses_insertln()
     Insert a line, move rest of screen down
int ncurses_insstr(string $text)
     Insert string at current position, moving rest of line right
int ncurses_instr(string $buffer)
     Reads string from terminal screen
int ncurses_keyok(int $keycode, bool $enable)
     Enable or disable a keycode
int ncurses_keypad(resource $window, bool $bf)
     Turns keypad on or off
int ncurses_meta(resource $window, bool $8bit)
     Enables/Disable 8-bit meta key information
int ncurses_mouseinterval(int $milliseconds)
     Set timeout for mouse button clicks
int ncurses_mousemask(int $newmask, int $oldmask)
     Sets mouse options
int ncurses_move(int $y, int $x)
     Move output position
int ncurses_move_panel(resource $panel, int $startx, int $starty)
     Moves a panel so that its upper-left corner is at [startx, starty]
int ncurses_mvaddch(int $y, int $x, int $c)
     Move current position and add character
int ncurses_mvaddchnstr(int $y, int $x, string $s, int $n)
     Move position and add attributed string with specified length
int ncurses_mvaddchstr(int $y, int $x, string $s)
     Move position and add attributed string
int ncurses_mvaddnstr(int $y, int $x, string $s, int $n)
     Move position and add string with specified length
int ncurses_mvaddstr(int $y, int $x, string $s)
     Move position and add string
int ncurses_mvcur(int $old_y, int $old_x, int $new_y, int $new_x)
     Move cursor immediately
int ncurses_mvdelch(int $y, int $x)
     Move position and delete character, shift rest of line left
int ncurses_mvgetch(int $y, int $x)
     Move position and get character at new position
int ncurses_mvhline(int $y, int $x, int $attrchar, int $n)
     Set new position and draw a horizontal line using an attributed character and max. n characters long
int ncurses_mvinch(int $y, int $x)
     Move position and get attributed character at new position
int ncurses_mvvline(int $y, int $x, int $attrchar, int $n)
     Set new position and draw a vertical line using an attributed character and max. n characters long
int ncurses_mvwaddstr(resource $window, int $y, int $x, string $text)
     Add string at new position in window
int ncurses_napms(int $milliseconds)
     Sleep
int ncurses_pair_content(int $pair, int $f, int $b)
     Retrieves foreground and background colors of a color pair
int ncurses_pnoutrefresh(resource $pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol)
     Copies a region from a pad into the virtual screen
int ncurses_prefresh(resource $pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol)
     Copies a region from a pad into the virtual screen
int ncurses_putp(string $text)
     Apply padding information to the string and output it
int ncurses_refresh(int $ch)
     Refresh screen
int ncurses_replace_panel(resource $panel, resource $window)
     Replaces the window associated with panel
int ncurses_reset_prog_mode()
     Resets the prog mode saved by def_prog_mode
int ncurses_reset_shell_mode()
     Resets the shell mode saved by def_shell_mode
int ncurses_scrl(int $count)
     Scroll window content up or down without changing current position
int ncurses_scr_dump(string $filename)
     Dump screen content to file
int ncurses_scr_init(string $filename)
     Initialize screen from file dump
int ncurses_scr_restore(string $filename)
     Restore screen from file dump
int ncurses_scr_set(string $filename)
     Inherit screen from file dump
int ncurses_show_panel(resource $panel)
     Places an invisible panel on top of the stack, making it visible
int ncurses_slk_attr()
     Returns current soft label key attribute
int ncurses_slk_attroff(int $intarg)
     Turn off the given attributes for soft function-key labels
int ncurses_slk_attron(int $intarg)
     Turn on the given attributes for soft function-key labels
int ncurses_slk_attrset(int $intarg)
     Set given attributes for soft function-key labels
int ncurses_slk_color(int $intarg)
     Sets color for soft label keys
int ncurses_slk_refresh()
     Copies soft label keys to screen
int ncurses_slk_restore()
     Restores soft label keys
int ncurses_slk_touch()
     Forces output when ncurses_slk_noutrefresh is performed
int ncurses_standend()
     Stop using `standout` attribute
int ncurses_standout()
     Start using `standout` attribute
int ncurses_start_color()
     Initializes color functionality
int ncurses_top_panel(resource $panel)
     Moves a visible panel to the top of the stack
int ncurses_typeahead(int $fd)
     Specify different filedescriptor for typeahead checking
int ncurses_ungetch(int $keycode)
     Put a character back into the input stream
int ncurses_use_extended_names(bool $flag)
     Control use of extended names in terminfo descriptions
int ncurses_vidattr(int $intarg)
     Display the string on the terminal in the video attribute mode
int ncurses_vline(int $charattr, int $n)
     Draw a vertical line at current position using an attributed character and max. n characters long
int ncurses_waddch(resource $window, int $ch)
     Adds character at current position in a window and advance cursor
int ncurses_waddstr(resource $window, string $str [, int $n = ``])
     Outputs text at current postion in window
int ncurses_wattroff(resource $window, int $attrs)
     Turns off attributes for a window
int ncurses_wattron(resource $window, int $attrs)
     Turns on attributes for a window
int ncurses_wattrset(resource $window, int $attrs)
     Set the attributes for a window
int ncurses_wborder(resource $window, int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner)
     Draws a border around the window using attributed characters
int ncurses_wclear(resource $window)
     Clears window
int ncurses_wcolor_set(resource $window, int $color_pair)
     Sets windows color pairings
int ncurses_werase(resource $window)
     Erase window contents
int ncurses_wgetch(resource $window)
     Reads a character from keyboard (window)
int ncurses_whline(resource $window, int $charattr, int $n)
     Draws a horizontal line in a window at current position using an attributed character and max. n characters long
int ncurses_wmove(resource $window, int $y, int $x)
     Moves windows output position
int ncurses_wnoutrefresh(resource $window)
     Copies window to virtual screen
int ncurses_wrefresh(resource $window)
     Refresh window on terminal screen
int ncurses_wstandend(resource $window)
     End standout mode for a window
int ncurses_wstandout(resource $window)
     Enter standout mode for a window
int ncurses_wvline(resource $window, int $charattr, int $n)
     Draws a vertical line in a window at current position using an attributed character and max. n characters long
int newt_centered_window(int $width, int $height [, string $title = ``])
     Open a centered window of the specified size
int newt_finished()
     Uninitializes newt interface
int newt_init()
     Initialize newt
int newt_listbox_item_count(resource $listbox)
     
int newt_open_window(int $left, int $top, int $width, int $height [, string $title = ``])
     Open a window of the specified size and position
int newt_textbox_get_num_lines(resource $textbox)
     
int newt_win_choice(string $title, string $button1_text, string $button2_text, string $format [, mixed $args = `` [, mixed $... = ``]])
     
int newt_win_entries(string $title, string $text, int $suggested_width, int $flex_down, int $flex_up, int $data_width, array $items, string $button1 [, string $... = ``])
     
int newt_win_menu(string $title, string $text, int $suggestedWidth, int $flexDown, int $flexUp, int $maxListHeight, array $items, int $listItem [, string $button1 = `` [, string $... = ``]])
     
int newt_win_ternary(string $title, string $button1_text, string $button2_text, string $button3_text, string $format [, mixed $args = `` [, mixed $... = ``]])
     
int notes_find_note(string $database_name, string $name [, string $type = ``])
     Returns a note id found in database_name
int NumberFormatter::getAttribute(int $attr, NumberFormatter $fmt)
     Get an attribute
int NumberFormatter::getErrorCode(NumberFormatter $fmt)
     Get formatter`s last error code.
int numfmt_get_attribute(int $attr, NumberFormatter $fmt)
     Get an attribute
int numfmt_get_error_code(NumberFormatter $fmt)
     Get formatter`s last error code.
int ob_get_length()
     Return the length of the output buffer
int ob_get_level()
     Return the nesting level of the output buffering mechanism
int OCI-Collection::max()
     Returns the maximum number of elements in the collection
int OCI-Collection::size()
     Returns size of the collection
int OCI-Lob::erase([int $offset = `` [, int $length = ``]])
     Erases a specified portion of the internal LOB data
int OCI-Lob::size()
     Returns size of large object
int OCI-Lob::tell()
     Returns the current position of internal pointer of large object
int OCI-Lob::write(string $data [, int $length = ``])
     Writes data to the large object
int ocifetchinto(resource $statement, array $result [, int $mode =  + ])
     Fetches the next row into an array (deprecated)
int oci_fetch_all(resource $statement, array $output [, int $skip = `` [, int $maxrows = -1 [, int $flags =  + ]]])
     Fetches multiple rows from a query into a two-dimensional array
int oci_field_precision(resource $statement, int $field)
     Tell the precision of a field
int oci_field_scale(resource $statement, int $field)
     Tell the scale of the field
int oci_field_size(resource $statement, mixed $field)
     Returns field`s size
int oci_field_type_raw(resource $statement, int $field)
     Tell the raw Oracle data type of the field
int oci_num_fields(resource $statement)
     Returns the number of result columns in a statement
int oci_num_rows(resource $statement)
     Returns number of rows affected during statement execution
int odbc_field_len(resource $result_id, int $field_number)
     Get the length (precision) of a field
int odbc_field_num(resource $result_id, string $field_name)
     Return column number
int odbc_field_scale(resource $result_id, int $field_number)
     Get the scale of a field
int odbc_num_fields(resource $result_id)
     Number of columns in a result
int odbc_num_rows(resource $result_id)
     Number of rows in a result
int odbc_result_all(resource $result_id [, string $format = ``])
     Print result as HTML table
int openal_buffer_get(resource $buffer, int $property)
     Retrieve an OpenAL buffer property
int openssl_seal(string $data, string $sealed_data, array $env_keys, array $pub_key_ids [, string $method = ``])
     Seal (encrypt) data
int openssl_verify(string $data, string $signature, mixed $pub_key_id [, int $signature_alg = OPENSSL_ALGO_SHA1])
     Verify signature
int openssl_x509_checkpurpose(mixed $x509cert, int $purpose [, array $cainfo = array() [, string $untrustedfile = ``]])
     Verifies if a certificate can be used for a particular purpose
int ord(string $string)
     Return ASCII value of character
int pclose(resource $handle)
     Closes process file pointer
int pcntl_alarm(int $seconds)
     Set an alarm clock for delivery of a signal
int pcntl_fork()
     Forks the currently running process
int pcntl_getpriority([int $pid = getmypid() [, int $process_identifier = PRIO_PROCESS]])
     Get the priority of any process
int pcntl_sigtimedwait(array $set [, array $siginfo = `` [, int $seconds = `` [, int $nanoseconds = ``]]])
     Waits for signals, with a timeout
int pcntl_sigwaitinfo(array $set [, array $siginfo = ``])
     Waits for signals
int pcntl_wait(int $status [, int $options = ``])
     Waits on or returns the status of a forked child
int pcntl_waitpid(int $pid, int $status [, int $options = ``])
     Waits on or returns the status of a forked child
int pcntl_wexitstatus(int $status)
     Returns the return code of a terminated child
int pcntl_wstopsig(int $status)
     Returns the signal which caused the child to stop
int pcntl_wtermsig(int $status)
     Returns the signal which caused the child to terminate
int PDF_add_table_cell(resource $pdfdoc, int $table, int $column, int $row, string $text, string $optlist)
     Add a cell to a new or existing table
int PDF_add_textflow(resource $pdfdoc, int $textflow, string $text, string $optlist)
     Create Textflow or add text to existing Textflow
int PDF_begin_document(resource $pdfdoc, string $filename, string $optlist)
     Create new PDF file
int PDF_begin_item(resource $pdfdoc, string $tag, string $optlist)
     Open structure element or other content item
int PDF_begin_pattern(resource $pdfdoc, float $width, float $height, float $xstep, float $ystep, int $painttype)
     Start pattern definition
int PDF_begin_template(resource $pdfdoc, float $width, float $height)
     Start template definition [deprecated]
int PDF_begin_template_ext(resource $pdfdoc, float $width, float $height, string $optlist)
     Start template definition
int PDF_create_3dview(resource $pdfdoc, string $username, string $optlist)
     Create 3D view
int PDF_create_action(resource $pdfdoc, string $type, string $optlist)
     Create action for objects or events
int PDF_create_bookmark(resource $pdfdoc, string $text, string $optlist)
     Create bookmark
int PDF_create_gstate(resource $pdfdoc, string $optlist)
     Create graphics state object
int PDF_create_textflow(resource $pdfdoc, string $text, string $optlist)
     Create textflow object
int PDF_define_layer(resource $pdfdoc, string $name, string $optlist)
     Create layer definition
int PDF_delete_pvf(resource $pdfdoc, string $filename)
     Delete PDFlib virtual file
int PDF_fill_imageblock(resource $pdfdoc, int $page, string $blockname, int $image, string $optlist)
     Fill image block with variable data
int PDF_fill_pdfblock(resource $pdfdoc, int $page, string $blockname, int $contents, string $optlist)
     Fill PDF block with variable data
int PDF_fill_textblock(resource $pdfdoc, int $page, string $blockname, string $text, string $optlist)
     Fill text block with variable data
int PDF_findfont(resource $p, string $fontname, string $encoding, int $embed)
     Prepare font for later use [deprecated]
int PDF_get_errnum(resource $pdfdoc)
     Get error number
int PDF_get_majorversion()
     Get major version number [deprecated]
int PDF_get_minorversion()
     Get minor version number [deprecated]
int PDF_load_3ddata(resource $pdfdoc, string $filename, string $optlist)
     Load 3D model
int PDF_load_font(resource $pdfdoc, string $fontname, string $encoding, string $optlist)
     Search and prepare font
int PDF_load_iccprofile(resource $pdfdoc, string $profilename, string $optlist)
     Search and prepare ICC profile
int PDF_load_image(resource $pdfdoc, string $imagetype, string $filename, string $optlist)
     Open image file
int PDF_makespotcolor(resource $p, string $spotname)
     Make spot color
int PDF_open_ccitt(resource $pdfdoc, string $filename, int $width, int $height, int $BitReverse, int $k, int $Blackls1)
     Open raw CCITT image [deprecated]
int PDF_open_image(resource $p, string $imagetype, string $source, string $data, int $length, int $width, int $height, int $components, int $bpc, string $params)
     Use image data [deprecated]
int PDF_open_image_file(resource $p, string $imagetype, string $filename, string $stringparam, int $intparam)
     Read image from file [deprecated]
int PDF_open_memory_image(resource $p, resource $image)
     Open image created with PHP`s image functions [not supported]
int PDF_open_pdi(resource $pdfdoc, string $filename, string $optlist, int $len)
     Open PDF file [deprecated]
int PDF_open_pdi_document(resource $p, string $filename, string $optlist)
     Prepare a pdi document
int PDF_open_pdi_page(resource $p, int $doc, int $pagenumber, string $optlist)
     Prepare a page
int PDF_process_pdi(resource $pdfdoc, int $doc, int $page, string $optlist)
     Process imported PDF document
int PDF_shading(resource $pdfdoc, string $shtype, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist)
     Define blend
int PDF_shading_pattern(resource $pdfdoc, int $shading, string $optlist)
     Define shading pattern
int PDF_show_boxed(resource $p, string $text, float $left, float $top, float $width, float $height, string $mode, string $feature)
     Output text in a box [deprecated]
int PDO::exec(string $statement)
     Execute an SQL statement and return the number of affected rows
int PDO::setAttribute(int $attribute, mixed $value)
     Set an attribute
int PDOStatement::columnCount()
     Returns the number of columns in the result set
int PDOStatement::rowCount()
     Returns the number of rows affected by the last SQL statement
int pg_affected_rows(resource $result)
     Returns number of affected records (tuples)
int pg_connection_status(resource $connection)
     Get connection status
int pg_field_is_null(resource $result, int $row, mixed $field)
     Test if a field is SQL NULL
int pg_field_num(resource $result, string $field_name)
     Returns the field number of the named field
int pg_field_size(resource $result, int $field_number)
     Returns the internal storage size of the named field
int pg_field_type_oid(resource $result, int $field_number)
     Returns the type ID (OID) for the corresponding field number
int pg_get_pid(resource $connection)
     Gets the backend`s process ID
int pg_lo_create([resource $connection = ``, mixed $object_id])
     Create a large object
int pg_lo_import([resource $connection = ``, string $pathname [, mixed $object_id = ``]])
     Import a large object from file
int pg_lo_read_all(resource $large_object)
     Reads an entire large object and send straight to browser
int pg_lo_tell(resource $large_object)
     Returns current seek position a of large object
int pg_lo_write(resource $large_object, string $data [, int $len = ``])
     Write to a large object
int pg_num_fields(resource $result)
     Returns the number of fields in a result
int pg_num_rows(resource $result)
     Returns the number of rows in a result
int pg_port([resource $connection = ``])
     Return the port number associated with the connection
int pg_set_client_encoding([resource $connection = ``, string $encoding])
     Set the client encoding
int pg_set_error_verbosity([resource $connection = ``, int $verbosity])
     Determines the verbosity of messages returned by pg_last_error    and pg_result_error.
int pg_transaction_status(resource $connection)
     Returns the current in-transaction status of the server.
int Phar::count()
     Returns the number of entries (files) in the Phar archive
int Phar::offsetGet(string $offset)
     Gets a PharFileInfo object for a specific file
int PharFileInfo::getCompressedSize()
     Returns the actual size of the file (with compression) inside the Phar archive
int PharFileInfo::getCRC32()
     Returns CRC32 code or throws an exception if CRC has not been verified
int PharFileInfo::getPharFlags()
     Returns the Phar file entry flags
int posix_getegid()
     Return the effective group ID of the current process
int posix_geteuid()
     Return the effective user ID of the current process
int posix_getgid()
     Return the real group ID of the current process
int posix_getpgid(int $pid)
     Get process group id for job control
int posix_getpgrp()
     Return the current process group identifier
int posix_getpid()
     Return the current process identifier
int posix_getppid()
     Return the parent process identifier
int posix_getsid(int $pid)
     Get the current sid of the process
int posix_getuid()
     Return the real user ID of the current process
int posix_get_last_error()
     Retrieve the error number set by the last posix function that failed
int posix_setsid()
     Make the current process a session leader
int preg_last_error()
     Returns the error code of the last PCRE regex execution
int preg_match(string $pattern, string $subject [, array $matches = `` [, int $flags = `` [, int $offset = ``]]])
     Perform a regular expression match
int preg_match_all(string $pattern, string $subject, array $matches [, int $flags = `` [, int $offset = ``]])
     Perform a global regular expression match
int print(string $arg)
     Output a string
int printf(string $format [, mixed $args = `` [, mixed $... = ``]])
     Output a formatted string
int proc_close(resource $process)
     Close a process opened by proc_open and return the exit code of that process
int pspell_config_create(string $language [, string $spelling = `` [, string $jargon = `` [, string $encoding = ``]]])
     Create a config used to open a dictionary
int pspell_new(string $language [, string $spelling = `` [, string $jargon = `` [, string $encoding = `` [, int $mode = ``]]]])
     Load a new dictionary
int pspell_new_config(int $config)
     Load a new dictionary with settings based on a given config
int pspell_new_personal(string $personal, string $language [, string $spelling = `` [, string $jargon = `` [, string $encoding = `` [, int $mode = ``]]]])
     Load a new dictionary with personal wordlist
int ps_add_bookmark(resource $psdoc, string $text [, int $parent = `` [, int $open = ``]])
     Add bookmark to current page
int ps_begin_pattern(resource $psdoc, float $width, float $height, float $xstep, float $ystep, int $painttype)
     Start a new pattern
int ps_begin_template(resource $psdoc, float $width, float $height)
     Start a new template
int ps_findfont(resource $psdoc, string $fontname, string $encoding [, bool $embed = false])
     Loads a font
int ps_makespotcolor(resource $psdoc, string $name [, int $reserved = ``])
     Create spot color
int ps_open_image(resource $psdoc, string $type, string $source, string $data, int $lenght, int $width, int $height, int $components, int $bpc, string $params)
     Reads an image for later placement
int ps_open_image_file(resource $psdoc, string $type, string $filename [, string $stringparam = `` [, int $intparam = ``]])
     Opens image from file
int ps_open_memory_image(resource $psdoc, int $gd)
     Takes an GD image and returns an image for placement in a PS document
int ps_shading(resource $psdoc, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist)
     Creates a shading for later use
int ps_shading_pattern(resource $psdoc, int $shadingid, string $optlist)
     Creates a pattern based on a shading
int ps_show_boxed(resource $psdoc, string $text, float $left, float $bottom, float $width, float $height, string $hmode [, string $feature = ``])
     Output text in a box
int px_insert_record(resource $pxdoc, array $data)
     Inserts record into paradox database
int px_numfields(resource $pxdoc)
     Returns number of fields in a database
int px_numrecords(resource $pxdoc)
     Returns number of records in a database
int radius_cvt_int(string $data)
     Converts raw data to integer
int radius_send_request(resource $radius_handle)
     Sends the request and waites for a reply
int rand(int $min, int $max)
     Generate a random integer
int RarEntry::getAttr()
     Get attributes of the entry
int RarEntry::getHostOs()
     Get entry host OS
int RarEntry::getMethod()
     Get pack method of the entry
int RarEntry::getPackedSize()
     Get packed size of the entry
int RarEntry::getUnpackedSize()
     Get unpacked size of the entry
int RarEntry::getVersion()
     Get minimum version of RAR program required to unpack the entry
int readfile(string $filename [, bool $use_include_path = false [, resource $context = ``]])
     Outputs a file
int readgzfile(string $filename [, int $use_include_path = ``])
     Output a gz-file
int realpath_cache_size()
     Get realpath cache size
int RecursiveIteratorIterator::getDepth()
     Get the current depth of the recursive iteration
int ReflectionClass::getEndLine()
     Gets end line
int ReflectionClass::getModifiers()
     Gets modifiers
int ReflectionClass::getStartLine()
     Gets starting line number
int ReflectionFunctionAbstract::getEndLine()
     Gets end line number
int ReflectionFunctionAbstract::getNumberOfParameters()
     Gets number of parameters
int ReflectionFunctionAbstract::getNumberOfRequiredParameters()
     Gets number of required parameters
int ReflectionFunctionAbstract::getStartLine()
     Gets starting line number
int ReflectionMethod::getModifiers()
     Gets the method modifiers
int ReflectionParameter::getPosition()
     Gets parameter position
int ReflectionProperty::getModifiers()
     Gets modifiers
int RegexIterator::getFlags()
     Get flags
int RegexIterator::getMode()
     Returns operation mode.
int RegexIterator::getPregFlags()
     Returns the regular expression flags.
int ResourceBundle::count(ResourceBundle $r)
     Get number of elements in the bundle
int ResourceBundle::getErrorCode(ResourceBundle $r)
     Get bundle`s last error code.
int resourcebundle_count(ResourceBundle $r)
     Get number of elements in the bundle
int resourcebundle_get_error_code(ResourceBundle $r)
     Get bundle`s last error code.
int rrd_first(string $file [, int $raaindex = ``])
     Gets the timestamp of the first sample from rrd file.
int rrd_last(string $filename)
     Gets unix timestamp of the last sample.
int SAMConnection::errno()
     Contains the unique numeric error code of the last executed SAM operation.
int SDO_DAS_ChangeSummary::getChangeType(SDO_DataObject $dataObject)
     Get the type of change made to an SDO_DataObject
int SDO_DAS_Setting::getListIndex()
     Get the list index for a changed many-valued property
int SDO_DAS_Setting::getPropertyIndex()
     Get the property index for a changed property
int session_cache_expire([string $new_cache_expire = ``])
     Return current cache expire
int shmop_open(int $key, string $flags, int $mode, int $size)
     Create or open shared memory block
int shmop_size(int $shmid)
     Get size of shared memory block
int shmop_write(int $shmid, string $data, int $offset)
     Write data into shared memory block
int similar_text(string $first, string $second [, float $percent = ``])
     Calculate the similarity between two strings
int SimpleXMLElement::count()
     Counts the children of an element
int sleep(int $seconds)
     Delay execution
int snmp_get_valueretrieval()
     Return the method how the SNMP values will be returned
int socket_last_error([resource $socket = ``])
     Returns the last error on the socket
int socket_recv(resource $socket, string $buf, int $len, int $flags)
     Receives data from a connected socket
int socket_recvfrom(resource $socket, string $buf, int $len, int $flags, string $name [, int $port = ``])
     Receives data from a socket whether or not it is connection-oriented
int socket_select(array $read, array $write, array $except, int $tv_sec [, int $tv_usec = ``])
     Runs the select() system call on the given arrays of sockets with a specified timeout
int socket_send(resource $socket, string $buf, int $len, int $flags)
     Sends data to a connected socket
int socket_sendto(resource $socket, string $buf, int $len, int $flags, string $addr [, int $port = ``])
     Sends a message to a socket, whether it is connected or not
int socket_write(resource $socket, string $buffer [, int $length = ``])
     Write to a socket
int SolrDocument::getFieldCount()
     Returns the number of fields in this document
int SolrInputDocument::getFieldCount()
     Returns the number of fields in the document
int SolrQuery::getFacetLimit([string $field_override = ``])
     Returns the maximum number of constraint counts that should be returned for the facet fields
int SolrQuery::getFacetMinCount([string $field_override = ``])
     Returns the minimum counts for facet fields should be included in the response
int SolrQuery::getFacetOffset([string $field_override = ``])
     Returns an offset into the list of constraints to be used for pagination
int SolrQuery::getFacetSort([string $field_override = ``])
     Returns the facet sort type
int SolrQuery::getHighlightFragsize([string $field_override = ``])
     Returns the number of characters of fragments to consider for highlighting
int SolrQuery::getHighlightMaxAlternateFieldLength([string $field_override = ``])
     Returns the maximum number of characters of the field to return
int SolrQuery::getHighlightMaxAnalyzedChars()
     Returns the maximum number of characters into a document to look for suitable snippets
int SolrQuery::getHighlightRegexMaxAnalyzedChars()
     Returns the maximum number of characters from a field when using the regex fragmenter
int SolrQuery::getHighlightSnippets([string $field_override = ``])
     Returns the maximum number of highlighted snippets to generate per field
int SolrQuery::getMltCount()
     Returns the number of similar documents to return for each result
int SolrQuery::getMltMaxNumQueryTerms()
     Returns the maximum number of query terms that will be included in any generated query
int SolrQuery::getMltMaxNumTokens()
     Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
int SolrQuery::getMltMaxWordLength()
     Returns the maximum word length above which words will be ignored
int SolrQuery::getMltMinDocFrequency()
     Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
int SolrQuery::getMltMinTermFrequency()
     Returns the frequency below which terms will be ignored in the source document
int SolrQuery::getMltMinWordLength()
     Returns the minimum word length below which words will be ignored
int SolrQuery::getRows()
     Returns the maximum number of documents
int SolrQuery::getStart()
     Returns the offset in the complete result set
int SolrQuery::getTermsLimit()
     Returns the maximum number of terms Solr should return
int SolrQuery::getTermsMaxCount()
     Returns the maximum document frequency
int SolrQuery::getTermsMinCount()
     Returns the minimum document frequency to return in order to be included
int SolrQuery::getTermsSort()
     Returns an integer indicating how terms are sorted
int SolrQuery::getTimeAllowed()
     Returns the time in milliseconds allowed for the query to finish
int SolrResponse::getHttpStatus()
     Returns the HTTP status of the response
int SphinxClient::addQuery(string $query [, string $index = \"*\" [, string $comment = \"\"]])
     Add query to multi-query batch
int SphinxClient::updateAttributes(string $index, array $attributes, array $values [, bool $mva = false])
     Update document attributes
int SplDoublyLinkedList::count()
     Counts the number of elements in the doubly linked list.
int SplDoublyLinkedList::getIteratorMode()
     Returns the mode of iteration
int SplFileInfo::getATime()
     Gets last access time of the file
int SplFileInfo::getCTime()
     Gets the inode change time
int SplFileInfo::getGroup()
     Gets the file group
int SplFileInfo::getInode()
     Gets the inode for the file
int SplFileInfo::getMTime()
     Gets the last modified time
int SplFileInfo::getOwner()
     Gets the owner of the file
int SplFileInfo::getPerms()
     Gets file permissions
int SplFileInfo::getSize()
     Gets file size
int SplFileObject::fpassthru()
     Output all remaining data on a file pointer
int SplFileObject::fseek(int $offset [, int $whence = SEEK_SET])
     Seek to a position
int SplFileObject::ftell()
     Return current file position
int SplFileObject::fwrite(string $str [, int $length = ``])
     Write to file
int SplFileObject::getMaxLineLen()
     Get maximum line length
int SplFileObject::key()
     Get line number
int SplFixedArray::count()
     Returns the size of the array
int SplFixedArray::getSize()
     Gets the size of the array
int SplFixedArray::key()
     Return current array index
int SplFixedArray::setSize(int $size)
     Change the size of an array
int SplHeap::compare(mixed $value1, mixed $value2)
     Compare elements in order to place them correctly in the heap while sifting up.
int SplHeap::count()
     Counts the number of elements in the heap.
int SplObjectStorage::count()
     Returns the number of objects in the storage
int SplObjectStorage::key()
     Returns the index at which the iterator currently is
int SplPriorityQueue::compare(mixed $priority1, mixed $priority2)
     Compare priorities in order to place elements correctly in the heap while sifting up.
int SplPriorityQueue::count()
     Counts the number of elements in the queue.
int SQLite3::changes()
     Returns the number of database rows that were changed (or inserted or   deleted) by the most recent SQL statement
int SQLite3::lastErrorCode()
     Returns the numeric result code of the most recent failed SQLite request
int SQLite3::lastInsertRowID()
     Returns the row ID of the most recent INSERT into the database
int SQLite3Result::columnType(int $column_number)
     Returns the type of the nth column
int SQLite3Result::numColumns()
     Returns the number of columns in the result set
int SQLite3Stmt::paramCount()
     Returns the number of parameters within the prepared statement
int SQLiteDatabase::changes(resource $dbhandle)
     Returns the number of rows that were changed by the most   recent SQL statement
int SQLiteDatabase::lastError(resource $dbhandle)
     Returns the error code of the last error for a database
int SQLiteDatabase::lastInsertRowid(resource $dbhandle)
     Returns the rowid of the most recently inserted row
int SQLiteResult::key(resource $result)
     Returns the current row index
int SQLiteResult::numFields(resource $result)
     Returns the number of fields in a result set
int SQLiteResult::numRows(resource $result)
     Returns the number of rows in a buffered result set
int SQLiteUnbuffered::numFields(resource $result)
     Returns the number of fields in a result set
int sqlite_changes(resource $dbhandle)
     Returns the number of rows that were changed by the most   recent SQL statement
int sqlite_key(resource $result)
     Returns the current row index
int sqlite_last_error(resource $dbhandle)
     Returns the error code of the last error for a database
int sqlite_last_insert_rowid(resource $dbhandle)
     Returns the rowid of the most recently inserted row
int sqlite_num_fields(resource $result)
     Returns the number of fields in a result set
int sqlite_num_rows(resource $result)
     Returns the number of rows in a buffered result set
int ssdeep_fuzzy_compare(string $signature1, string $signature2)
     Calculates the match score between two fuzzy hash signatures
int stats_rand_gen_ibinomial(int $n, float $pp)
     Generates a single random deviate from a binomial distribution whose number of trials is \"n\" (n >= 0) and whose probability of an event in each trial is \"pp\" ([0;1]). Method : algorithm BTPE
int stats_rand_gen_ibinomial_negative(int $n, float $p)
     Generates a single random deviate from a negative binomial distribution. Arguments : n - the number of trials in the negative binomial distribution from which a random deviate is to be generated (n > 0), p - the probability of an event (0 < p < 1)).
int stats_rand_gen_int()
     Generates random integer between 1 and 2147483562
int stats_rand_gen_ipoisson(float $mu)
     Generates a single random deviate from a Poisson distribution with mean \"mu\" (mu >= 0.0).
int stats_rand_gen_iuniform(int $low, int $high)
     Generates integer uniformly distributed between LOW (inclusive) and HIGH (inclusive)
int strcasecmp(string $str1, string $str2)
     Binary safe case-insensitive string comparison
int strcmp(string $str1, string $str2)
     Binary safe string comparison
int strcoll(string $str1, string $str2)
     Locale based string comparison
int strcspn(string $str1, string $str2 [, int $start = `` [, int $length = ``]])
     Find length of initial segment not matching mask
int streamWrapper::stream_tell()
     Retrieve the current position of a stream
int streamWrapper::stream_write(string $data)
     Write to stream
int stream_copy_to_stream(resource $source, resource $dest [, int $maxlength = -1 [, int $offset = ``]])
     Copies data from one stream to another
int stream_select(array $read, array $write, array $except, int $tv_sec [, int $tv_usec = ``])
     Runs the equivalent of the select() system call on the given   arrays of streams with a timeout specified by tv_sec and tv_usec
int stream_set_read_buffer(resource $stream, int $buffer)
     Set read file buffering on the given stream
int stream_set_write_buffer(resource $stream, int $buffer)
     Sets write file buffering on the given stream
int stream_socket_sendto(resource $socket, string $data [, int $flags = `` [, string $address = ``]])
     Sends a message to a socket, whether it is connected or not
int strlen(string $string)
     Get string length
int strnatcasecmp(string $str1, string $str2)
     Case insensitive string comparisons using a \"natural order\" algorithm
int strnatcmp(string $str1, string $str2)
     String comparisons using a \"natural order\" algorithm
int strncasecmp(string $str1, string $str2, int $len)
     Binary safe case-insensitive string comparison of the first n characters
int strncmp(string $str1, string $str2, int $len)
     Binary safe string comparison of the first n characters
int strpos(string $haystack, mixed $needle [, int $offset = ``])
     Find position of first occurrence of a string
int strripos(string $haystack, string $needle [, int $offset = ``])
     Find position of last occurrence of a case-insensitive string in a string
int strrpos(string $haystack, string $needle [, int $offset = ``])
     Find the position of the last occurrence of a substring in a string
int strspn(string $subject, string $mask [, int $start = `` [, int $length = ``]])
     Finds the length of the first segment of a string consisting   entirely of characters contained within a given mask.
int strtotime(string $time [, int $now = ``])
     Parse about any English textual datetime description into a Unix timestamp
int substr_compare(string $main_str, string $str, int $offset [, int $length = `` [, bool $case_insensitivity = false]])
     Binary safe comparison of two strings from an offset, up to length characters
int substr_count(string $haystack, string $needle [, int $offset = `` [, int $length = ``]])
     Count the number of substring occurrences
int svn_fs_check_path(resource $fsroot, string $path)
     Determines what kind of item lives at path in a given repository fsroot
int svn_fs_file_length(resource $fsroot, string $path)
     Returns the length of a file from a given version of the fs
int svn_fs_node_created_rev(resource $fsroot, string $path)
     Returns the revision in which path under fsroot was created
int svn_fs_youngest_rev(resource $fs)
     Returns the number of the youngest revision in the filesystem
int svn_repos_fs_commit_txn(resource $txn)
     Commits a transaction and returns the new revision
int svn_update(string $path [, int $revno = SVN_REVISION_HEAD [, bool $recurse = true]])
     Update working copy
int SWFMovie::output([int $compression = ``])
     Dumps your lovingly prepared movie out
int SWFMovie::save(string $filename [, int $compression = -1])
     Saves the SWF movie in a file
int SWFMovie::saveToFile(resource $x [, int $compression = -1])
     
int SWFMovie::streamMP3(mixed $mp3file [, float $skip = ``])
     Streams a MP3 file
int SWFShape::drawCubic(float $bx, float $by, float $cx, float $cy, float $dx, float $dy)
     Draws a cubic bezier curve using the current position and the three given points as control points
int SWFShape::drawCubicTo(float $bx, float $by, float $cx, float $cy, float $dx, float $dy)
     Draws a cubic bezier curve using the current position and the three given points as control points
int SWFShape::drawCurve(float $controldx, float $controldy, float $anchordx, float $anchordy [, float $targetdx = ``, float $targetdy])
     Draws a curve (relative)
int SWFShape::drawCurveTo(float $controlx, float $controly, float $anchorx, float $anchory [, float $targetx = ``, float $targety])
     Draws a curve
int SWFVideoStream::getNumFrames()
     Returns the number of frames in the video
int swf_getframe()
     Get the frame number of the current frame
int swf_nextid()
     Returns the next free object id
int SwishResults::seekResult(int $position)
     Set current seek pointer to the given position
int sybase_affected_rows([resource $link_identifier = ``])
     Gets number of affected rows in last query
int sybase_num_fields(resource $result)
     Gets the number of fields in a result set
int sybase_num_rows(resource $result)
     Get number of rows in a result set
int tidy::getStatus(tidy $object)
     Get status of specified document
int tidy::htmlver(tidy $object)
     Get the Detected HTML version for the specified document
int tidy_access_count(tidy $object)
     Returns the Number of Tidy accessibility warnings encountered for specified document
int tidy_config_count(tidy $object)
     Returns the Number of Tidy configuration errors encountered for specified document
int tidy_error_count(tidy $object)
     Returns the Number of Tidy errors encountered for specified document
int tidy_get_html_ver(tidy $object)
     Get the Detected HTML version for the specified document
int tidy_get_status(tidy $object)
     Get status of specified document
int tidy_warning_count(tidy $object)
     Returns the Number of Tidy warnings encountered for specified document
int time()
     Return current Unix timestamp
int TokyoTyrant::num()
     Number of records in the database
int TokyoTyrant::size(string $key)
     Returns the size of the value
int TokyoTyrantQuery::count()
     Counts records
int TokyoTyrantTable::genUid()
     Generate unique id
int TokyoTyrantTable::put(string $key, array $columns)
     Store a row
int Transliterator::getErrorCode()
     Get last error code
int transliterator_get_error_code()
     Get last error code
int udm_api_version()
     Get mnoGoSearch API version
int udm_check_stored(resource $agent, int $link, string $doc_id)
     Check connection to stored
int udm_close_stored(resource $agent, int $link)
     Close connection to stored
int udm_crc32(resource $agent, string $str)
     Return CRC32 checksum of given string
int udm_errno(resource $agent)
     Get mnoGoSearch error number
int udm_free_agent(resource $agent)
     Free mnoGoSearch session
int udm_get_doc_count(resource $agent)
     Get total number of documents in database
int udm_hash32(resource $agent, string $str)
     Return Hash32 checksum of gived string
int udm_open_stored(resource $agent, string $storedaddr)
     Open connection to stored
int umask([int $mask = ``])
     Changes the current umask
int unixtojd([int $timestamp = time()])
     Convert Unix timestamp to Julian Day
int V8JsException::getJsLineNumber()
     The getJsLineNumber purpose
int V8JsException::getJsSourceLine()
     The getJsSourceLine purpose
int variant_cmp(mixed $left, mixed $right [, int $lcid = `` [, int $flags = ``]])
     Compares two variants
int variant_date_to_timestamp(variant $variant)
     Converts a variant date/time value to Unix timestamp
int variant_get_type(variant $variant)
     Returns the type of a variant object
int vfprintf(resource $handle, string $format, array $args)
     Write a formatted string to a stream
int vprintf(string $format, array $args)
     Output a formatted string
int win32_continue_service(string $servicename [, string $machine = ``])
     Resumes a paused service
int win32_get_last_control_message()
     Returns the last control message that was sent to this service
int win32_pause_service(string $servicename [, string $machine = ``])
     Pauses a service
int win32_start_service(string $servicename [, string $machine = ``])
     Starts a service
int win32_stop_service(string $servicename [, string $machine = ``])
     Stops a service
int xdiff_file_bdiff_size(string $file)
     Read a size of file created by applying a binary diff
int xdiff_string_bdiff_size(string $patch)
     Read a size of file created by applying a binary diff
int xmlrpc_server_add_introspection_data(resource $server, array $desc)
     Adds introspection documentation
int xmlrpc_server_destroy(resource $server)
     Destroys server resources
int xml_get_current_byte_index(resource $parser)
     Get current byte index for an XML parser
int xml_get_current_column_number(resource $parser)
     Get current column number for an XML parser
int xml_get_current_line_number(resource $parser)
     Get current line number for an XML parser
int xml_get_error_code(resource $parser)
     Get XML parser error code
int xml_parse(resource $parser, string $data [, bool $is_final = false])
     Start parsing an XML document
int xml_parse_into_struct(resource $parser, string $data, array $values [, array $index = ``])
     Parse XML data into an array structure
int XSLTProcessor::transformToUri(DOMDocument $doc, string $uri)
     Transform to URI
int xslt_errno(resource $xh)
     Returns an error number
int xslt_getopt(resource $processor)
     Get options on a given xsl processor
int yaz_errno(resource $id)
     Returns error number
int yaz_hits(resource $id [, array $searchresult = ``])
     Returns number of hits for last search
int yp_errno()
     Returns the error code of the previous operation
int yp_order(string $domain, string $map)
     Returns the order number for a map
int zend_thread_id()
     Returns a unique identifier for the current thread
int zip_entry_compressedsize(resource $zip_entry)
     Retrieve the compressed size of a directory entry
int zip_entry_filesize(resource $zip_entry)
     Retrieve the actual file size of a directory entry
 is_double()
     Alias of is_float
 is_integer()
     Alias of is_int
 is_long()
     Alias of is_int
 is_real()
     Alias of is_float
 is_writeable()
     Alias of is_writable
Iterator FilterIterator::getInnerIterator()
     Get the inner iterator
 IteratorIterator::__construct(Traversable $iterator)
     Create an iterator from anything that is traversable
Iterator LimitIterator::getInnerIterator()
     Get inner iterator
iterator NoRewindIterator::getInnerIterator()
     Get the inner iterator
Iterator OuterIterator::getInnerIterator()
     Returns the inner iterator for the current entry.
iterator RecursiveIteratorIterator::getInnerIterator()
     Get inner iterator
 join()
     Alias of implode
Judy Judy::__construct(int $judy_type)
     Construct a new Judy object
KTaglib_ID3v1_Tag KTaglib_MPEG_File::getID3v1Tag([bool $create = false])
     Returns an object representing an ID3v1 tag
KTaglib_ID3v2_Tag KTaglib_MPEG_File::getID3v2Tag([bool $create = false])
     Returns a ID3v2 object
 KTaglib_MPEG_File::__construct(string $filename)
     Opens a new file
KTaglib_MPEG_File: KTaglib_MPEG_File::getAudioProperties()
     Returns an object that provides access to the audio properties
 ldap_close()
     Alias of ldap_unbind
LibXMLError libxml_get_last_error()
     Retrieve last error from libxml
 LimitIterator::__construct(Iterator $iterator [, int $offset = `` [, int $count = -1]])
     Construct a LimitIterator
 magic_quotes_runtime()
     Alias of set_magic_quotes_runtime
 main()
     Dummy for main
 maxdb::close_long_data()
     Alias of maxdb_stmt_close_long_data
 maxdb_bind_param()
     Alias of maxdb_stmt_bind_param
 maxdb_bind_result()
     Alias of maxdb_stmt_bind_result
 maxdb_client_encoding()
     Alias of maxdb_character_set_name
 maxdb_close_long_data()
     Alias of maxdb_stmt_close_long_data
 maxdb_escape_string()
     Alias of maxdb_real_escape_string
 maxdb_execute()
     Alias of maxdb_stmt_execute
 maxdb_fetch()
     Alias of maxdb_stmt_fetch
 maxdb_get_metadata()
     Alias of maxdb_stmt_result_metadata
 maxdb_param_count()
     Alias of maxdb_stmt_param_count
 maxdb_send_long_data()
     Alias of maxdb_stmt_send_long_data
 maxdb_set_opt()
     Alias of maxdb_options
maxdb_stmt maxdb::prepare(resource $link, string $query)
     Prepare an SQL statement for execution
maxdb_stmt maxdb_prepare(resource $link, string $query)
     Prepare an SQL statement for execution
 Memcached::__construct([string $persistent_id = ``])
     Create a Memcached instance
MessageFormatter MessageFormatter::create(string $locale, string $pattern)
     Constructs a new Message Formatter
MessageFormatter MessageFormatter::__construct(string $locale, string $pattern)
     Constructs a new Message Formatter
MessageFormatter msgfmt_create(string $locale, string $pattern)
     Constructs a new Message Formatter
mixed APCIterator::current()
     Get current item
mixed apc_compile_file(string $filename [, bool $atomic = true])
     Stores a file in the bytecode cache, bypassing all filters.
mixed apc_delete(string $key)
     Removes a stored variable from the cache
mixed apc_delete_file(mixed $keys)
     Deletes files from the opcode cache
mixed apc_exists(mixed $keys)
     Checks if APC key exists
mixed apc_fetch(mixed $key [, bool $success = ``])
     Fetch a stored variable from the cache
mixed ArrayIterator::key()
     Return current array key
mixed ArrayIterator::offsetGet(string $index)
     Get value for an offset
mixed ArrayObject::offsetGet(mixed $index)
     Returns the value at the specified index
mixed array_rand(array $input [, int $num_req = 1])
     Pick one or more random entries out of an array
mixed array_reduce(array $input, callback $function [, mixed $initial = ``])
     Iteratively reduce the array to a single value using a callback function
mixed array_search(mixed $needle, array $haystack [, bool $strict = false])
     Searches the array for a given value and returns the corresponding key if successful
mixed assert_options(int $what [, mixed $value = ``])
     Set/get the various assert flags
mixed bzcompress(string $source [, int $blocksize = 4 [, int $workfactor = ``]])
     Compress a string into bzip2 encoded data
mixed bzdecompress(string $source [, int $small = ``])
     Decompresses bzip2 encoded data
mixed call_user_func(callback $function [, mixed $parameter = `` [, mixed $... = ``]])
     Call a user function given by the first parameter
mixed call_user_func_array(callback $function, array $param_arr)
     Call a user function given with an array of parameters
mixed call_user_method(string $method_name, object $obj [, mixed $parameter = `` [, mixed $... = ``]])
     Call a user method on an specific object [deprecated]
mixed call_user_method_array(string $method_name, object $obj, array $params)
     Call a user method given with an array of parameters [deprecated]
mixed constant(string $name)
     Returns the value of a constant
mixed count_chars(string $string [, int $mode = ``])
     Return information about characters used in a string
mixed cubrid_fetch(resource $result [, int $type = CUBRID_BOTH])
     Fetch the next row from a result set
mixed cubrid_get(resource $conn_identifier, string $oid [, mixed $attr = ``])
     Get a column using OID
mixed curl_exec(resource $ch)
     Perform a cURL session
mixed curl_getinfo(resource $ch [, int $opt = ``])
     Get information regarding a specific transfer
mixed current(array $array)
     Return the current element in an array
mixed date_sunrise(int $timestamp [, int $format = SUNFUNCS_RET_STRING [, float $latitude = ini_get(\"date.default_latitude\") [, float $longitude = ini_get(\"date.default_longitude\") [, float $zenith = ini_get(\"date.sunrise_zenith\") [, float $gmt_offset = ``]]]]])
     Returns time of sunrise for a given day and location
mixed date_sunset(int $timestamp [, int $format = SUNFUNCS_RET_STRING [, float $latitude = ini_get(\"date.default_latitude\") [, float $longitude = ini_get(\"date.default_longitude\") [, float $zenith = ini_get(\"date.sunset_zenith\") [, float $gmt_offset = ``]]]]])
     Returns time of sunset for a given day and location
mixed db2_autocommit(resource $connection [, bool $value = ``])
     Returns or sets the AUTOCOMMIT state for a database connection
mixed db2_result(resource $stmt, mixed $column)
     Returns a single column from a row in the result set
mixed dba_key_split(mixed $key)
     Splits a key in string representation into array representation
mixed dbplus_close(resource $relation)
     Close a relation
mixed dbplus_rcrtexact(string $name, resource $relation [, bool $overwrite = ``])
     Creates an exact but empty copy of a relation including indices
mixed dbplus_rcrtlike(string $name, resource $relation [, int $overwrite = ``])
     Creates an empty copy of a relation with default indices
mixed dbplus_rkeys(resource $relation, mixed $domlist)
     Specify new primary key for a relation
mixed dbplus_rsecindex(resource $relation, mixed $domlist, int $type)
     Create a new secondary index for a relation
mixed dbx_fetch_row(object $result_identifier)
     Fetches rows from a query-result that had the   DBX_RESULT_UNBUFFERED flag set
mixed dbx_query(object $link_identifier, string $sql_statement [, int $flags = ``])
     Send a query and fetch all results (if any)
mixed dio_fcntl(resource $fd, int $cmd [, mixed $args = ``])
     Performs a c library fcntl on fd
mixed DOMDocument::load(string $filename [, int $options = ``])
     Load XML from a file
mixed DOMDocument::loadXML(string $source [, int $options = ``])
     Load XML from a string
mixed DOMXPath::evaluate(string $expression [, DOMNode $contextnode = `` [, bool $registerNodeNS = true]])
     Evaluates the given XPath expression and returns a typed result if possible
mixed enchant_broker_list_dicts(resource $broker)
     Returns a list of available dictionaries
mixed enchant_dict_describe(resource $dict)
     Describes an individual dictionary
mixed end(array $array)
     Set the internal pointer of an array to its last element
mixed eval(string $code_str)
     Evaluate a string as PHP code
mixed fbsql_result(resource $result [, int $row = `` [, mixed $field = ``]])
     Get result data
mixed fdf_get_opt(resource $fdf_document, string $fieldname [, int $element = -1])
     Gets a value from the opt array of a field
mixed fdf_get_value(resource $fdf_document, string $fieldname [, int $which = -1])
     Get the value of a field
mixed FilesystemIterator::current()
     The current file
mixed FilterIterator::current()
     Get the current element value
mixed FilterIterator::key()
     Get the current key
mixed filter_input(int $type, string $variable_name [, int $filter = FILTER_DEFAULT [, mixed $options = ``]])
     Gets a specific external variable by name and optionally filters it
mixed filter_input_array(int $type [, mixed $definition = ``])
     Gets external variables and optionally filters them
mixed filter_var(mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options = ``]])
     Filters a variable with a specified filter
mixed filter_var_array(array $data [, mixed $definition = ``])
     Gets multiple variables and optionally filters them
mixed forward_static_call(callback $function [, mixed $parameter = `` [, mixed $... = ``]])
     Call a static method
mixed forward_static_call_array(callback $function, array $parameters)
     Call a static method and pass the arguments as array
mixed fscanf(resource $handle, string $format [, mixed $... = ``])
     Parses input from a file according to a format
mixed ftp_get_option(resource $ftp_stream, int $option)
     Retrieves various runtime behaviours of the current FTP stream
mixed func_get_arg(int $arg_num)
     Return an item from the argument list
mixed gettimeofday([bool $return_float = ``])
     Get current time
mixed get_browser([string $user_agent = `` [, bool $return_array = false]])
     Tells what the user`s browser is capable of
mixed Gmagick::hasnextimage()
     Checks if the object has more images
mixed Gmagick::haspreviousimage()
     Checks if the object has a previous image
mixed Gmagick::implodeimage(float $radius)
     Creates a new image as a copy
mixed Gmagick::labelimage(string $label)
     Adds a label to an image.
mixed Gmagick::levelimage(float $blackPoint, float $gamma, float $whitePoint [, int $channel = Gmagick::CHANNEL_DEFAULT])
     Adjusts the levels of an image
mixed Gmagick::magnifyimage()
     Scales an image proportionally 2x
mixed GmagickPixel::getcolor([bool $as_array = `` [, bool $normalize_array = ``]])
     Returns the color
mixed gupnp_service_action_get(resource $action, string $name, int $type)
     Retrieves the specified action arguments
mixed gupnp_service_info_get_introspection(resource $proxy [, mixed $callback = `` [, mixed $arg = ``]])
     Get resource introspection of service
mixed gupnp_service_proxy_action_get(resource $proxy, string $action, string $name, int $type)
     Send action to the service and get value
mixed highlight_file(string $filename [, bool $return = false])
     Syntax highlighting of a file
mixed highlight_string(string $str [, bool $return = false])
     Syntax highlighting of a string
mixed HttpQueryString::get([string $key = `` [, mixed $type = `` [, mixed $defval = `` [, bool $delete = false]]]])
     Get (part of) query string
mixed HttpRequest::getResponseHeader([string $name = ``])
     Get response header(s)
mixed HttpRequest::getResponseInfo([string $name = ``])
     Get response info
mixed HttpResponse::getHeader([string $name = ``])
     Get header
mixed hw_GetObject(int $connection, mixed $objectID [, string $query = ``])
     Object record
mixed hw_getremotechildren(int $connection, string $object_record)
     Gets children of remote document
mixed ibase_backup(resource $service_handle, string $source_db, string $dest_file [, int $options = `` [, bool $verbose = false]])
     Initiates a backup task in the service manager and returns immediately
mixed ibase_blob_close(resource $blob_handle)
     Close blob
mixed ibase_gen_id(string $generator [, int $increment = 1 [, resource $link_identifier = ``]])
     Increments the named generator and returns its new value
mixed ibase_restore(resource $service_handle, string $source_file, string $dest_db [, int $options = `` [, bool $verbose = false]])
     Initiates a restore task in the service manager and returns immediately
mixed iconv_get_encoding([string $type = \"all\"])
     Retrieve internal configuration variables of iconv extension
mixed imap_timeout(int $timeout_type [, int $timeout = -1])
     Set or fetch imap timeout
mixed ingres_prepare(resource $link, string $query)
     Prepare a query for later execution
mixed ingres_query(resource $link, string $query [, array $params = `` [, string $types = ``]])
     Send an SQL query to Ingres
mixed ingres_unbuffered_query(resource $link, string $query [, array $params = `` [, string $types = ``]])
     Send an unbuffered  SQL query to Ingres
mixed iptcembed(string $iptcdata, string $jpeg_file_name [, int $spool = ``])
     Embeds binary IPTC data into a JPEG image
mixed JDDayOfWeek(int $julianday [, int $mode = CAL_DOW_DAYNO])
     Returns the day of the week
mixed json_decode(string $json [, bool $assoc = false [, int $depth = 512 [, int $options = ``]]])
     Decodes a JSON string
mixed Judy::first([mixed $index = ``])
     Search for the first index in the Judy array
mixed Judy::next(mixed $index)
     Search for the next index in the Judy array
mixed Judy::offsetGet(mixed $offset)
     Offset to retrieve
mixed Judy::prev(mixed $index)
     Search for the previous index in the Judy array
mixed key(array $array)
     Fetch a key from an array
mixed ldap_compare(resource $link_identifier, string $dn, string $attribute, string $value)
     Compare value of attribute found in entry specified with DN
mixed LimitIterator::current()
     Get current element
mixed LimitIterator::key()
     Get current key
mixed maxdb::insert_id(resource $link)
     Returns the auto generated id used in the last query
mixed maxdb::query(resource $link, string $query [, int $resultmode = ``])
     Performs a query on the database
mixed maxdb_fetch_array(resource $result [, int $resulttype = ``])
     Fetch a result row as an associative, a numeric array, or both
mixed maxdb_fetch_field(resource $result)
     Returns the next field in the result set
mixed maxdb_fetch_fields(resource $result)
     Returns an array of resources representing the fields in a result set
mixed maxdb_fetch_field_direct(resource $result, int $fieldnr)
     Fetch meta-data for a single field
mixed maxdb_fetch_row(resource $result)
     Get a result row as an enumerated array
mixed maxdb_insert_id(resource $link)
     Returns the auto generated id used in the last query
mixed maxdb_query(resource $link, string $query [, int $resultmode = ``])
     Performs a query on the database
mixed maxdb_result::fetch_array(resource $result [, int $resulttype = ``])
     Fetch a result row as an associative, a numeric array, or both
mixed maxdb_result::fetch_field(resource $result)
     Returns the next field in the result set
mixed maxdb_result::fetch_fields(resource $result)
     Returns an array of resources representing the fields in a result set
mixed maxdb_result::fetch_field_direct(resource $result, int $fieldnr)
     Fetch meta-data for a single field
mixed maxdb_result::fetch_row(resource $result)
     Get a result row as an enumerated array
mixed maxdb_stmt::prepare(resource $stmt, string $query)
     Prepare an SQL statement for execution
mixed maxdb_stmt_prepare(resource $stmt, string $query)
     Prepare an SQL statement for execution
mixed mb_detect_order([mixed $encoding_list = ``])
     Set/Get character encoding detection order
mixed mb_get_info([string $type = \"all\"])
     Get internal settings of mbstring
mixed mb_http_input([string $type = \"\"])
     Detect HTTP input character encoding
mixed mb_http_output([string $encoding = ``])
     Set/Get HTTP output character encoding
mixed mb_internal_encoding([string $encoding = mb_internal_encoding()])
     Set/Get internal character encoding
mixed mb_language([string $language = ``])
     Set/Get current language
mixed Memcached::get(string $key [, callback $cache_cb = `` [, float $cas_token = ``]])
     Retrieve an item
mixed Memcached::getByKey(string $server_key, string $key [, callback $cache_cb = `` [, float $cas_token = ``]])
     Retrieve an item from a specific server
mixed Memcached::getMulti(array $keys [, array $cas_tokens = `` [, int $flags = ``]])
     Retrieve multiple items
mixed Memcached::getOption(int $option)
     Retrieve a Memcached option value
mixed microtime([bool $get_as_float = ``])
     Return current Unix timestamp with microseconds
mixed MongoCollection::batchInsert(array $a [, array $options = array()])
     Inserts multiple documents into this collection
mixed MongoCollection::insert(array $a [, array $options = array()])
     Inserts an array into the collection
mixed MongoCollection::remove([array $criteria = array() [, array $options = array()]])
     Remove records from this collection
mixed MongoCollection::save(array $a [, array $options = array()])
     Saves an object to this collection
mixed MongoGridFS::put(string $filename [, array $extra = array()])
     Stores a file in the database
mixed MongoGridFS::storeBytes(string $bytes [, array $extra = array() [, array $options = array()]])
     Chunkifies and stores bytes in the database
mixed MongoGridFS::storeFile(string $filename [, array $extra = array() [, array $options = array()]])
     Stores a file in the database
mixed MongoGridFS::storeUpload(string $name [, string $filename = ``])
     Saves an uploaded file to the database
mixed mssql_execute(resource $stmt [, bool $skip_results = false])
     Executes a stored procedure on a MS SQL server database
mixed mssql_query(string $query [, resource $link_identifier = `` [, int $batch_size = ``]])
     Send MS SQL query
mixed mysqli::insert_id(mysqli $link)
     Returns the auto generated id used in the last query
mixed mysqli::query(string $query [, int $resultmode = ``, mysqli $link])
     Performs a query on the database
mixed mysqli_fetch_all([int $resulttype = MYSQLI_NUM, mysqli_result $result])
     Fetches all result rows as an associative array, a numeric array, or both
mixed mysqli_fetch_array([int $resulttype = MYSQLI_BOTH, mysqli_result $result])
     Fetch a result row as an associative, a numeric array, or both
mixed mysqli_fetch_row(mysqli_result $result)
     Get a result row as an enumerated array
mixed mysqli_insert_id(mysqli $link)
     Returns the auto generated id used in the last query
mixed mysqli_query(string $query [, int $resultmode = ``, mysqli $link])
     Performs a query on the database
mixed mysqli_result::fetch_all([int $resulttype = MYSQLI_NUM, mysqli_result $result])
     Fetches all result rows as an associative array, a numeric array, or both
mixed mysqli_result::fetch_array([int $resulttype = MYSQLI_BOTH, mysqli_result $result])
     Fetch a result row as an associative, a numeric array, or both
mixed mysqli_result::fetch_row(mysqli_result $result)
     Get a result row as an enumerated array
mixed mysqli_stmt::insert_id(mysqli_stmt $stmt)
     Get the ID generated from the previous INSERT operation
mixed mysqli_stmt_insert_id(mysqli_stmt $stmt)
     Get the ID generated from the previous INSERT operation
mixed newt_checkbox_tree_get_current(resource $checkboxtree)
     Returns checkbox tree selected item
mixed newt_listitem_get_data(resource $item)
     
mixed next(array $array)
     Advance the internal array pointer of an array
mixed NoRewindIterator::current()
     Get the current value
mixed NoRewindIterator::key()
     Get the current key
mixed NumberFormatter::parse(string $value [, int $type = `` [, int $position = ``, NumberFormatter $fmt]])
     Parse a number
mixed numfmt_parse(string $value [, int $type = `` [, int $position = ``, NumberFormatter $fmt]])
     Parse a number
mixed OAuth::fetch(string $protected_resource_url [, array $extra_parameters = `` [, string $http_method = `` [, array $http_headers = ``]]])
     Fetch an OAuth protected resource
mixed OAuth::setAuthType(int $auth_type)
     Set authorization type
mixed OAuth::setCAPath([string $ca_path = `` [, string $ca_info = ``]])
     Set CA path and info
mixed OAuth::setNonce(string $nonce)
     Set the nonce for subsequent requests
mixed OAuth::setRSACertificate(string $cert)
     Set the RSA certificate
mixed OAuth::setTimestamp(string $timestamp)
     Set the timestamp
mixed OCI-Collection::getElem(int $index)
     Returns value of the element
mixed oci_field_type(resource $statement, int $field)
     Returns field`s data type
mixed oci_result(resource $statement, mixed $field)
     Returns field`s value from the fetched row
mixed odbc_autocommit(resource $connection_id [, bool $OnOff = false])
     Toggle autocommit behaviour
mixed odbc_result(resource $result_id, mixed $field)
     Get result data
mixed openal_listener_get(int $property)
     Retrieve a listener property
mixed openal_source_get(resource $source, int $property)
     Retrieve an OpenAL source property
mixed openssl_csr_new(array $dn, resource $privkey [, array $configargs = `` [, array $extraattribs = ``]])
     Generates a CSR
mixed openssl_pkcs7_verify(string $filename, int $flags [, string $outfilename = `` [, array $cainfo = `` [, string $extracerts = `` [, string $content = ``]]]])
     Verifies the signature of an S/MIME signed message
mixed parse_url(string $url [, int $component = -1])
     Parse a URL and return its components
mixed pathinfo(string $path [, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME])
     Returns information about a file path
mixed PDO::errorCode()
     Fetch the SQLSTATE associated with the last operation on the database handle
mixed PDO::getAttribute(int $attribute)
     Retrieve a database connection attribute
mixed PDOStatement::fetch([int $fetch_style = PDO::FETCH_BOTH [, int $cursor_orientation = PDO::FETCH_ORI_NEXT [, int $cursor_offset = ``]]])
     Fetches the next row from a result set
mixed PDOStatement::fetchObject([string $class_name = \"stdClass\" [, array $ctor_args = ``]])
     Fetches the next row and returns it as an object.
mixed PDOStatement::getAttribute(int $attribute)
     Retrieve a statement attribute
mixed pg_delete(resource $connection, string $table_name, array $assoc_array [, int $options = PGSQL_DML_EXEC])
     Deletes records
mixed pg_field_table(resource $result, int $field_number [, bool $oid_only = false])
     Returns the name or oid of the tables field
mixed pg_insert(resource $connection, string $table_name, array $assoc_array [, int $options = PGSQL_DML_EXEC])
     Insert array into table
mixed pg_result_status(resource $result [, int $type = ``])
     Get status of query result
mixed pg_select(resource $connection, string $table_name, array $assoc_array [, int $options = PGSQL_DML_EXEC])
     Select records
mixed pg_update(resource $connection, string $table_name, array $data, array $condition [, int $options = PGSQL_DML_EXEC])
     Update table
mixed Phar::getMetaData()
     Returns phar archive meta-data
mixed Phar::isCompressed()
     Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
mixed PharFileInfo::getMetaData()
     Returns file-specific meta-data saved with a file
mixed preg_filter(mixed $pattern, mixed $replacement, mixed $subject [, int $limit = -1 [, int $count = ``]])
     Perform a regular expression search and replace
mixed preg_replace(mixed $pattern, mixed $replacement, mixed $subject [, int $limit = -1 [, int $count = ``]])
     Perform a regular expression search and replace
mixed preg_replace_callback(mixed $pattern, callback $callback, mixed $subject [, int $limit = -1 [, int $count = ``]])
     Perform a regular expression search and replace using a callback
mixed prev(array $array)
     Rewind the internal array pointer
mixed print_r(mixed $expression [, bool $return = false])
     Prints human-readable information about a variable
mixed radius_get_attr(resource $radius_handle)
     Extracts an attribute
mixed readline_info([string $varname = `` [, string $newvalue = ``]])
     Gets/sets various internal readline variables
mixed RecursiveIteratorIterator::current()
     Access the current element value
mixed RecursiveIteratorIterator::getMaxDepth()
     Get max depth
mixed RecursiveIteratorIterator::key()
     Access the current key
mixed ReflectionClass::getConstant(string $name)
     Gets defined constants
mixed ReflectionClass::getStaticPropertyValue(string $name [, string $default = ``])
     Gets static property value
mixed ReflectionFunction::invoke([mixed $parameter = `` [, mixed $... = ``]])
     Invokes function
mixed ReflectionFunction::invokeArgs(array $args)
     Invokes function args
mixed ReflectionMethod::invoke(object $object [, mixed $parameter = `` [, mixed $... = ``]])
     Invoke
mixed ReflectionMethod::invokeArgs(object $object, array $args)
     Invoke args
mixed ReflectionParameter::getDefaultValue()
     Gets default parameter value
mixed ReflectionProperty::getValue(object $object)
     Gets value
mixed reset(array $array)
     Set the internal pointer of an array to its first element
mixed ResourceBundle::get(string|int $index, ResourceBundle $r)
     Get data from the bundle
mixed resourcebundle_get(string|int $index, ResourceBundle $r)
     Get data from the bundle
mixed rpm_get_tag(resource $rpmr, int $tagnum)
     Retrieves a header tag from an RPM file
mixed runkit_sandbox_output_handler(object $sandbox [, mixed $callback = ``])
     Specify a function to capture and/or process output from a runkit sandbox
mixed SCA::getService(string $target [, string $binding = `` [, array $config = ``]])
     Obtain a proxy for a service
mixed SDO_DAS_Setting::getValue()
     Get the old value for the changed property
mixed SDO_Exception::getCause()
     Get the cause of the exception.
mixed SDO_Model_Property::getDefault()
     Get the default value for the property
mixed SDO_Model_ReflectionDataObject::export(SDO_Model_ReflectionDataObject $rdo [, bool $return = ``])
     Get a string describing the SDO_DataObject.
mixed set_error_handler(callback $error_handler [, int $error_types = E_ALL | E_STRICT])
     Sets a user-defined error handler function
mixed shm_get_var(resource $shm_identifier, int $variable_key)
     Returns a variable from shared memory
mixed SimpleXMLElement::asXML([string $filename = ``])
     Return a well-formed XML string based on SimpleXML element
mixed SimpleXMLIterator::current()
     Returns the current element
mixed SimpleXMLIterator::key()
     Return current key
mixed SoapClient::__call(string $function_name, string $arguments)
     Calls a SOAP function (deprecated)
mixed SoapClient::__soapCall(string $function_name, array $arguments [, array $options = `` [, mixed $input_headers = `` [, array $output_headers = ``]]])
     Calls a SOAP function
mixed socket_get_option(resource $socket, int $level, int $optname)
     Gets socket options for the socket
mixed SolrObject::offsetGet(string $property_name)
     Used to retrieve a property
mixed SolrParams::get(string $param_name)
     This is an alias for SolrParams::getParam
mixed SolrParams::getParam([string $param_name = ``])
     Returns a parameter value
mixed SplDoublyLinkedList::bottom()
     Peeks at the node from the beginning of the doubly linked list
mixed SplDoublyLinkedList::current()
     Return current array entry
mixed SplDoublyLinkedList::key()
     Return current node index
mixed SplDoublyLinkedList::offsetGet(mixed $index)
     Returns the value at the specified $index
mixed SplDoublyLinkedList::pop()
     Pops a node from the end of the doubly linked list
mixed SplDoublyLinkedList::shift()
     Shifts a node from the beginning of the doubly linked list
mixed SplDoublyLinkedList::top()
     Peeks at the node from the end of the doubly linked list
mixed SplFileObject::fscanf(string $format [, mixed $... = ``])
     Parses input from file according to a format
mixed SplFixedArray::current()
     Return current array entry
mixed SplFixedArray::offsetGet(int $index)
     Returns the value at the specified index
mixed SplHeap::current()
     Return current node pointed by the iterator
mixed SplHeap::extract()
     Extracts a node from top of the heap and sift up.
mixed SplHeap::key()
     Return current node index
mixed SplHeap::top()
     Peeks at the node from the top of the heap
mixed SplObjectStorage::getInfo()
     Returns the data associated with the current iterator entry
mixed SplPriorityQueue::current()
     Return current node pointed by the iterator
mixed SplPriorityQueue::extract()
     Extracts a node from top of the heap and sift up.
mixed SplPriorityQueue::key()
     Return current node index
mixed SplPriorityQueue::top()
     Peeks at the node from the top of the queue
mixed SplQueue::dequeue()
     Dequeues a node from the queue
mixed SQLite3::querySingle(string $query [, bool $entire_row = false])
     Executes a query and returns a single result
mixed SQLiteResult::column(resource $result, mixed $index_or_name [, bool $decode_binary = true])
     Fetches a column from the current row of a result set
mixed SQLiteUnbuffered::column(resource $result, mixed $index_or_name [, bool $decode_binary = true])
     Fetches a column from the current row of a result set
mixed sqlite_column(resource $result, mixed $index_or_name [, bool $decode_binary = true])
     Fetches a column from the current row of a result set
mixed sscanf(string $str, string $format [, mixed $... = ``])
     Parses input from a string according to a format
mixed ssh2_auth_none(resource $session, string $username)
     Authenticate as \"none\"
mixed stream_socket_enable_crypto(resource $stream, bool $enable [, int $crypto_type = `` [, resource $session_stream = ``]])
     Turns encryption on/off on an already connected socket
mixed str_ireplace(mixed $search, mixed $replace, mixed $subject [, int $count = ``])
     Case-insensitive version of str_replace.
mixed str_replace(mixed $search, mixed $replace, mixed $subject [, int $count = ``])
     Replace all occurrences of the search string with the replacement string
mixed str_word_count(string $string [, int $format = `` [, string $charlist = ``]])
     Return information about words used in a string
mixed substr_replace(mixed $string, mixed $replacement, mixed $start [, mixed $length = ``])
     Replace text within a portion of a string
mixed SWFMovie::add(object $instance)
     Adds any type of data to a movie
mixed SWFMovie::addFont(SWFFont $font)
     
mixed sybase_query(string $query [, resource $link_identifier = ``])
     Sends a Sybase query
mixed tidy::getOpt(string $option, tidy $object)
     Returns the value of the specified configuration option for the tidy document
mixed tidy_getopt(string $option, tidy $object)
     Returns the value of the specified configuration option for the tidy document
mixed time_nanosleep(int $seconds, int $nanoseconds)
     Delay for a number of seconds and nanoseconds
mixed TokyoTyrant::putShl(string $key, string $value, int $width)
     Concatenates to a record
mixed TokyoTyrant::restore(string $log_dir, int $timestamp [, bool $check_consistency = true])
     Restore the database
mixed TokyoTyrant::setMaster(string $host, int $port, int $timestamp [, bool $check_consistency = true])
     Set the replication master
mixed TokyoTyrant::sync()
     Synchronize the database
mixed TokyoTyrant::vanish()
     Empties the database
mixed TokyoTyrantQuery::addCond(string $name, int $op, string $expr)
     Adds a condition to the query
mixed TokyoTyrantQuery::setLimit([int $max = `` [, int $skip = ``]])
     Limit results
mixed TokyoTyrantQuery::setOrder(string $name, int $type)
     Orders results
mixed TokyoTyrantTable::setIndex(string $column, int $type)
     Sets index
mixed unserialize(string $str)
     Creates a PHP value from a stored representation
mixed V8Js::executeString(string $script [, string $identifier = \"V8Js::executeString()\" [, int $flags = ``]])
     Execute a string as Javascript code
mixed variant_abs(mixed $val)
     Returns the absolute value of a variant
mixed variant_add(mixed $left, mixed $right)
     \"Adds\" two variant values together and returns the result
mixed variant_and(mixed $left, mixed $right)
     Performs a bitwise AND operation between two variants
mixed variant_cat(mixed $left, mixed $right)
     concatenates two variant values together and returns the result
mixed variant_div(mixed $left, mixed $right)
     Returns the result from dividing two variants
mixed variant_eqv(mixed $left, mixed $right)
     Performs a bitwise equivalence on two variants
mixed variant_fix(mixed $variant)
     Returns the integer portion of a variant
mixed variant_idiv(mixed $left, mixed $right)
     Converts variants to integers and then returns the result from dividing them
mixed variant_imp(mixed $left, mixed $right)
     Performs a bitwise implication on two variants
mixed variant_int(mixed $variant)
     Returns the integer portion of a variant
mixed variant_mod(mixed $left, mixed $right)
     Divides two variants and returns only the remainder
mixed variant_mul(mixed $left, mixed $right)
     Multiplies the values of the two variants
mixed variant_neg(mixed $variant)
     Performs logical negation on a variant
mixed variant_not(mixed $variant)
     Performs bitwise not negation on a variant
mixed variant_or(mixed $left, mixed $right)
     Performs a logical disjunction on two variants
mixed variant_pow(mixed $left, mixed $right)
     Returns the result of performing the power function with two variants
mixed variant_round(mixed $variant, int $decimals)
     Rounds a variant to the specified number of decimal places
mixed variant_sub(mixed $left, mixed $right)
     Subtracts the value of the right variant from the left variant value
mixed variant_xor(mixed $left, mixed $right)
     Performs a logical exclusion on two variants
mixed var_export(mixed $expression [, bool $return = false])
     Outputs or returns a parsable string representation of a variable
mixed version_compare(string $version1, string $version2 [, string $operator = ``])
     Compares two \"PHP-standardized\" version number strings
mixed w32api_invoke_function(string $funcname, mixed $argument [, mixed $... = ``])
     Invokes function funcname with the arguments passed after the function name
mixed wddx_deserialize(string $packet)
     Unserializes a WDDX packet
mixed win32_create_service(array $details [, string $machine = ``])
     Creates a new service entry in the SCM database
mixed win32_delete_service(string $servicename [, string $machine = ``])
     Deletes a service entry from the SCM database
mixed win32_query_service_status(string $servicename [, string $machine = ``])
     Queries the status of a service
mixed win32_start_service_ctrl_dispatcher(string $name)
     Registers the script with the SCM, so that it can act as the service with the given name
mixed wincache_ucache_dec(string $key [, int $dec_by = 1 [, bool $success = ``]])
     Decrements the value associated with the key
mixed wincache_ucache_get(mixed $key [, bool $success = ``])
     Gets a variable stored in the user cache
mixed wincache_ucache_inc(string $key [, int $inc_by = 1 [, bool $success = ``]])
     Increments the value associated with the key
mixed xdiff_file_merge3(string $old_file, string $new_file1, string $new_file2, string $dest)
     Merge 3 files into one
mixed xdiff_file_patch(string $file, string $patch, string $dest [, int $flags = DIFF_PATCH_NORMAL])
     Patch a file with an unified diff
mixed xdiff_string_merge3(string $old_data, string $new_data1, string $new_data2 [, string $error = ``])
     Merge 3 strings into one
mixed xmlrpc_decode(string $xml [, string $encoding = \"iso-8859-1\"])
     Decodes XML into native PHP types
mixed xmlrpc_decode_request(string $xml, string $method [, string $encoding = ``])
     Decodes XML into native PHP types
mixed XMLWriter::flush([bool $empty = ``, resource $xmlwriter])
     Flush current buffer
mixed xml_parser_get_option(resource $parser, int $option)
     Get options from an XML parser
mixed xslt_process(resource $xh, string $xmlcontainer, string $xslcontainer [, string $resultcontainer = `` [, array $arguments = `` [, array $parameters = ``]]])
     Perform an XSLT transformation
mixed xslt_setopt(resource $processor, int $newmask)
     Set options on a given xsl processor
mixed yaml_parse(string $input [, int $pos = `` [, int $ndocs = `` [, array $callbacks = ``]]])
     Parse a YAML stream
mixed yaml_parse_file(string $filename [, int $pos = `` [, int $ndocs = `` [, array $callbacks = ``]]])
     Parse a YAML stream from a file
mixed yaml_parse_url(string $url [, int $pos = `` [, int $ndocs = `` [, array $callbacks = ``]]])
     Parse a Yaml stream from a URL
mixed yaz_connect(string $zurl [, mixed $options = ``])
     Prepares for a connection to a Z39.50 server
mixed yaz_wait([array $options = ``])
     Wait for Z39.50 requests to complete
mixed ZipArchive::getFromIndex(int $index [, int $length = `` [, int $flags = ``]])
     Returns the entry contents using its index
mixed ZipArchive::getFromName(string $name [, int $length = `` [, int $flags = ``]])
     Returns the entry contents using its name
mixed ZipArchive::locateName(string $name [, int $flags = ``])
     Returns the index of the entry in the archive
mixed ZipArchive::open(string $filename [, int $flags = ``])
     Open a ZIP file archive
mixed ZipArchive::setArchiveComment(string $comment)
     Set the comment of a ZIP archive
mixed ZipArchive::setCommentIndex(int $index, string $comment)
     Set the comment of an entry defined by its index
mixed ZipArchive::setCommentName(string $name, string $comment)
     Set the comment of an entry defined by its name
mixed ZipArchive::statIndex(int $index [, int $flags = ``])
     Get the details of an entry defined by its index.
mixed ZipArchive::statName(name $name [, int $flags = ``])
     Get the details of an entry defined by its name.
mixed ZipArchive::unchangeAll()
     Undo all changes done in the archive
mixed ZipArchive::unchangeArchive()
     Revert all global changes done in the archive.
mixed ZipArchive::unchangeIndex(int $index)
     Revert all changes done to an entry at the given index
mixed ZipArchive::unchangeName(string $name)
     Revert all changes done to an entry with the given name.
mixed zip_open(string $filename)
     Open a ZIP file archive
mixed zip_read(resource $zip)
     Read next entry in a ZIP file archive
 Mongo::__construct([string $server = \"mongodb://localhost:27017\" [, array $options = )]])
     Creates a new database connection object
 MongoBinData::__construct(string $data [, int $type = 2])
     Creates a new binary data object.
 MongoCode::__construct(string $code [, array $scope = array()])
     Creates a new code object
 MongoCollection::__construct(MongoDB $db, string $name)
     Creates a new collection
MongoCollection MongoCollection::__get(string $name)
     Gets a collection
MongoCollection MongoDB::createCollection(string $name [, bool $capped = `` [, int $size = `` [, int $max = ``]]])
     Creates a collection
MongoCollection MongoDB::selectCollection(string $name)
     Gets a collection
MongoCollection MongoDB::__get(string $name)
     Gets a collection
 MongoCursor::__construct(Mongo $connection, string $ns [, array $query = array() [, array $fields = array()]])
     Create a new cursor
MongoCursor MongoCollection::find([array $query = array() [, array $fields = array()]])
     Querys this collection
MongoCursor MongoCursor::addOption(string $key, mixed $value)
     Adds a top-level key/value pair to a query
MongoCursor MongoCursor::batchSize(int $num)
     Sets the number of results returned per result set
MongoCursor MongoCursor::fields(array $f)
     Sets the fields for a query
MongoCursor MongoCursor::hint(array $key_pattern)
     Gives the database a hint about the query
MongoCursor MongoCursor::immortal([bool $liveForever = true])
     Sets whether this cursor will timeout
MongoCursor MongoCursor::limit(int $num)
     Limits the number of results returned
MongoCursor MongoCursor::partial([bool $okay = true])
     If this query should fetch partial results from mongos if a shard is down
MongoCursor MongoCursor::skip(int $num)
     Skips a number of results
MongoCursor MongoCursor::slaveOkay([bool $okay = true])
     Sets whether this query can be done on a slave
MongoCursor MongoCursor::snapshot()
     Use snapshot mode for the query
MongoCursor MongoCursor::sort(array $fields)
     Sorts the results by given fields
MongoCursor MongoCursor::tailable([bool $tail = true])
     Sets whether this cursor will be left open after fetching the last results
MongoCursor MongoCursor::timeout(int $ms)
     Sets a client-side timeout for this query
 MongoDate::__construct([int $sec = `` [, int $usec = ``]])
     Creates a new date.
 MongoDB::__construct(Mongo $conn, string $name)
     Creates a new database
MongoDB Mongo::selectDB(string $name)
     Gets a database
MongoDB Mongo::__get(string $dbname)
     Gets a database
 MongoGridFS::__construct(MongoDB $db [, string $prefix = \"fs\" [, mixed $chunks = \"fs\"]])
     Creates new file collections
 MongoGridFSCursor::__construct(MongoGridFS $gridfs, resource $connection, string $ns, array $query, array $fields)
     Create a new cursor
MongoGridFSCursor MongoGridFS::find([array $query = array() [, array $fields = array()]])
     Queries for files
 MongoGridfsFile::__construct(MongoGridFS $gridfs, array $file)
     Create a new GridFS file
MongoGridFSFile MongoGridFS::findOne([mixed $query = array() [, mixed $fields = array()]])
     Returns a single file matching the criteria
MongoGridFSFile MongoGridFS::get(mixed $id)
     Retrieve a file from the database
MongoGridFSFile MongoGridFSCursor::current()
     Returns the current file
MongoGridFSFile MongoGridFSCursor::getNext()
     Return the next file to which this cursor points, and advance the cursor
MongoGridFS MongoDB::getGridFS([string $prefix = \"fs\"])
     Fetches toolkit for dealing with files stored in this database
 MongoId::__construct([string $id = ``])
     Creates a new id
MongoId MongoId::__set_state(array $props)
     Create a dummy MongoId
 MongoInt32::__construct(string $value)
     Creates a new 32-bit integer.
 MongoInt64::__construct(string $value)
     Creates a new 64-bit integer.
 MongoRegex::__construct(string $regex)
     Creates a new regular expression
 MongoTimestamp::__construct([int $sec = `` [, int $inc = ``]])
     Creates a new timestamp.
 msql()
     Alias of msql_db_query
 msql_createdb()
     Alias of msql_create_db
 msql_dbname()
     Alias of msql_result
 msql_fieldflags()
     Alias of msql_field_flags
 msql_fieldlen()
     Alias of msql_field_len
 msql_fieldname()
     Alias of msql_field_name
 msql_fieldtable()
     Alias of msql_field_table
 msql_fieldtype()
     Alias of msql_field_type
 msql_numfields()
     Alias of msql_num_fields
 msql_numrows()
     Alias of msql_num_rows
 msql_regcase()
     Alias of sql_regcase
 msql_tablename()
     Alias of msql_result
 MultipleIterator::__construct(int $flags)
     Constructs a new MultipleIterator
mysqli mysqli::init()
     Initializes MySQLi and returns a resource for use with mysqli_real_connect()
mysqli mysqli::__construct([string $host = ini_get(\"mysqli.default_host\") [, string $username = ini_get(\"mysqli.default_user\") [, string $passwd = ini_get(\"mysqli.default_pw\") [, string $dbname = \"\" [, int $port = ini_get(\"mysqli.default_port\") [, string $socket = ini_get(\"mysqli.default_socket\")]]]]]])
     Open a new connection to the MySQL server
mysqli mysqli_init()
     Initializes MySQLi and returns a resource for use with mysqli_real_connect()
 mysqli_bind_param()
     Alias for mysqli_stmt_bind_param
 mysqli_bind_result()
     Alias for mysqli_stmt_bind_result
 mysqli_client_encoding()
     Alias of mysqli_character_set_name
 mysqli_connect()
     Alias of mysqli::__construct
 mysqli_connect()
     Alias of mysqli::__construct
 mysqli_escape_string()
     Alias of mysqli_real_escape_string
 mysqli_execute()
     Alias for mysqli_stmt_execute
 mysqli_fetch()
     Alias for mysqli_stmt_fetch
 mysqli_get_metadata()
     Alias for mysqli_stmt_result_metadata
 mysqli_param_count()
     Alias for mysqli_stmt_param_count
mysqli_result mysqli::reap_async_query(mysql $link)
     Get result from async query
mysqli_result mysqli::store_result(mysqli $link)
     Transfers a result set from the last query
mysqli_result mysqli::use_result(mysqli $link)
     Initiate a result set retrieval
mysqli_result mysqli_reap_async_query(mysql $link)
     Get result from async query
mysqli_result mysqli_stmt::result_metadata(mysqli_stmt $stmt)
     Returns result set metadata from a prepared statement
mysqli_result mysqli_stmt_result_metadata(mysqli_stmt $stmt)
     Returns result set metadata from a prepared statement
mysqli_result mysqli_store_result(mysqli $link)
     Transfers a result set from the last query
mysqli_result mysqli_use_result(mysqli $link)
     Initiate a result set retrieval
 mysqli_send_long_data()
     Alias for mysqli_stmt_send_long_data
 mysqli_set_opt()
     Alias of mysqli_options
mysqli_stmt mysqli::prepare(string $query, mysqli $link)
     Prepare an SQL statement for execution
mysqli_stmt mysqli::stmt_init(mysqli $link)
     Initializes a statement and returns an object for use with mysqli_stmt_prepare
mysqli_stmt mysqli_prepare(string $query, mysqli $link)
     Prepare an SQL statement for execution
mysqli_stmt mysqli_stmt_init(mysqli $link)
     Initializes a statement and returns an object for use with mysqli_stmt_prepare
 mysqli_warning::__construct()
     The __construct purpose
mysqli_warning mysqli::get_warnings(mysqli $link)
     Get result of SHOW WARNINGS
mysqli_warning mysqli_get_warnings(mysqli $link)
     Get result of SHOW WARNINGS
 NoRewindIterator::__construct(Iterator $iterator)
     Construct a NoRewindIterator
null xhprof_enable([int $flags = `` [, array $options = ``]])
     Start xhprof profiler
null xhprof_sample_disable()
     Stops xhprof sample profiler
null xhprof_sample_enable()
     Description
number abs(mixed $number)
     Absolute value
number array_product(array $array)
     Calculate the product of values in an array
number array_sum(array $array)
     Calculate the sum of values in an array
NumberFormatter NumberFormatter::create(string $locale, int $style [, string $pattern = ``])
     Create a number formatter
NumberFormatter NumberFormatter::__construct(string $locale, int $style [, string $pattern = ``])
     Create a number formatter
NumberFormatter numfmt_create(string $locale, int $style [, string $pattern = ``])
     Create a number formatter
number hexdec(string $hex_string)
     Hexadecimal to decimal
number octdec(string $octal_string)
     Octal to decimal
number stats_harmonic_mean(array $a)
     Returns the harmonic mean of an array of values
number TokyoTyrant::add(string $key, number $increment [, int $type = ``])
     Adds to a numeric key
 OAuth::__construct(string $consumer_key, string $consumer_secret [, string $signature_method = `` [, int $auth_type = ``]])
     Create a new OAuth object
object apache_lookup_uri(string $filename)
     Perform a partial request for the specified URI and return all info about it
object APCIterator::__construct(string $cache [, mixed $search = null [, int $format = `` [, int $chunk_size = 100 [, int $list = ``]]]])
     Constructs an APCIterator iterator object
object ArrayIterator::count()
     Count elements
object ArrayIterator::__construct(mixed $array)
     Construct an ArrayIterator
object ArrayObject::exchangeArray(mixed $input)
     Exchange the array for another one.
object ArrayObject::__construct([mixed $input = `` [, int $flags = `` [, string $iterator_class = ``]]])
     Construct a new array object
object CairoMatrix::initIdentity()
     Creates a new identity matrix
object CairoMatrix::initRotate(float $radians)
     Creates a new rotated matrix
object CairoMatrix::initScale(float $sx, float $sy)
     Creates a new scaling matrix
object CairoMatrix::initTranslate(float $tx, float $ty)
     Creates a new translation matrix
object CairoMatrix::__construct([float $xx = 1.0 [, float $yx = 0.0 [, float $xy = 0.0 [, float $yy = 1.0 [, float $x0 = 0.0 [, float $y0 = 0.0]]]]]])
     Creates a new CairoMatrix object
object cairo_matrix_create_scale(float $sx, float $sy)
     Creates a new scaling matrix
object cairo_matrix_create_scale(float $sx, float $sy)
     Creates a new scaling matrix
object cairo_matrix_init([float $xx = 1.0 [, float $yx = 0.0 [, float $xy = 0.0 [, float $yy = 1.0 [, float $x0 = 0.0 [, float $y0 = 0.0]]]]]])
     Creates a new CairoMatrix object
object cairo_matrix_init_identity()
     Creates a new identity matrix
object cairo_matrix_init_rotate(float $radians)
     Creates a new rotated matrix
object cairo_matrix_init_scale(float $sx, float $sy)
     Creates a new scaling matrix
object cairo_matrix_init_translate(float $tx, float $ty)
     Creates a new translation matrix
object cubrid_fetch_field(resource $result [, int $field_offset = ``])
     Get column information from a result and return as an object
object cubrid_fetch_object(resource $result [, string $class_name = `` [, array $params = ``]])
     Fetche the next row and returns it as an object
object db2_client_info(resource $connection)
     Returns an object with properties that describe the DB2 database client
object db2_fetch_object(resource $stmt [, int $row_number = -1])
     Returns an object with properties representing columns in the fetched row
object db2_server_info(resource $connection)
     Returns an object with properties that describe the DB2 database server
object dbx_connect(mixed $module, string $host, string $database, string $username, string $password [, int $persistent = ``])
     Open a connection/database
object fbsql_fetch_field(resource $result [, int $field_offset = ``])
     Get column information from a result and return as an object
object fbsql_fetch_object(resource $result)
     Fetch a result row as an object
object HaruDoc::addPage()
     Add new page to the document
object HaruDoc::createOutline(string $title [, object $parent_outline = `` [, object $encoder = ``]])
     Create a HaruOutline instance
object HaruDoc::getCurrentEncoder()
     Get HaruEncoder currently used in the document
object HaruDoc::getCurrentPage()
     Return current page of the document
object HaruDoc::getEncoder(string $encoding)
     Get HaruEncoder instance for the specified encoding
object HaruDoc::getFont(string $fontname [, string $encoding = ``])
     Get HaruFont instance
object HaruDoc::insertPage(object $page)
     Insert new page just before the specified page
object HaruDoc::loadJPEG(string $filename)
     Load a JPEG image
object HaruDoc::loadPNG(string $filename [, bool $deferred = false])
     Load PNG image and return HaruImage instance
object HaruDoc::loadRaw(string $filename, int $width, int $height, int $color_space)
     Load a RAW image
object HaruPage::createDestination()
     Create new HaruDestination instance
object HaruPage::createLinkAnnotation(array $rectangle, object $destination)
     Create new HaruAnnotation instance
object HaruPage::createTextAnnotation(array $rectangle, string $text [, object $encoder = ``])
     Create new HaruAnnotation instance
object HaruPage::createURLAnnotation(array $rectangle, string $url)
     Create and return new HaruAnnotation instance
object HaruPage::getCurrentFont()
     Get the currently used font
object http_parse_cookie(string $cookie [, int $flags = `` [, array $allowed_extras = ``]])
     Parse HTTP cookie
object http_parse_message(string $message)
     Parse HTTP messages
object http_parse_params(string $param [, int $flags = HTTP_PARAMS_DEFAULT])
     Parse parameter list
object http_persistent_handles_count()
     Stat persistent handles
object ibase_fetch_object(resource $result_id [, int $fetch_flag = ``])
     Get an object from a InterBase database
object imap_bodystruct(resource $imap_stream, int $msg_number, string $section)
     Read the structure of a specified body section of a specific message
object imap_check(resource $imap_stream)
     Check current mailbox
object imap_fetchstructure(resource $imap_stream, int $msg_number [, int $options = ``])
     Read the structure of a particular message
object imap_headerinfo(resource $imap_stream, int $msg_number [, int $fromlength = `` [, int $subjectlength = `` [, string $defaulthost = ``]]])
     Read the header of the message
object imap_mailboxmsginfo(resource $imap_stream)
     Get information about the current mailbox
object imap_rfc822_parse_headers(string $headers [, string $defaulthost = \"UNKNOWN\"])
     Parse mail headers from a string
object imap_status(resource $imap_stream, string $mailbox, int $options)
     Returns status information on a mailbox
object ingres_fetch_object(resource $result [, int $result_type = ``])
     Fetch a row of result into an object
object java_last_exception_get()
     Get last Java exception
object maxdb::stmt_init(resource $link)
     Initializes a statement and returns an resource for use with maxdb_stmt_prepare
object maxdb::store_result(resource $link)
     Transfers a result set from the last query
object maxdb::store_result(resource $link)
     Transfers a result set from the last query
object maxdb_fetch_object(object $result)
     Returns the current row of a result set as an object
object maxdb_result::fetch_object(object $result)
     Returns the current row of a result set as an object
object maxdb_stmt_init(resource $link)
     Initializes a statement and returns an resource for use with maxdb_stmt_prepare
object maxdb_stmt_store_result(resource $stmt)
     Transfers a result set from a prepared statement
object maxdb_store_result(resource $link)
     Transfers a result set from the last query
object msql_fetch_field(resource $result [, int $field_offset = ``])
     Get field information
object msql_fetch_object(resource $result)
     Fetch row as object
object mssql_fetch_field(resource $result [, int $field_offset = -1])
     Get field information
object mssql_fetch_object(resource $result)
     Fetch row as object
object mysqli::get_charset(mysqli $link)
     Returns a character set object
object mysqli_fetch_field(mysqli_result $result)
     Returns the next field in the result set
object mysqli_fetch_field_direct(int $fieldnr, mysqli_result $result)
     Fetch meta-data for a single field
object mysqli_fetch_object([string $class_name = `` [, array $params = ``, mysqli_result $result]])
     Returns the current row of a result set as an object
object mysqli_get_charset(mysqli $link)
     Returns a character set object
object mysqli_result::fetch_field(mysqli_result $result)
     Returns the next field in the result set
object mysqli_result::fetch_field_direct(int $fieldnr, mysqli_result $result)
     Fetch meta-data for a single field
object mysqli_result::fetch_object([string $class_name = `` [, array $params = ``, mysqli_result $result]])
     Returns the current row of a result set as an object
object mysqli_stmt::get_warnings(mysqli_stmt $stmt)
     Get result of SHOW WARNINGS
object mysqli_stmt_get_warnings(mysqli_stmt $stmt)
     Get result of SHOW WARNINGS
object mysql_fetch_field(resource $result [, int $field_offset = ``])
     Get column information from a result and return as an object
object mysql_fetch_object(resource $result [, string $class_name = `` [, array $params = ``]])
     Fetch a result row as an object
object notes_header_info(string $server, string $mailbox, int $msg_number)
     Open the message msg_number in the specified mailbox on the specified server (leave serv
object OAuthProvider::__construct([array $params_array = ``])
     Constructs a new OAuthProvider object
object oci_fetch_object(resource $statement)
     Returns the next row from a query as an object
object odbc_fetch_object(resource $result [, int $rownumber = ``])
     Fetch a result row as an object
object pg_fetch_object(resource $result [, int $row = `` [, int $result_type = PGSQL_ASSOC [, string $class_name = `` [, array $params = ``]]]])
     Fetch a row as an object
object Phar::compress(int $compression [, string $extension = ``])
     Compresses the entire Phar archive using Gzip or Bzip2 compression
object Phar::decompress([string $extension = ``])
     Decompresses the entire Phar archive
object PharData::compress(int $compression [, string $extension = ``])
     Compresses the entire tar/zip archive using Gzip or Bzip2 compression
object PharData::decompress([string $extension = ``])
     Decompresses the entire Phar archive
object RecursiveArrayIterator::hasChildren()
     Returns whether current entry is an array or an object.
object RecursiveDirectoryIterator::getChildren()
     Returns an iterator for the current entry if it is a directory
object ReflectionClass::getConstructor()
     Gets constructor
object ReflectionClass::getMethod(string $name)
     Gets a ReflectionMethod
object ReflectionClass::getParentClass()
     Gets parent class
object ReflectionClass::newInstance(mixed $args [, mixed $... = ``])
     Creates a new class instance from given arguments.
object ReflectionClass::newInstanceArgs([array $args = ``])
     Creates a new class instance from given arguments.
object ReflectionExtension::__construct(string $name)
     Constructs a ReflectionExtension
object SAMMessage::header()
     The header properties of the message.
object SimpleXMLIterator::getChildren()
     Returns the sub-elements of the current element
object simplexml_load_file(string $filename [, string $class_name = \"SimpleXMLElement\" [, int $options = `` [, string $ns = `` [, bool $is_prefix = false]]]])
     Interprets an XML file into an object
object simplexml_load_string(string $data [, string $class_name = \"SimpleXMLElement\" [, int $options = `` [, string $ns = `` [, bool $is_prefix = false]]]])
     Interprets a string of XML into an object
object SplFileInfo::openFile([string $open_mode = r [, bool $use_include_path = false [, resource $context = ``]]])
     Gets an SplFileObject object for the file
object SplObjectStorage::attach(object $object [, mixed $data = ``])
     Adds an object in the storage
object SplObjectStorage::contains(object $object)
     Checks if the storage contains a specific object
object SplObjectStorage::current()
     Returns the current storage entry
object SplObjectStorage::detach(object $object)
     Removes an object from the storage
object SplObjectStorage::next()
     Move to the next entry
object SplObjectStorage::offsetExists(object $object)
     Checks whether an object exists in the storage
object SplObjectStorage::offsetGet(object $object)
     Returns the data associated with an object
object SplObjectStorage::offsetSet(object $object [, mixed $data = ``])
     Associates data to an object in the storage
object SplObjectStorage::offsetUnset(object $object)
     Removes an object from the storage
object SQLiteResult::fetchObject(resource $result [, string $class_name = `` [, array $ctor_params = `` [, bool $decode_binary = true]]])
     Fetches the next row from a result set as an object
object SQLiteUnbuffered::fetchObject(resource $result [, string $class_name = `` [, array $ctor_params = `` [, bool $decode_binary = true]]])
     Fetches the next row from a result set as an object
object sqlite_fetch_object(resource $result [, string $class_name = `` [, array $ctor_params = `` [, bool $decode_binary = true]]])
     Fetches the next row from a result set as an object
object stream_bucket_make_writeable(resource $brigade)
     Return a bucket object from the brigade for operating on
object stream_bucket_new(resource $stream, string $buffer)
     Create a new bucket for use on the current stream
object Swish::prepare([string $query = ``])
     Prepare a search query
object Swish::query(string $query)
     Execute a query and return results object
object SwishResults::nextResult()
     Get the next search result
object SwishSearch::execute([string $query = ``])
     Execute the search and get the results
object sybase_fetch_field(resource $result [, int $field_offset = -1])
     Get field information from a result
object sybase_fetch_object(resource $result [, mixed $object = ``])
     Fetch a row as an object
OCI-Collection oci_new_collection(resource $connection, string $tdo [, string $schema = ``])
     Allocates new collection object
 OCI-Lob::saveFile()
     Alias of oci_lob_import
 OCI-Lob::writeToFile()
     Alias of oci_lob_export
OCI-Lob oci_new_descriptor(resource $connection [, int $type = OCI_DTYPE_LOB])
     Initializes a new empty LOB or FILE descriptor
 ocibindbyname()
     Alias of oci_bind_by_name
 ocicancel()
     Alias of oci_cancel
 ocicloselob()
     Alias of
 ocicollappend()
     Alias of
 ocicollassign()
     Alias of
 ocicollassignelem()
     Alias of
 ocicollgetelem()
     Alias of
 ocicollmax()
     Alias of
 ocicollsize()
     Alias of
 ocicolltrim()
     Alias of
 ocicolumnisnull()
     Alias of oci_field_is_null
 ocicolumnname()
     Alias of oci_field_name
 ocicolumnprecision()
     Alias of oci_field_precision
 ocicolumnscale()
     Alias of oci_field_scale
 ocicolumnsize()
     Alias of oci_field_size
 ocicolumntype()
     Alias of oci_field_type
 ocicolumntyperaw()
     Alias of oci_field_type_raw
 ocicommit()
     Alias of oci_commit
 ocidefinebyname()
     Alias of oci_define_by_name
 ocierror()
     Alias of oci_error
 ociexecute()
     Alias of oci_execute
 ocifetch()
     Alias of oci_fetch
 ocifetchstatement()
     Alias of oci_fetch_all
 ocifreecollection()
     Alias of
 ocifreecursor()
     Alias of oci_free_statement
 ocifreedesc()
     Alias of
 ocifreestatement()
     Alias of oci_free_statement
 ociinternaldebug()
     Alias of oci_internal_debug
 ociloadlob()
     Alias of
 ocilogoff()
     Alias of oci_close
 ocilogon()
     Alias of oci_connect
 ocinewcollection()
     Alias of oci_new_collection
 ocinewcursor()
     Alias of oci_new_cursor
 ocinewdescriptor()
     Alias of oci_new_descriptor
 ocinlogon()
     Alias of oci_new_connect
 ocinumcols()
     Alias of oci_num_fields
 ociparse()
     Alias of oci_parse
 ociplogon()
     Alias of oci_pconnect
 ociresult()
     Alias of oci_result
 ocirollback()
     Alias of oci_rollback
 ocirowcount()
     Alias of oci_num_rows
 ocisavelob()
     Alias of
 ocisavelobfile()
     Alias of
 ociserverversion()
     Alias of oci_server_version
 ocisetprefetch()
     Alias of oci_set_prefetch
 ocistatementtype()
     Alias of oci_statement_type
 ociwritelobtofile()
     Alias of
 ociwritetemporarylob()
     Alias of
 odbc_do()
     Alias of odbc_exec
 odbc_field_precision()
     Alias of odbc_field_len
 openssl_get_privatekey()
     Alias of openssl_pkey_get_private
 openssl_get_publickey()
     Alias of openssl_pkey_get_public
 ParentIterator::__construct(RecursiveIterator $iterator)
     Constructs a ParentIterator
ParentIterator ParentIterator::getChildren()
     Return the inner iterator`s children contained in a ParentIterator
 PDF_add_annotation()
     Add annotation [deprecated]
 PDF_add_bookmark()
     Add bookmark for current page [deprecated]
 PDF_add_outline()
     Add bookmark for current page [deprecated]
 PDF_get_font()
     Get font [deprecated]
 PDF_get_fontname()
     Get font name [deprecated]
 PDF_get_fontsize()
     Font handling [deprecated]
 PDF_get_image_height()
     Get image height [deprecated]
 PDF_get_image_width()
     Get image width [deprecated]
 PDF_open_gif()
     Open GIF image [deprecated]
 PDF_open_jpeg()
     Open JPEG image [deprecated]
 PDF_open_tiff()
     Open TIFF image [deprecated]
 PDF_setpolydash()
     Set complicated dash pattern [deprecated]
 PDF_set_char_spacing()
     Set character spacing [deprecated]
 PDF_set_duration()
     Set duration between pages [deprecated]
 PDF_set_horiz_scaling()
     Set horizontal text scaling [deprecated]
 PDF_set_info_author()
     Fill the author document info field [deprecated]
 PDF_set_info_creator()
     Fill the creator document info field [deprecated]
 PDF_set_info_keywords()
     Fill the keywords document info field [deprecated]
 PDF_set_info_subject()
     Fill the subject document info field [deprecated]
 PDF_set_info_title()
     Fill the title document info field [deprecated]
 PDF_set_leading()
     Set distance between text lines [deprecated]
 PDF_set_text_matrix()
     Set text matrix [deprecated]
 PDF_set_text_rendering()
     Determine text rendering [deprecated]
 PDF_set_text_rise()
     Set text rise [deprecated]
 PDF_set_word_spacing()
     Set spacing between words [deprecated]
 PDO::__construct(string $dsn [, string $username = `` [, string $password = `` [, array $driver_options = ``]]])
     Creates a PDO instance representing a connection to a database
PDOStatement PDO::prepare(string $statement [, array $driver_options = array()])
     Prepares a statement for execution and returns a statement object
PDOStatement PDO::query(string $statement, int $PDO::FETCH_COLUMN, int $colno, int $PDO::FETCH_CLASS, string $classname, array $ctorargs, int $PDO::FETCH_INTO, object $object)
     Executes an SQL statement, returning a result set as a PDOStatement object
PharData Phar::convertToData([int $format = 9021976 [, int $compression = 9021976 [, string $extension = ``]]])
     Convert a phar archive to a non-executable tar or zip file
PharData PharData::convertToData([int $format = `` [, int $compression = `` [, string $extension = ``]]])
     Convert a phar archive to a non-executable tar or zip file
 PharException()
     The PharException class provides a phar-specific exception class    for try/catch blocks.
Phar Phar::convertToExecutable([int $format = 9021976 [, int $compression = 9021976 [, string $extension = ``]]])
     Convert a phar archive to another executable phar archive file format
Phar PharData::convertToExecutable([int $format = `` [, int $compression = `` [, string $extension = ``]]])
     Convert a non-executable tar/zip archive to an executable phar archive
 pos()
     Alias of current
 posix_errno()
     Alias of posix_get_last_error
QDomDocument qdom_tree(string $doc)
     Creates a tree of an XML string
RarArchive RarArchive::getEntries(RarArchive $rarfile)
     Get full list of entries from the RAR archive
RarArchive RarArchive::open(string $filename [, string $password = null [, callback $volume_callback = null]])
     Open RAR archive
RarArchive RarArchive::__toString()
     Get text representation
RarArchive rar_list(RarArchive $rarfile)
     Get full list of entries from the RAR archive
RarArchive rar_open(string $filename [, string $password = null [, callback $volume_callback = null]])
     Open RAR archive
RarEntry RarArchive::getEntry(string $entryname, RarArchive $rarfile)
     Get entry object from the RAR archive
RarEntry RarException::setUsingExceptions(bool $using_exceptions)
     Activate and deactivate error handling with exceptions
RarEntry rar_entry_get(string $entryname, RarArchive $rarfile)
     Get entry object from the RAR archive
 read_exif_data()
     Alias of exif_read_data
 recode()
     Alias of recode_string
RecursiveArrayIterator RecursiveArrayIterator::getChildren()
     Returns an iterator for the current entry if it is an array or an object.
 RecursiveCachingIterator::__construct(Iterator $iterator [, string $flags = self::CALL_TOSTRING])
     Construct
RecursiveCachingIterator RecursiveCachingIterator::getChildren()
     Return the inner iterator`s children as a RecursiveCachingIterator
 RecursiveDirectoryIterator::__construct(string $path [, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO])
     Constructs a RecursiveDirectoryIterator
 RecursiveFilterIterator::__construct(RecursiveIterator $iterator)
     Create a RecursiveFilterIterator from a RecursiveIterator
 RecursiveIteratorIterator::__construct(Traversable $iterator [, int $mode = LEAVES_ONLY [, int $flags = ``]])
     Construct a RecursiveIteratorIterator
RecursiveIterator RecursiveIterator::getChildren()
     Returns an iterator for the current entry.
RecursiveIterator RecursiveIteratorIterator::callGetChildren()
     Get children
RecursiveIterator RecursiveIteratorIterator::getSubIterator()
     The current active sub iterator
RecursiveIterator RecursiveTreeIterator::beginIteration()
     Begin iteration
RecursiveIterator RecursiveTreeIterator::callGetChildren()
     Get children
 RecursiveRegexIterator::__construct(RecursiveIterator $iterator, string $regex [, int $mode = `` [, int $flags = `` [, int $preg_flags = ``]]])
     Creates a new RecursiveRegexIterator.
RecursiveRegexIterator RecursiveRegexIterator::getChildren()
     Returns an iterator for the current entry.
 RecursiveTreeIterator::__construct(RecursiveIterator|IteratorAggregate $it [, int $flags = RecursiveTreeIterator::BYPASS_KEY [, int $cit_flags = CachingIterator::CATCH_GET_CHILD [, int $mode = RecursiveIteratorIterator::SELF_FIRST]]])
     Construct a RecursiveTreeIterator
 ReflectionClass::__construct(mixed $argument)
     Constructs a ReflectionClass
ReflectionClass ReflectionMethod::getDeclaringClass()
     Gets declaring class for the reflected method.
ReflectionClass ReflectionParameter::getClass()
     Get class
ReflectionClass ReflectionParameter::getDeclaringClass()
     Gets declaring class
ReflectionClass ReflectionProperty::getDeclaringClass()
     Gets declaring class
ReflectionExtension ReflectionClass::getExtension()
     Gets extension info
ReflectionExtension ReflectionFunctionAbstract::getExtension()
     Gets extension info
 ReflectionFunction::__construct(mixed $name)
     Constructs a ReflectionFunction object
ReflectionFunction ReflectionParameter::getDeclaringFunction()
     Gets declaring function
 ReflectionMethod::__construct(mixed $class, string $name)
     Constructs a ReflectionMethod
ReflectionMethod ReflectionMethod::getPrototype()
     Gets the method prototype (if there is one).
 ReflectionObject::__construct(object $argument)
     Constructs a ReflectionObject
 ReflectionParameter::__construct(string $function, string $parameter)
     Construct
ReflectionParameter ReflectionFunctionAbstract::getParameters()
     Gets parameters
 ReflectionProperty::__construct(mixed $class, string $name)
     Construct a ReflectionProperty object
ReflectionProperty ReflectionClass::getProperty(string $name)
     Gets property
 RegexIterator::__construct(Iterator $iterator, string $regex [, int $mode = `` [, int $flags = `` [, int $preg_flags = ``]]])
     Create a new RegexIterator
resource bbcode_create([array $bbcode_initial_tags = ``])
     Create a BBCode Resource
ResourceBundle ResourceBundle::create(string $locale, string $bundlename [, bool $fallback = ``])
     Create a resource bundle
ResourceBundle ResourceBundle::__construct(string $locale, string $bundlename [, bool $fallback = ``])
     Create a resource bundle
ResourceBundle resourcebundle_create(string $locale, string $bundlename [, bool $fallback = ``])
     Create a resource bundle
resource bzopen(string $filename, string $mode)
     Opens a bzip2 compressed file
resource crack_opendict(string $dictionary)
     Opens a new CrackLib dictionary
resource cubrid_connect(string $host, int $port, string $dbname [, string $userid = `` [, string $passwd = ``]])
     Open a connection to a CUBRID Server
resource cubrid_connect_with_url(string $conn_url [, string $userid = `` [, string $passwd = ``]])
     Establish the environment for connecting to CUBRID server
resource cubrid_prepare(resource $conn_identifier, string $prepare_stmt [, int $option = ``])
     Prepare an SQL statement for execution
resource cubrid_query(string $query [, resource $conn_identifier = ``])
     Send a CUBRID query
resource cubrid_unbuffered_query(string $query [, resource $conn_identifier = ``])
     Perform a query without fetching the results into memory
resource curl_copy_handle(resource $ch)
     Copy a cURL handle along with all of its preferences
resource curl_init([string $url = ``])
     Initialize a cURL session
resource curl_multi_init()
     Returns a new cURL multi handle
resource cyrus_connect([string $host = `` [, string $port = `` [, int $flags = ``]]])
     Connect to a Cyrus IMAP server
resource db2_columns(resource $connection [, string $qualifier = `` [, string $schema = `` [, string $table-name = `` [, string $column-name = ``]]]])
     Returns a result set listing the columns and associated metadata for a table
resource db2_column_privileges(resource $connection [, string $qualifier = `` [, string $schema = `` [, string $table-name = `` [, string $column-name = ``]]]])
     Returns a result set listing the columns and associated privileges for a table
resource db2_connect(string $database, string $username, string $password [, array $options = ``])
     Returns a connection to a database
resource db2_exec(resource $connection, string $statement [, array $options = ``])
     Executes an SQL statement directly
resource db2_foreign_keys(resource $connection, string $qualifier, string $schema, string $table-name)
     Returns a result set listing the foreign keys for a table
resource db2_next_result(resource $stmt)
     Requests the next result set from a stored procedure
resource db2_pconnect(string $database, string $username, string $password [, array $options = ``])
     Returns a persistent connection to a database
resource db2_prepare(resource $connection, string $statement [, array $options = ``])
     Prepares an SQL statement to be executed
resource db2_primary_keys(resource $connection, string $qualifier, string $schema, string $table-name)
     Returns a result set listing primary keys for a table
resource db2_procedures(resource $connection, string $qualifier, string $schema, string $procedure)
     Returns a result set listing the stored procedures registered in a database
resource db2_procedure_columns(resource $connection, string $qualifier, string $schema, string $procedure, string $parameter)
     Returns a result set listing stored procedure parameters
resource db2_special_columns(resource $connection, string $qualifier, string $schema, string $table_name, int $scope)
     Returns a result set listing the unique row identifier columns for a table
resource db2_statistics(resource $connection, string $qualifier, string $schema, string $table-name, bool $unique)
     Returns a result set listing the index and statistics for a table
resource db2_tables(resource $connection [, string $qualifier = `` [, string $schema = `` [, string $table-name = `` [, string $table-type = ``]]]])
     Returns a result set listing the tables and associated metadata in a database
resource db2_table_privileges(resource $connection [, string $qualifier = `` [, string $schema = `` [, string $table_name = ``]]])
     Returns a result set listing the tables and associated privileges in a database
resource dba_open(string $path, string $mode [, string $handler = `` [, mixed $... = ``]])
     Open database
resource dba_popen(string $path, string $mode [, string $handler = `` [, mixed $... = ``]])
     Open database persistently
resource dbplus_aql(string $query [, string $server = `` [, string $dbpath = ``]])
     Perform AQL query
resource dbplus_open(string $name)
     Open relation file
resource dbplus_rcreate(string $name, mixed $domlist [, bool $overwrite = ``])
     Creates a new DB++ relation
resource dbplus_ropen(string $name)
     Open relation file local
resource dbplus_rquery(string $query [, string $dbpath = ``])
     Perform local (raw) AQL query
resource dbplus_sql(string $query [, string $server = `` [, string $dbpath = ``]])
     Perform SQL query
resource dio_open(string $filename, int $flags [, int $mode = ``])
     Opens a file (creating it if necessary) at a lower level than the   C library input/ouput stream functions allow.
resource enchant_broker_init()
     create a new broker object capable of requesting
resource enchant_broker_request_dict(resource $broker, string $tag)
     create a new dictionary using a tag
resource enchant_broker_request_pwl_dict(resource $broker, string $filename)
     creates a dictionary using a PWL file
resource event_base_new()
     Create and initialize new event base
resource event_buffer_new(resource $stream, mixed $readcb, mixed $writecb, mixed $errorcb [, mixed $arg = ``])
     Create new buffered event
resource event_new()
     Create new event
resource expect_popen(string $command)
     Execute command via Bourne shell, and open the PTY stream to  the process
resource fam_monitor_collection(resource $fam, string $dirname, int $depth, string $mask)
     Monitor a collection of files in a directory for changes
resource fam_monitor_directory(resource $fam, string $dirname)
     Monitor a directory for changes
resource fam_monitor_file(resource $fam, string $filename)
     Monitor a regular file for changes
resource fam_open([string $appname = ``])
     Open connection to FAM daemon
resource fbsql_connect([string $hostname = ini_get(\"fbsql.default_host\") [, string $username = ini_get(\"fbsql.default_user\") [, string $password = ini_get(\"fbsql.default_password\")]]])
     Open a connection to a FrontBase Server
resource fbsql_db_query(string $database, string $query [, resource $link_identifier = ``])
     Send a FrontBase query
resource fbsql_list_dbs([resource $link_identifier = ``])
     List databases available on a FrontBase server
resource fbsql_list_fields(string $database_name, string $table_name [, resource $link_identifier = ``])
     List FrontBase result fields
resource fbsql_list_tables(string $database [, resource $link_identifier = ``])
     List tables in a FrontBase database
resource fbsql_pconnect([string $hostname = ini_get(\"fbsql.default_host\") [, string $username = ini_get(\"fbsql.default_user\") [, string $password = ini_get(\"fbsql.default_password\")]]])
     Open a persistent connection to a FrontBase Server
resource fbsql_query(string $query [, resource $link_identifier = `` [, int $batch_size = ``]])
     Send a FrontBase query
resource fdf_create()
     Create a new FDF document
resource fdf_open(string $filename)
     Open a FDF document
resource fdf_open_string(string $fdf_data)
     Read a FDF document from a string
resource finfo::__construct([int $options = FILEINFO_NONE [, string $magic_file = ``]])
     Create a new fileinfo resource
resource finfo_open([int $options = FILEINFO_NONE [, string $magic_file = ``]])
     Create a new fileinfo resource
resource fopen(string $filename, string $mode [, bool $use_include_path = false [, resource $context = ``]])
     Opens file or URL
resource fsockopen(string $hostname [, int $port = -1 [, int $errno = `` [, string $errstr = `` [, float $timeout = ini_get(\"default_socket_timeout\")]]]])
     Open Internet or Unix domain socket connection
resource ftp_close(resource $ftp_stream)
     Closes an FTP connection
resource ftp_connect(string $host [, int $port = 21 [, int $timeout = 90]])
     Opens an FTP connection
resource ftp_ssl_connect(string $host [, int $port = 21 [, int $timeout = 90]])
     Opens an Secure SSL-FTP connection
resource gmp_abs(resource $a)
     Absolute value
resource gmp_add(resource $a, resource $b)
     Add numbers
resource gmp_and(resource $a, resource $b)
     Bitwise AND
resource gmp_com(resource $a)
     Calculates one`s complement
resource gmp_divexact(resource $n, resource $d)
     Exact division of numbers
resource gmp_div_q(resource $a, resource $b [, int $round = GMP_ROUND_ZERO])
     Divide numbers
resource gmp_div_r(resource $n, resource $d [, int $round = GMP_ROUND_ZERO])
     Remainder of the division of numbers
resource gmp_fact(mixed $a)
     Factorial
resource gmp_gcd(resource $a, resource $b)
     Calculate GCD
resource gmp_init(mixed $number [, int $base = ``])
     Create GMP number
resource gmp_invert(resource $a, resource $b)
     Inverse by modulo
resource gmp_mod(resource $n, resource $d)
     Modulo operation
resource gmp_mul(resource $a, resource $b)
     Multiply numbers
resource gmp_neg(resource $a)
     Negate number
resource gmp_nextprime(int $a)
     Find next prime number
resource gmp_or(resource $a, resource $b)
     Bitwise OR
resource gmp_pow(resource $base, int $exp)
     Raise number into power
resource gmp_powm(resource $base, resource $exp, resource $mod)
     Raise number into power with modulo
resource gmp_random([int $limiter = 20])
     Random number
resource gmp_sqrt(resource $a)
     Calculate square root
resource gmp_sub(resource $a, resource $b)
     Subtract numbers
resource gmp_xor(resource $a, resource $b)
     Bitwise XOR
resource gnupg_init()
     Initialize a connection
resource gupnp_context_new([string $host_ip = `` [, int $port = ``]])
     Create a new context
resource gupnp_control_point_new(resource $context, string $target)
     Create a new control point
resource gupnp_device_info_get_service(resource $root_device, string $type)
     Get the service with type
resource gupnp_root_device_new(resource $context, string $location, string $description_dir)
     Create a new root device
resource gzopen(string $filename, string $mode [, int $use_include_path = ``])
     Open gz-file
resource hash_copy(resource $context)
     Copy hashing context
resource hash_init(string $algo [, int $options = `` [, string $key = ``]])
     Initialize an incremental hashing context
resource HttpResponse::getRequestBodyStream()
     Get request body stream
resource HttpResponse::getStream()
     Get Stream
resource http_get_request_body_stream()
     Get request body as stream
resource ibase_blob_create([resource $link_identifier = ``])
     Create a new blob for adding data
resource ibase_blob_open(resource $link_identifier, string $blob_id)
     Open blob for retrieving data parts
resource ibase_connect([string $database = `` [, string $username = `` [, string $password = `` [, string $charset = `` [, int $buffers = `` [, int $dialect = `` [, string $role = `` [, int $sync = ``]]]]]]]])
     Open a connection to an InterBase database
resource ibase_execute(resource $query [, mixed $bind_arg = `` [, mixed $... = ``]])
     Execute a previously prepared query
resource ibase_pconnect([string $database = `` [, string $username = `` [, string $password = `` [, string $charset = `` [, int $buffers = `` [, int $dialect = `` [, string $role = `` [, int $sync = ``]]]]]]]])
     Open a persistent connection to an InterBase database
resource ibase_prepare(string $query, resource $link_identifier, string $trans)
     Prepare a query for later binding of parameter placeholders and execution
resource ibase_query([resource $link_identifier = ``, string $query [, int $bind_args = ``]])
     Execute a query on an InterBase database
resource ibase_service_attach(string $host, string $dba_username, string $dba_password)
     Connect to the service manager
resource ibase_set_event_handler(callback $event_handler, string $event_name1 [, string $event_name2 = `` [, string $... = ``, resource $connection]])
     Register a callback function to be called when events are posted
resource ibase_trans([int $trans_args = `` [, resource $link_identifier = ``]])
     Begin a transaction
resource ifx_connect([string $database = `` [, string $userid = `` [, string $password = ``]]])
     Open Informix server connection
resource ifx_pconnect([string $database = `` [, string $userid = `` [, string $password = ``]]])
     Open persistent Informix connection
resource ifx_prepare(string $query, resource $link_identifier [, int $cursor_def = ``, mixed $blobidarray])
     Prepare an SQL-statement for execution
resource ifx_query(string $query, resource $link_identifier [, int $cursor_type = `` [, mixed $blobidarray = ``]])
     Send Informix query
resource imagecreate(int $width, int $height)
     Create a new palette based image
resource imagecreatefromgd(string $filename)
     Create a new image from GD file or URL
resource imagecreatefromgd2(string $filename)
     Create a new image from GD2 file or URL
resource imagecreatefromgd2part(string $filename, int $srcX, int $srcY, int $width, int $height)
     Create a new image from a given part of GD2 file or URL
resource imagecreatefromgif(string $filename)
     Create a new image from file or URL
resource imagecreatefromjpeg(string $filename)
     Create a new image from file or URL
resource imagecreatefrompng(string $filename)
     Create a new image from file or URL
resource imagecreatefromstring(string $data)
     Create a new image from the image stream in the string
resource imagecreatefromwbmp(string $filename)
     Create a new image from file or URL
resource imagecreatefromxbm(string $filename)
     Create a new image from file or URL
resource imagecreatefromxpm(string $filename)
     Create a new image from file or URL
resource imagecreatetruecolor(int $width, int $height)
     Create a new true color image
resource imagegrabscreen()
     Captures the whole screen
resource imagegrabwindow(int $window_handle [, int $client_area = ``])
     Captures a window
resource imagepsloadfont(string $filename)
     Load a PostScript Type 1 font from file
resource imagerotate(resource $image, float $angle, int $bgd_color [, int $ignore_transparent = ``])
     Rotate an image with a given angle
resource imap_open(string $mailbox, string $username, string $password [, int $options = NIL [, int $n_retries = `` [, array $params = ``]]])
     Open an IMAP stream to a mailbox
resource ingres_connect([string $database = `` [, string $username = `` [, string $password = `` [, array $options = ``]]]])
     Open a connection to an Ingres database
resource ingres_pconnect([string $database = `` [, string $username = `` [, string $password = `` [, array $options = ``]]]])
     Open a persistent connection to an Ingres database
resource inotify_init()
     Initialize an inotify instance
resource is_scalar(mixed $var)
     Finds whether a variable is a scalar
resource kadm5_init_with_password(string $admin_server, string $realm, string $principal, string $password)
     Opens a connection to the KADM5 library
resource ldap_connect([string $hostname = `` [, int $port = 389]])
     Connect to an LDAP server
resource ldap_first_entry(resource $link_identifier, resource $result_identifier)
     Return first result id
resource ldap_first_reference(resource $link, resource $result)
     Return first reference
resource ldap_list(resource $link_identifier, string $base_dn, string $filter [, array $attributes = `` [, int $attrsonly = `` [, int $sizelimit = `` [, int $timelimit = `` [, int $deref = ``]]]]])
     Single-level search
resource ldap_next_entry(resource $link_identifier, resource $result_entry_identifier)
     Get next result entry
resource ldap_next_reference(resource $link, resource $entry)
     Get next reference
resource ldap_read(resource $link_identifier, string $base_dn, string $filter [, array $attributes = `` [, int $attrsonly = `` [, int $sizelimit = `` [, int $timelimit = `` [, int $deref = ``]]]]])
     Read an entry
resource ldap_search(resource $link_identifier, string $base_dn, string $filter [, array $attributes = `` [, int $attrsonly = `` [, int $sizelimit = `` [, int $timelimit = `` [, int $deref = ``]]]]])
     Search LDAP tree
resource mailparse_msg_create()
     Create a mime mail resource
resource mailparse_msg_get_part(resource $mimemail, string $mimesection)
     Returns a handle on a given section in a mimemessage
resource mailparse_msg_parse_file(string $filename)
     Parses a file
resource maxdb::use_result(resource $link)
     Initiate a result set retrieval
resource maxdb::__construct([string $host = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = ``]]]]]])
     Open a new connection to the MaxDB server
resource maxdb_connect([string $host = `` [, string $username = `` [, string $passwd = `` [, string $dbname = `` [, int $port = `` [, string $socket = ``]]]]]])
     Open a new connection to the MaxDB server
resource maxdb_embedded_connect([string $dbname = ``])
     Open a connection to an embedded MaxDB server
resource maxdb_init()
     Initializes MaxDB and returns an resource for use with maxdb_real_connect
resource maxdb_stmt::result_metadata(resource $stmt)
     Returns result set metadata from a prepared statement
resource maxdb_stmt_result_metadata(resource $stmt)
     Returns result set metadata from a prepared statement
resource maxdb_use_result(resource $link)
     Initiate a result set retrieval
resource mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory)
     Opens the module of the algorithm and the mode to be used
resource msg_get_queue(int $key [, int $perms = ``])
     Create or attach to a message queue
resource msql_connect([string $hostname = ``])
     Open mSQL connection
resource msql_db_query(string $database, string $query [, resource $link_identifier = ``])
     Send mSQL query
resource msql_list_dbs([resource $link_identifier = ``])
     List mSQL databases on server
resource msql_list_fields(string $database, string $tablename [, resource $link_identifier = ``])
     List result fields
resource msql_list_tables(string $database [, resource $link_identifier = ``])
     List tables in an mSQL database
resource msql_pconnect([string $hostname = ``])
     Open persistent mSQL connection
resource msql_query(string $query [, resource $link_identifier = ``])
     Send mSQL query
resource mssql_connect([string $servername = `` [, string $username = `` [, string $password = `` [, bool $new_link = false]]]])
     Open MS SQL server connection
resource mssql_init(string $sp_name [, resource $link_identifier = ``])
     Initializes a stored procedure or a remote stored procedure
resource mssql_pconnect([string $servername = `` [, string $username = `` [, string $password = `` [, bool $new_link = false]]]])
     Open persistent MS SQL connection
resource mysql_connect([string $server = ini_get(\"mysql.default_host\") [, string $username = ini_get(\"mysql.default_user\") [, string $password = ini_get(\"mysql.default_password\") [, bool $new_link = false [, int $client_flags = ``]]]]])
     Open a connection to a MySQL Server
resource mysql_db_query(string $database, string $query [, resource $link_identifier = ``])
     Send a MySQL query
resource mysql_list_dbs([resource $link_identifier = ``])
     List databases available on a MySQL server
resource mysql_list_fields(string $database_name, string $table_name [, resource $link_identifier = ``])
     List MySQL table fields
resource mysql_list_processes([resource $link_identifier = ``])
     List MySQL processes
resource mysql_list_tables(string $database [, resource $link_identifier = ``])
     List tables in a MySQL database
resource mysql_pconnect([string $server = ini_get(\"mysql.default_host\") [, string $username = ini_get(\"mysql.default_user\") [, string $password = ini_get(\"mysql.default_password\") [, int $client_flags = ``]]]])
     Open a persistent connection to a MySQL server
resource mysql_query(string $query [, resource $link_identifier = ``])
     Send a MySQL query
resource mysql_unbuffered_query(string $query [, resource $link_identifier = ``])
     Send an SQL query to MySQL without fetching and buffering the result rows.
resource m_initconn()
     Create and initialize an MCVE_CONN structure
resource ncurses_newpad(int $rows, int $cols)
     Creates a new pad (window)
resource ncurses_newwin(int $rows, int $cols, int $y, int $x)
     Create a new window
resource ncurses_new_panel(resource $window)
     Create a new panel and associate it with window
resource ncurses_panel_above(resource $panel)
     Returns the panel above panel
resource ncurses_panel_below(resource $panel)
     Returns the panel below panel
resource ncurses_panel_window(resource $panel)
     Returns the window associated with panel
resource newt_button(int $left, int $top, string $text)
     Create a new button
resource newt_button_bar(array $buttons)
     This function returns a grid containing the buttons created.
resource newt_checkbox(int $left, int $top, string $text, string $def_value [, string $seq = ``])
     
resource newt_checkbox_tree(int $left, int $top, int $height [, int $flags = ``])
     
resource newt_checkbox_tree_multi(int $left, int $top, int $height, string $seq [, int $flags = ``])
     
resource newt_compact_button(int $left, int $top, string $text)
     
resource newt_create_grid(int $cols, int $rows)
     
resource newt_entry(int $left, int $top, int $width [, string $init_value = `` [, int $flags = ``]])
     
resource newt_form([resource $vert_bar = `` [, string $help = `` [, int $flags = ``]]])
     Create a form
resource newt_form_get_current(resource $form)
     
resource newt_grid_basic_window(resource $text, resource $middle, resource $buttons)
     
resource newt_grid_h_close_stacked(int $element1_type, resource $element1 [, resource $... = ``])
     
resource newt_grid_h_stacked(int $element1_type, resource $element1 [, resource $... = ``])
     
resource newt_grid_simple_window(resource $text, resource $middle, resource $buttons)
     
resource newt_grid_v_close_stacked(int $element1_type, resource $element1 [, resource $... = ``])
     
resource newt_grid_v_stacked(int $element1_type, resource $element1 [, resource $... = ``])
     
resource newt_label(int $left, int $top, string $text)
     
resource newt_listbox(int $left, int $top, int $height [, int $flags = ``])
     
resource newt_listitem(int $left, int $top, string $text, bool $is_default, resouce $prev_item, mixed $data [, int $flags = ``])
     
resource newt_radiobutton(int $left, int $top, string $text, bool $is_default [, resource $prev_button = ``])
     
resource newt_radio_get_current(resource $set_member)
     
resource newt_run_form(resource $form)
     Runs a form
resource newt_scale(int $left, int $top, int $width, int $full_value)
     
resource newt_textbox(int $left, int $top, int $width, int $height [, int $flags = ``])
     
resource newt_textbox_reflowed(int $left, int $top, char $*text, int $width, int $flex_down, int $flex_up [, int $flags = ``])
     
resource newt_vertical_scrollbar(int $left, int $top, int $height [, int $normal_colorset = `` [, int $thumb_colorset = ``]])
     
resource oci_connect(string $username, string $password [, string $connection_string = `` [, string $character_set = `` [, int $session_mode = ``]]])
     Connect to an Oracle database
resource oci_new_connect(string $username, string $password [, string $connection_string = `` [, string $character_set = `` [, int $session_mode = ``]]])
     Connect to the Oracle server using a unique connection
resource oci_new_cursor(resource $connection)
     Allocates and returns a new cursor (statement handle)
resource oci_parse(resource $connection, string $sql_text)
     Prepares an Oracle statement for execution
resource oci_password_change(resource $connection, string $username, string $old_password, string $new_password, string $dbname)
     Changes password of Oracle`s user
resource oci_pconnect(string $username, string $password [, string $connection_string = `` [, string $character_set = `` [, int $session_mode = ``]]])
     Connect to an Oracle database using a persistent connection
resource odbc_columnprivileges(resource $connection_id, string $qualifier, string $owner, string $table_name, string $column_name)
     Lists columns and associated privileges for the given table
resource odbc_columns(resource $connection_id [, string $qualifier = `` [, string $schema = `` [, string $table_name = `` [, string $column_name = ``]]]])
     Lists the column names in specified tables
resource odbc_connect(string $dsn, string $user, string $password [, int $cursor_type = ``])
     Connect to a datasource
resource odbc_exec(resource $connection_id, string $query_string [, int $flags = ``])
     Prepare and execute an SQL statement
resource odbc_foreignkeys(resource $connection_id, string $pk_qualifier, string $pk_owner, string $pk_table, string $fk_qualifier, string $fk_owner, string $fk_table)
     Retrieves a list of foreign keys
resource odbc_gettypeinfo(resource $connection_id [, int $data_type = ``])
     Retrieves information about data types supported by the data source
resource odbc_pconnect(string $dsn, string $user, string $password [, int $cursor_type = ``])
     Open a persistent database connection
resource odbc_prepare(resource $connection_id, string $query_string)
     Prepares a statement for execution
resource odbc_primarykeys(resource $connection_id, string $qualifier, string $owner, string $table)
     Gets the primary keys for a table
resource odbc_procedurecolumns(resource $connection_id, string $qualifier, string $owner, string $proc, string $column)
     Retrieve information about parameters to procedures
resource odbc_procedures(resource $connection_id, string $qualifier, string $owner, string $name)
     Get the list of procedures stored in a specific data source
resource odbc_specialcolumns(resource $connection_id, int $type, string $qualifier, string $owner, string $table, int $scope, int $nullable)
     Retrieves special columns
resource odbc_statistics(resource $connection_id, string $qualifier, string $owner, string $table_name, int $unique, int $accuracy)
     Retrieve statistics about a table
resource odbc_tableprivileges(resource $connection_id, string $qualifier, string $owner, string $name)
     Lists tables and the privileges associated with each table
resource odbc_tables(resource $connection_id [, string $qualifier = `` [, string $owner = `` [, string $name = `` [, string $types = ``]]]])
     Get the list of table names stored in a specific data source
resource openal_buffer_create()
     Generate OpenAL buffer
resource openal_context_create(resource $device)
     Create an audio processing context
resource openal_device_open([string $device_desc = ``])
     Initialize the OpenAL audio layer
resource openal_source_create()
     Generate a source resource
resource openal_stream(resource $source, int $format, int $rate)
     Begin streaming on a source
resource opendir(string $path [, resource $context = ``])
     Open directory handle
resource openssl_csr_get_public_key(mixed $csr [, bool $use_shortnames = true])
     Returns the public key of a CERT
resource openssl_csr_sign(mixed $csr, mixed $cacert, mixed $priv_key, int $days [, array $configargs = `` [, int $serial = ``]])
     Sign a CSR with another certificate (or itself) and generate a certificate
resource openssl_pkey_get_private(mixed $key [, string $passphrase = \"\"])
     Get a private key
resource openssl_pkey_get_public(mixed $certificate)
     Extract public key from certificate and prepare it for use
resource openssl_pkey_new([array $configargs = ``])
     Generates a new private key
resource openssl_x509_read(mixed $x509certdata)
     Parse an X.509 certificate and return a resource identifier for  it
resource PDF_new()
     Create PDFlib object
resource PDO::pgsqlLOBOpen(string $oid [, string $mode = \"rb\"])
     Opens an existing large object stream
resource pfsockopen(string $hostname [, int $port = -1 [, int $errno = `` [, string $errstr = `` [, float $timeout = ini_get(\"default_socket_timeout\")]]]])
     Open persistent Internet or Unix domain socket connection
resource pg_connect(string $connection_string [, int $connect_type = ``])
     Open a PostgreSQL connection
resource pg_execute([resource $connection = ``, string $stmtname, array $params])
     Sends a request to execute a prepared statement with given parameters, and waits for the result.
resource pg_free_result(resource $result)
     Free result memory
resource pg_get_result([resource $connection = ``])
     Get asynchronous query result
resource pg_lo_open(resource $connection, int $oid, string $mode)
     Open a large object
resource pg_pconnect(string $connection_string [, int $connect_type = ``])
     Open a persistent PostgreSQL connection
resource pg_prepare([resource $connection = ``, string $stmtname, string $query])
     Submits a request to create a prepared statement with the   given parameters, and waits for completion.
resource pg_query([resource $connection = ``, string $query])
     Execute a query
resource pg_query_params([resource $connection = ``, string $query, array $params])
     Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text.
resource popen(string $command, string $mode)
     Opens process file pointer
resource proc_open(string $cmd, array $descriptorspec, array $pipes [, string $cwd = `` [, array $env = `` [, array $other_options = ``]]])
     Execute a command and open file pointers for input/output
resource ps_new()
     Creates a new PostScript document object
resource px_new()
     Create a new paradox object
resource radius_acct_open()
     Creates a Radius handle for accounting
resource radius_auth_open()
     Creates a Radius handle for authentication
resource RarEntry::getStream([string $password = ``])
     Get file handler for entry
resource rpm_open(string $filename)
     Opens an RPM file
resource sem_get(int $key [, int $max_acquire = 1 [, int $perm = 0666 [, int $auto_release = 1]]])
     Get a semaphore id
resource shm_attach(int $key [, int $memsize = `` [, int $perm = ``]])
     Creates or open a shared memory segment
resource socket_accept(resource $socket)
     Accepts a connection on a socket
resource socket_create(int $domain, int $type, int $protocol)
     Create a socket (endpoint for communication)
resource socket_create_listen(int $port [, int $backlog = 128])
     Opens a socket on port to accept connections
resource sqlite_open(string $filename [, int $mode = 0666 [, string $error_message = ``]])
     Opens an SQLite database and create the database if it does not exist
resource sqlite_popen(string $filename [, int $mode = 0666 [, string $error_message = ``]])
     Opens a persistent handle to an SQLite database and create the database if it does not exist
resource ssh2_connect(string $host [, int $port = 22 [, array $methods = `` [, array $callbacks = ``]]])
     Connect to an SSH server
resource ssh2_exec(resource $session, string $command [, string $pty = `` [, array $env = `` [, int $width = 80 [, int $height = 25 [, int $width_height_type = SSH2_TERM_UNIT_CHARS]]]]])
     Execute a command on a remote server
resource ssh2_fetch_stream(resource $channel, int $streamid)
     Fetch an extended data stream
resource ssh2_publickey_init(resource $session)
     Initialize Publickey subsystem
resource ssh2_sftp(resource $session)
     Initialize SFTP subsystem
resource ssh2_shell(resource $session [, string $term_type = \"vanilla\" [, array $env = `` [, int $width = 80 [, int $height = 25 [, int $width_height_type = SSH2_TERM_UNIT_CHARS]]]]])
     Request an interactive shell
resource ssh2_tunnel(resource $session, string $host, int $port)
     Open a tunnel through a remote server
resource Stomp::__construct([string $broker = ini_get(\"stomp.default_broker_uri\") [, string $username = `` [, string $password = `` [, array $headers = ``]]]])
     Opens a connection
resource stomp_connect([string $broker = ini_get(\"stomp.default_broker_uri\") [, string $username = `` [, string $password = `` [, array $headers = ``]]]])
     Opens a connection
resource streamWrapper::stream_cast(int $cast_as)
     Retrieve the underlaying resource
resource stream_context_create([array $options = `` [, array $params = ``]])
     Create a streams context
resource stream_context_get_default([array $options = ``])
     Retreive the default streams context
resource stream_context_set_default(array $options)
     Set the default streams context
resource stream_filter_append(resource $stream, string $filtername [, int $read_write = `` [, mixed $params = ``]])
     Attach a filter to a stream
resource stream_filter_prepend(resource $stream, string $filtername [, int $read_write = `` [, mixed $params = ``]])
     Attach a filter to a stream
resource stream_socket_accept(resource $server_socket [, float $timeout = ini_get(\"default_socket_timeout\") [, string $peername = ``]])
     Accept a connection on a socket created by stream_socket_server
resource stream_socket_client(string $remote_socket [, int $errno = `` [, string $errstr = `` [, float $timeout = ini_get(\"default_socket_timeout\") [, int $flags = STREAM_CLIENT_CONNECT [, resource $context = ``]]]]])
     Open Internet or Unix domain socket connection
resource stream_socket_server(string $local_socket [, int $errno = `` [, string $errstr = `` [, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN [, resource $context = ``]]]])
     Create an Internet or Unix domain server socket
resource svn_fs_apply_text(resource $root, string $path)
     Creates and returns a stream that will be used to replace
resource svn_fs_begin_txn2(resource $repos, int $rev)
     Create a new transaction
resource svn_fs_file_contents(resource $fsroot, string $path)
     Returns a stream to access the contents of a file from a given version of the fs
resource svn_fs_revision_root(resource $fs, int $revnum)
     Get a handle on a specific version of the repository root
resource svn_fs_txn_root(resource $txn)
     Creates and returns a transaction root
resource svn_repos_create(string $path [, array $config = `` [, array $fsconfig = ``]])
     Create a new subversion repository at path
resource svn_repos_fs(resource $repos)
     Gets a handle on the filesystem for a repository
resource svn_repos_fs_begin_txn_for_commit(resource $repos, int $rev, string $author, string $log_msg)
     Create a new transaction
resource svn_repos_open(string $path)
     Open a shared lock on a repository.
resource sybase_connect([string $servername = `` [, string $username = `` [, string $password = `` [, string $charset = `` [, string $appname = `` [, bool $new = false]]]]]])
     Opens a Sybase server connection
resource sybase_pconnect([string $servername = `` [, string $username = `` [, string $password = `` [, string $charset = `` [, string $appname = ``]]]]])
     Open persistent Sybase connection
resource sybase_unbuffered_query(string $query, resource $link_identifier [, bool $store_result = ``])
     Send a Sybase query and do not block
resource tmpfile()
     Creates a temporary file
resource udm_alloc_agent(string $dbaddr [, string $dbmode = ``])
     Allocate mnoGoSearch session
resource udm_alloc_agent_array(array $databases)
     Allocate mnoGoSearch session
resource udm_find(resource $agent, string $query)
     Perform search
resource w32api_init_dtype(string $typename, mixed $value [, mixed $... = ``])
     Creates an instance of the data type typename and fills it with the values passed
resource wddx_packet_start([string $comment = ``])
     Starts a new WDDX packet with structure inside it
resource xmlrpc_server_create()
     Creates an xmlrpc server
resource XMLWriter::openMemory()
     Create new xmlwriter using memory for string output
resource XMLWriter::openURI(string $uri)
     Create new xmlwriter using source uri for output
resource xml_parser_create([string $encoding = ``])
     Create an XML parser
resource xml_parser_create_ns([string $encoding = `` [, string $separator = `:`]])
     Create an XML parser with namespace support
resource xslt_create()
     Create a new XSLT processor
resource ZipArchive::getStream(string $name)
     Get a file handler to the entry defined by its name (read only).
 Runkit_Sandbox()
     Runkit Sandbox Class -- PHP Virtual Machine
 SAMConnection::__construct()
     Creates a new connection to a Messaging Server
 SAMMessage::__construct([mixed $body = ``])
     Creates a new Message object
SAMMessage SAMConnection::peek(string $target [, array $properties = ``])
     Read a message from a queue without removing it from the queue.
SAMMessage SAMConnection::receive(string $target [, array $properties = ``])
     Receive a message from a queue or subscription.
SAMMessage SAMConnection::remove(string $target [, array $properties = ``])
     Remove a message from a queue.
SDODataObject SDO_DAS_Relational::createRootDataObject()
     Returns the special root object in an otherwise    empty data graph. Used when creating a data graph from scratch.
SDODataObject SDO_DAS_Relational::executePreparedQuery(PDO $database_handle, PDOStatement $prepared_statement, array $value_list [, array $column_specifier = ``])
     Executes an SQL query passed as a prepared statement, with a    list of values to substitute for placeholders, and return the    results as a normalised data graph.
SDODataObject SDO_DAS_Relational::executeQuery(PDO $database_handle, string $SQL_statement [, array $column_specifier = ``])
     Executes a given SQL query against a relational database    and returns the results as a normalised data graph.
SDO_DAS_ChangeSummary SDO_DAS_DataObject::getChangeSummary()
     Get a data object`s change summary
SDO_DAS_DataFactory SDO_DAS_DataFactory::getDataFactory()
     Get a data factory instance
SDO_DAS_Relational SDO_DAS_Relational::__construct(array $database_metadata [, string $application_root_type = `` [, array $SDO_containment_references_metadata = ``]])
     Creates an instance of a Relational Data Access Service
SDO_DAS_XML SDO_DAS_XML::create([mixed $xsd_file = `` [, string $key = ``]])
     To create SDO_DAS_XML object for a given schema file
SDO_DAS_XML_Document SDO_DAS_XML::createDocument(string $document_element_name, string $document_element_namespace_URI [, SDO_DataObject $dataobject = ``])
     Creates an XML Document object from scratch, without the need to load a document from a file or string.
SDO_DAS_XML_Document SDO_DAS_XML::loadString(string $xml_string)
     Returns SDO_DAS_XML_Document for a given xml instance string
SDO_DataObject SCA::createDataObject(string $type_namespace_uri, string $type_name)
     create an SDO
SDO_DataObject SCA_LocalProxy::createDataObject(string $type_namespace_uri, string $type_name)
     create an SDO
SDO_DataObject SCA_SoapProxy::createDataObject(string $type_namespace_uri, string $type_name)
     create an SDO
SDO_DataObject SDO_DAS_ChangeSummary::getOldContainer(SDO_DataObject $data_object)
     Get the old container for a deleted SDO_DataObject
SDO_DataObject SDO_DAS_XML::createDataObject(string $namespace_uri, string $type_name)
     Creates SDO_DataObject for a given namespace URI and type name
SDO_DataObject SDO_DAS_XML_Document::getRootDataObject()
     Returns the root SDO_DataObject
SDO_DataObject SDO_DataObject::createDataObject(mixed $identifier)
     Create a child SDO_DataObject
SDO_DataObject SDO_DataObject::getContainer()
     Get a data object`s container
SDO_List SDO_DAS_ChangeSummary::getChangedDataObjects()
     Get the changed data objects from a change summary
SDO_List SDO_DAS_ChangeSummary::getOldValues(SDO_DataObject $data_object)
     Get the old values for a given changed SDO_DataObject
SDO_Model_Property SDO_Model_ReflectionDataObject::getContainmentProperty()
     Get the property which defines the containment relationship to the data object
SDO_Model_Property SDO_Model_Type::getProperty(mixed $identifier)
     Get an SDO_Model_Property of the type
SDO_Model_Property SDO_Sequence::getProperty(int $sequence_index)
     Return the property for the specified sequence index.
SDO_Model_ReflectionDataObject SDO_Model_ReflectionDataObject::__construct(SDO_DataObject $data_object)
     Construct an SDO_Model_ReflectionDataObject
SDO_Model_Type SDO_Model_Property::getContainingType()
     Get the SDO_Model_Type which contains this property
SDO_Model_Type SDO_Model_Property::getType()
     Get the SDO_Model_Type of the property
SDO_Model_Type SDO_Model_ReflectionDataObject::getType()
     Get the SDO_Model_Type for the SDO_DataObject
SDO_Model_Type SDO_Model_Type::getBaseType()
     Get the base type for this type
SDO_Sequence SDO_DataObject::getSequence()
     Get the sequence for a data object
SDO_XMLDocument SDO_DAS_XML::loadFile(string $xml_file)
     Returns SDO_DAS_XML_Document object for a given path to xml instance document
 session_commit()
     Alias of session_write_close
 set_file_buffer()
     Alias of stream_set_write_buffer
 set_socket_blocking()
     Alias of stream_set_blocking
 show_source()
     Alias of highlight_file
 SimpleXMLElement::saveXML()
     Alias of SimpleXMLElement::asXML
 SimpleXMLElement::__construct(string $data [, int $options = `` [, bool $data_is_url = false [, string $ns = \"\" [, bool $is_prefix = false]]]])
     Creates a new SimpleXMLElement object
SimpleXMLElement SimpleXMLElement::addChild(string $name [, string $value = `` [, string $namespace = ``]])
     Adds a child element to the XML node
SimpleXMLElement SimpleXMLElement::attributes([string $ns = `` [, bool $is_prefix = false]])
     Identifies an element`s attributes
SimpleXMLElement SimpleXMLElement::children([string $ns = `` [, bool $is_prefix = false]])
     Finds children of given node
SimpleXMLElement simplexml_import_dom(DOMNode $node [, string $class_name = \"SimpleXMLElement\"])
     Get a SimpleXMLElement object from a DOM node.
 sizeof()
     Alias of count
 SoapClient::SoapClient(mixed $wsdl [, array $options = ``])
     SoapClient constructor
 SoapClient::__construct(mixed $wsdl [, array $options = ``])
     SoapClient constructor
 SoapFault::SoapFault(string $faultcode, string $faultstring [, string $faultactor = `` [, string $detail = `` [, string $faultname = `` [, string $headerfault = ``]]]])
     SoapFault constructor
 SoapFault::__construct(string $faultcode, string $faultstring [, string $faultactor = `` [, string $detail = `` [, string $faultname = `` [, string $headerfault = ``]]]])
     SoapFault constructor
 SoapHeader::SoapHeader(string $namespace, string $name [, mixed $data = `` [, bool $mustunderstand = false [, string $actor = ``]]])
     SoapHeader constructor
 SoapHeader::__construct(string $namespace, string $name [, mixed $data = `` [, bool $mustunderstand = `` [, string $actor = ``]]])
     SoapHeader constructor
 SoapParam::SoapParam(mixed $data, string $name)
     SoapParam constructor
 SoapParam::__construct(mixed $data, string $name)
     SoapParam constructor
 SoapServer::SoapServer(mixed $wsdl [, array $options = ``])
     SoapServer constructor
 SoapServer::__construct(mixed $wsdl [, array $options = ``])
     SoapServer constructor
 SoapVar::SoapVar(string $data, string $encoding [, string $type_name = `` [, string $type_namespace = `` [, string $node_name = `` [, string $node_namespace = ``]]]])
     SoapVar constructor
 SoapVar::__construct(string $data, string $encoding [, string $type_name = `` [, string $type_namespace = `` [, string $node_name = `` [, string $node_namespace = ``]]]])
     SoapVar constructor
 socket_get_status()
     Alias of stream_get_meta_data
 socket_set_blocking()
     Alias of stream_set_blocking
 socket_set_timeout()
     Alias of stream_set_timeout
 SolrClient::__construct(array $clientOptions)
     Constructor for the SolrClient object
 SolrDocument::__construct()
     Constructor
 SolrDocumentField::__construct()
     Constructor
SolrDocumentField SolrDocument::current()
     Retrieves the current field
SolrDocumentField SolrDocument::getField(string $fieldName)
     Retrieves a field by name
SolrDocumentField SolrDocument::offsetGet(string $fieldName)
     Retrieves a field
SolrDocumentField SolrDocument::__get(string $fieldName)
     Acess the field as a property
SolrDocumentField SolrInputDocument::getField(string $fieldName)
     Retrieves a field by name
 SolrGenericResponse::__construct()
     Constructor
 SolrInputDocument::__construct()
     Constructor
SolrInputDocument SolrDocument::getInputDocument()
     Returns a SolrInputDocument equivalent of the object
 SolrModifiableParams::__construct()
     Constructor
 SolrObject::__construct()
     Creates Solr object
SolrObject SolrResponse::getResponse()
     Returns a SolrObject representing the XML response from the server
SolrObject SolrUtils::digestXmlResponse(string $xmlresponse [, int $parse_mode = ``])
     Parses an response XML string into a SolrObject
SolrParams SolrParams::add(string $name, string $value)
     This is an alias for SolrParams::addParam
SolrParams SolrParams::addParam(string $name, string $value)
     Adds a parameter to the object
SolrParams SolrParams::setParam(string $name, string $value)
     Sets the parameter to the specified value
 SolrPingResponse::__construct()
     Constructor
SolrPingResponse SolrClient::ping()
     Checks if Solr server is still up
 SolrQuery::__construct([string $q = ``])
     Constructor
 SolrQueryResponse::__construct()
     Constructor
SolrQueryResponse SolrClient::query(SolrParams $query)
     Sends a query to the server
SolrQuery SolrQuery::addFacetDateField(string $dateField)
     Maps to facet.date
SolrQuery SolrQuery::addFacetDateOther(string $value [, string $field_override = ``])
     Adds another facet.date.other parameter
SolrQuery SolrQuery::addFacetField(string $field)
     Adds another field to the facet
SolrQuery SolrQuery::addFacetQuery(string $facetQuery)
     Adds a facet query
SolrQuery SolrQuery::addField(string $field)
     Specifies which fields to return in the result
SolrQuery SolrQuery::addFilterQuery(string $fq)
     Specifies a filter query
SolrQuery SolrQuery::addHighlightField(string $field)
     Maps to hl.fl
SolrQuery SolrQuery::addMltField(string $field)
     Sets a field to use for similarity
SolrQuery SolrQuery::addMltQueryField(string $field, float $boost)
     Maps to mlt.qf
SolrQuery SolrQuery::addSortField(string $field [, int $order = SolrQuery::ORDER_DESC])
     Used to control how the results should be sorted
SolrQuery SolrQuery::addStatsFacet(string $field)
     Requests a return of sub results for values within the given facet
SolrQuery SolrQuery::addStatsField(string $field)
     Maps to stats.field parameter
SolrQuery SolrQuery::removeFacetDateField(string $field)
     Removes one of the facet date fields
SolrQuery SolrQuery::removeFacetDateOther(string $value [, string $field_override = ``])
     Removes one of the facet.date.other parameters
SolrQuery SolrQuery::removeFacetField(string $field)
     Removes one of the facet.date parameters
SolrQuery SolrQuery::removeFacetQuery(string $value)
     Removes one of the facet.query parameters
SolrQuery SolrQuery::removeField(string $field)
     Removes a field from the list of fields
SolrQuery SolrQuery::removeFilterQuery(string $fq)
     Removes a filter query
SolrQuery SolrQuery::removeHighlightField(string $field)
     Removes one of the fields used for highlighting
SolrQuery SolrQuery::removeMltField(string $field)
     Removes one of the moreLikeThis fields
SolrQuery SolrQuery::removeMltQueryField(string $queryField)
     Removes one of the moreLikeThis query fields
SolrQuery SolrQuery::removeSortField(string $field)
     Removes one of the sort fields
SolrQuery SolrQuery::removeStatsFacet(string $value)
     Removes one of the stats.facet parameters
SolrQuery SolrQuery::removeStatsField(string $field)
     Removes one of the stats.field parameters
SolrQuery SolrQuery::setEchoHandler(bool $flag)
     Toggles the echoHandler parameter
SolrQuery SolrQuery::setEchoParams(string $type)
     Determines what kind of parameters to include in the response
SolrQuery SolrQuery::setExplainOther(string $query)
     Sets the explainOther common query parameter
SolrQuery SolrQuery::setFacet(bool $flag)
     Maps to the facet parameter. Enables or disables facetting
SolrQuery SolrQuery::setFacetDateEnd(string $value [, string $field_override = ``])
     Maps to facet.date.end
SolrQuery SolrQuery::setFacetDateGap(string $value [, string $field_override = ``])
     Maps to facet.date.gap
SolrQuery SolrQuery::setFacetDateHardEnd(bool $value [, string $field_override = ``])
     Maps to facet.date.hardend
SolrQuery SolrQuery::setFacetDateStart(string $value [, string $field_override = ``])
     Maps to facet.date.start
SolrQuery SolrQuery::setFacetEnumCacheMinDefaultFrequency(int $frequency [, string $field_override = ``])
     Sets the minimum document frequency used for determining term count
SolrQuery SolrQuery::setFacetLimit(int $limit [, string $field_override = ``])
     Maps to facet.limit
SolrQuery SolrQuery::setFacetMethod(string $method [, string $field_override = ``])
     Specifies the type of algorithm to use when faceting a field
SolrQuery SolrQuery::setFacetMinCount(int $mincount [, string $field_override = ``])
     Maps to facet.mincount
SolrQuery SolrQuery::setFacetMissing(bool $flag [, string $field_override = ``])
     Maps to facet.missing
SolrQuery SolrQuery::setFacetOffset(int $offset [, string $field_override = ``])
     Sets the offset into the list of constraints to allow for pagination
SolrQuery SolrQuery::setFacetPrefix(string $prefix [, string $field_override = ``])
     Specifies a string prefix with which to limits the terms on which to facet
SolrQuery SolrQuery::setFacetSort(int $facetSort [, string $field_override = ``])
     Determines the ordering of the facet field constraints
SolrQuery SolrQuery::setHighlight(bool $flag)
     Enables or disables highlighting
SolrQuery SolrQuery::setHighlightAlternateField(string $field [, string $field_override = ``])
     Specifies the backup field to use
SolrQuery SolrQuery::setHighlightFormatter(string $formatter [, string $field_override = ``])
     Specify a formatter for the highlight output
SolrQuery SolrQuery::setHighlightFragmenter(string $fragmenter [, string $field_override = ``])
     Sets a text snippet generator for highlighted text
SolrQuery SolrQuery::setHighlightFragsize(int $size [, string $field_override = ``])
     The size of fragments to consider for highlighting
SolrQuery SolrQuery::setHighlightHighlightMultiTerm(bool $flag)
     Use SpanScorer to highlight phrase terms
SolrQuery SolrQuery::setHighlightMaxAlternateFieldLength(int $fieldLength [, string $field_override = ``])
     Sets the maximum number of characters of the field to return
SolrQuery SolrQuery::setHighlightMaxAnalyzedChars(int $value)
     Specifies the number of characters into a document to look for suitable snippets
SolrQuery SolrQuery::setHighlightMergeContiguous(bool $flag [, string $field_override = ``])
     Whether or not to collapse contiguous fragments into a single fragment
SolrQuery SolrQuery::setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars)
     Specify the maximum number of characters to analyze
SolrQuery SolrQuery::setHighlightRegexPattern(string $value)
     Specify the regular expression for fragmenting
SolrQuery SolrQuery::setHighlightRegexSlop(float $factor)
     Sets the factor by which the regex fragmenter can stray from the ideal fragment size
SolrQuery SolrQuery::setHighlightRequireFieldMatch(bool $flag)
     Require field matching during highlighting
SolrQuery SolrQuery::setHighlightSimplePost(string $simplePost [, string $field_override = ``])
     Sets the text which appears after a highlighted term
SolrQuery SolrQuery::setHighlightSimplePre(string $simplePre [, string $field_override = ``])
     Sets the text which appears before a highlighted term
SolrQuery SolrQuery::setHighlightSnippets(int $value [, string $field_override = ``])
     Sets the maximum number of highlighted snippets to generate per field
SolrQuery SolrQuery::setHighlightUsePhraseHighlighter(bool $flag)
     Whether to highlight phrase terms only when they appear within the query phrase
SolrQuery SolrQuery::setMlt(bool $flag)
     Enables or disables moreLikeThis
SolrQuery SolrQuery::setMltBoost(bool $flag)
     Set if the query will be boosted by the interesting term relevance
SolrQuery SolrQuery::setMltCount(int $count)
     Set the number of similar documents to return for each result
SolrQuery SolrQuery::setMltMaxNumQueryTerms(int $value)
     Sets the maximum number of query terms included
SolrQuery SolrQuery::setMltMaxNumTokens(int $value)
     Specifies the maximum number of tokens to parse
SolrQuery SolrQuery::setMltMaxWordLength(int $maxWordLength)
     Sets the maximum word length
SolrQuery SolrQuery::setMltMinDocFrequency(int $minDocFrequency)
     Sets the mltMinDoc frequency
SolrQuery SolrQuery::setMltMinTermFrequency(int $minTermFrequency)
     Sets the frequency below which terms will be ignored in the source docs
SolrQuery SolrQuery::setMltMinWordLength(int $minWordLength)
     Sets the minimum word length
SolrQuery SolrQuery::setOmitHeader(bool $flag)
     Exclude the header from the returned results
SolrQuery SolrQuery::setQuery(string $query)
     Sets the search query
SolrQuery SolrQuery::setRows(int $rows)
     Specifies the maximum number of rows to return in the result
SolrQuery SolrQuery::setShowDebugInfo(bool $flag)
     Flag to show debug information
SolrQuery SolrQuery::setStart(int $start)
     Specifies the number of rows to skip
SolrQuery SolrQuery::setStats(bool $flag)
     Enables or disables the Stats component
SolrQuery SolrQuery::setTerms(bool $flag)
     Enables or disables the TermsComponent
SolrQuery SolrQuery::setTermsField(string $fieldname)
     Sets the name of the field to get the Terms from
SolrQuery SolrQuery::setTermsIncludeLowerBound(bool $flag)
     Include the lower bound term in the result set
SolrQuery SolrQuery::setTermsIncludeUpperBound(bool $flag)
     Include the upper bound term in the result set
SolrQuery SolrQuery::setTermsLimit(int $limit)
     Sets the maximum number of terms to return
SolrQuery SolrQuery::setTermsLowerBound(string $lowerBound)
     Specifies the Term to start from
SolrQuery SolrQuery::setTermsMaxCount(int $frequency)
     Sets the maximum document frequency
SolrQuery SolrQuery::setTermsMinCount(int $frequency)
     Sets the minimum document frequency
SolrQuery SolrQuery::setTermsPrefix(string $prefix)
     Restrict matches to terms that start with the prefix
SolrQuery SolrQuery::setTermsReturnRaw(bool $flag)
     Return the raw characters of the indexed term
SolrQuery SolrQuery::setTermsSort(int $sortType)
     Specifies how to sort the returned terms
SolrQuery SolrQuery::setTermsUpperBound(string $upperBound)
     Sets the term to stop at
SolrQuery SolrQuery::setTimeAllowed(int $timeAllowed)
     The time allowed for search to finish
 SolrUpdateResponse::__construct()
     Constructor
SolrUpdateResponse SolrClient::addDocument(SolrInputDocument $doc [, bool $allowDups = false [, int $commitWithin = ``]])
     Adds a document to the index
SolrUpdateResponse SolrClient::commit([int $maxSegments = \"1\" [, bool $waitFlush = true [, bool $waitSearcher = true]]])
     Finalizes all add/deletes made to the index
SolrUpdateResponse SolrClient::deleteById(string $id)
     Delete by Id
SolrUpdateResponse SolrClient::deleteByIds(array $ids)
     Deletes by Ids
SolrUpdateResponse SolrClient::deleteByQueries(array $queries)
     Removes all documents matching any of the queries
SolrUpdateResponse SolrClient::deleteByQuery(string $query)
     Deletes all documents matching the given query
SolrUpdateResponse SolrClient::optimize([int $maxSegments = \"1\" [, bool $waitFlush = true [, bool $waitSearcher = true]]])
     Defragments the index
SolrUpdateResponse SolrClient::rollback()
     Rollbacks all add/deletes made to the index since the last commit
 SphinxClient::__construct()
     Create a new SphinxClient object
 SplBool::__construct()
     Constructs a bool object type
 SplDoublyLinkedList::__construct()
     Constructs a new doubly linked list
 SplEnum::__construct()
     Constructs an enumeration object type
 SplFileInfo::__construct(string $file_name)
     Construct a new SplFileInfo object
SplFileInfo SplFileInfo::getFileInfo([string $class_name = ``])
     Gets an SplFileInfo object for the file
SplFileInfo SplFileInfo::getPathInfo([string $class_name = ``])
     Gets an SplFileInfo object for the path
 SplFileObject::getCurrentLine()
     Alias of SplFileObject::fgets
 SplFileObject::__construct(string $filename [, string $open_mode = \"r\" [, bool $use_include_path = false [, resource $context = ``]]])
     Construct a new file object.
 SplFileObject::__toString()
     Alias of SplFileObject::current
 SplFixedArray::__construct([int $size = ``])
     Constructs a new fixed array
SplFixedArray SplFixedArray::fromArray(array $array [, bool $save_indexes = true])
     Import a PHP array in a SplFixedArray instance
 SplFloat::__construct(float $input)
     Constructs a float object type
 SplHeap::__construct()
     Constructs a new empty heap
 SplInt::__construct(integer $input)
     Constructs an integer object type
 SplPriorityQueue::__construct()
     Constructs a new empty queue
 SplQueue::__construct()
     Constructs a new queue implemented using a doubly linked list
 SplStack::__construct()
     Constructs a new stack implemented using a doubly linked list
 SplString::__construct(string $input)
     Constructs a string object type
 SplTempFileObject::__construct([int $max_memory = ``])
     Construct a new temporary file object
 SQLite3::__construct(string $filename [, int $flags = `` [, string $encryption_key = ``]])
     Instantiates an SQLite3 object and opens an SQLite 3 database
SQLite3Result SQLite3::query(string $query)
     Executes an SQL query
SQLite3Result SQLite3Stmt::execute()
     Executes a prepared statement and returns a result set object
SQLite3Stmt SQLite3::prepare(string $query)
     Prepares an SQL statement for execution
SQLiteDatabase sqlite_factory(string $filename [, int $mode = 0666 [, string $error_message = ``]])
     Opens an SQLite database and returns an SQLiteDatabase object
SQLiteResult SQLiteDatabase::query(resource $dbhandle, string $query [, int $result_type = `` [, string $error_msg = ``]])
     Executes a query against a given database and returns a result handle
SQLiteResult sqlite_query(resource $dbhandle, string $query [, int $result_type = `` [, string $error_msg = ``]])
     Executes a query against a given database and returns a result handle
SQLiteUnbuffered SQLiteDatabase::unbufferedQuery(resource $dbhandle, string $query [, int $result_type = `` [, string $error_msg = ``]])
     Execute a query that does not prefetch and buffer all data
SQLiteUnbuffered sqlite_unbuffered_query(resource $dbhandle, string $query [, int $result_type = `` [, string $error_msg = ``]])
     Execute a query that does not prefetch and buffer all data
 sqlite_fetch_string()
     Alias of sqlite_fetch_single
 StompFrame::__construct([string $command = `` [, array $headers = `` [, string $body = ``]]])
     Constructor
 strchr()
     Alias of strstr
 streamWrapper::__construct()
     Constructs a new stream wrapper
 stream_register_wrapper()
     Alias of stream_wrapper_register
string addcslashes(string $str, string $charlist)
     Quote string with slashes in a C style
string addslashes(string $str)
     Quote string with slashes
string apache_getenv(string $variable [, bool $walk_to_top = ``])
     Get an Apache subprocess_env variable
string apache_get_version()
     Fetch Apache version
string apache_note(string $note_name [, string $note_value = ``])
     Get and set apache request notes
string APCIterator::key()
     Get iterator key
string apc_bin_dump([array $files = `` [, array $user_vars = ``]])
     Get a binary dump of the given files and user variables
string apd_set_pprof_trace([string $dump_directory = `` [, string $fragment = \"pprof\"]])
     Starts the session debugging
string ArrayIterator::serialize()
     Serialize
string ArrayIterator::unserialize(string $serialized)
     Unserialize
string ArrayObject::getIteratorClass()
     Gets the iterator classname for the ArrayObject.
string array_flip(array $trans)
     Exchanges all keys with their associated values in an array
string array_multisort(array $arr [, mixed $arg = SORT_REGULAR [, mixed $... = ``]])
     Sort multiple or multi-dimensional arrays
string base64_decode(string $data [, bool $strict = false])
     Decodes data encoded with MIME base64
string base64_encode(string $data)
     Encodes data with MIME base64
string basename(string $path [, string $suffix = ``])
     Returns trailing name component of path
string base_convert(string $number, int $frombase, int $tobase)
     Convert a number between arbitrary bases
string bbcode_parse(resource $bbcode_container, string $to_parse)
     Parse a string following a given rule set
string bcadd(string $left_operand, string $right_operand [, int $scale = ``])
     Add two arbitrary precision numbers
string bcdiv(string $left_operand, string $right_operand [, int $scale = ``])
     Divide two arbitrary precision numbers
string bcmod(string $left_operand, string $modulus)
     Get modulus of an arbitrary precision number
string bcmul(string $left_operand, string $right_operand [, int $scale = ``])
     Multiply two arbitrary precision number
string bcpow(string $left_operand, string $right_operand [, int $scale = ``])
     Raise an arbitrary precision number to another
string bcpowmod(string $left_operand, string $right_operand, string $modulus [, int $scale = ``])
     Raise an arbitrary precision number to another, reduced by a specified modulus
string bcsqrt(string $operand [, int $scale = ``])
     Get the square root of an arbitrary precision number
string bcsub(string $left_operand, string $right_operand [, int $scale = ``])
     Subtract one arbitrary precision number from another
string bin2hex(string $str)
     Convert binary data into hexadecimal representation
string bindtextdomain(string $domain, string $directory)
     Sets the path for a domain
string bind_textdomain_codeset(string $domain, string $codeset)
     Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
string bson_encode(mixed $anything)
     Serializes a PHP variable into a BSON string
string bzerrstr(resource $bz)
     Returns a bzip2 error string
string bzread(resource $bz [, int $length = 1024])
     Binary safe bzip2 file read
string Cairo::statusToString(int $status)
     Retrieves the current status as string
string Cairo::versionString()
     Retrieves cairo version as string
string CairoImageSurface::getData()
     Gets the image data as string
string CairoPsSurface::levelToString(int $level)
     The levelToString purpose
string CairoSvgSurface::versionToString(int $version)
     The versionToString purpose
string cairo_image_surface_get_data(CairoImageSurface $surface)
     Description
string cairo_ps_level_to_string(int $level)
     Description
string cairo_status_to_string(int $status)
     Retrieves the current status as string
string cairo_svg_version_to_string(int $version)
     Description
string cairo_version_string()
     Retrieves cairo version as string
string calculhmac(string $clent, string $data)
     Obtain a hmac key (needs 2 arguments)
string calcul_hmac(string $clent, string $siretcode, string $price, string $reference, string $validity, string $taxation, string $devise, string $language)
     Obtain a hmac key (needs 8 arguments)
string chdb::get(string $key)
     Gets the value associated with a key
string chr(int $ascii)
     Return a specific character
string chunk_split(string $body [, int $chunklen = 76 [, string $end = \"\r\n\"]])
     Split a string into smaller chunks
string Collator::getErrorMessage(Collator $coll)
     Get text for collator`s last error code
string Collator::getLocale(int $type, Collator $coll)
     Get the locale name of the collator
string Collator::getSortKey(string $str, Collator $coll)
     Get sorting key for a string
string collator_get_error_message(Collator $coll)
     Get text for collator`s last error code
string collator_get_locale(int $type, Collator $coll)
     Get the locale name of the collator
string collator_get_sort_key(string $str, Collator $coll)
     Get sorting key for a string
string com_create_guid()
     Generate a globally unique identifier (GUID)
string convert_cyr_string(string $str, string $from, string $to)
     Convert from one Cyrillic character set to another
string convert_uudecode(string $data)
     Decode a uuencoded string
string convert_uuencode(string $data)
     Uuencode a string
string crack_getlastmessage()
     Returns the message from the last obscure check
string create_function(string $args, string $code)
     Create an anonymous (lambda-style) function
string crypt(string $str [, string $salt = ``])
     One-way string hashing
string ctype_alnum(string $text)
     Check for alphanumeric character(s)
string ctype_alpha(string $text)
     Check for alphabetic character(s)
string ctype_cntrl(string $text)
     Check for control character(s)
string ctype_digit(string $text)
     Check for numeric character(s)
string ctype_graph(string $text)
     Check for any printable character(s) except space
string ctype_lower(string $text)
     Check for lowercase character(s)
string ctype_print(string $text)
     Check for printable character(s)
string ctype_punct(string $text)
     Check for any printable character which is not whitespace or an   alphanumeric character
string ctype_space(string $text)
     Check for whitespace character(s)
string ctype_upper(string $text)
     Check for uppercase character(s)
string ctype_xdigit(string $text)
     Check for character(s) representing a hexadecimal digit
string cubrid_client_encoding([resource $conn_identifier = ``])
     Return the current CUBRID connection charset
string cubrid_current_oid(resource $req_identifier)
     Get OID of the current cursor location
string cubrid_db_name(array $result, int $index)
     Get db name from results of cubrid_list_dbs
string cubrid_error([resource $connection = ``])
     Get the error message
string cubrid_error_msg()
     Get last error message for the most recent function call
string cubrid_field_flags(resource $result, int $field_offset)
     Return a string with the flags of the given field offset
string cubrid_field_name(resource $result, int $field_offset)
     Return the name of the specified field index
string cubrid_field_table(resource $result, int $field_offset)
     Return the name of the table of the specified field
string cubrid_field_type(resource $result, int $field_offset)
     Return the type of the column corresponding to the given field offset
string cubrid_get_charset(resource $conn_identifier)
     Return the current CUBRID connection charset
string cubrid_get_class_name(resource $conn_identifier, string $oid)
     Get the class name using OID
string cubrid_get_client_info()
     Return the client library version
string cubrid_get_server_info(resource $conn_identifier)
     Return the CUBRID server version
string cubrid_insert_id([resource $conn_identifier = ``])
     Return the ID generated for the lastest updated AUTO_INCREMENT column
string cubrid_lob_size(resource $lob_identifier)
     Get BLOB/CLOB data size
string cubrid_new_glo(resource $conn_identifier, string $class_name, string $file_name)
     Create a glo instance
string cubrid_real_escape_string(string $unescaped_string [, resource $conn_identifier = ``])
     Escape special characters in a string for use in an SQL statement
string cubrid_result(resource $result, int $row [, mixed $field = ``])
     Return the value of a specific field in a specific row
string cubrid_version()
     Get the CUBRID PHP module`s version
string curl_error(resource $ch)
     Return a string containing the last error for the current session
string curl_multi_getcontent(resource $ch)
     Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set
string date(string $format [, int $timestamp = ``])
     Format a local time/date
string datefmt_format(mixed $value, IntlDateFormatter $fmt)
     Format the date/time value as a string
string datefmt_get_error_message(IntlDateFormatter $fmt)
     Get the error text from the last operation.
string datefmt_get_locale([int $which = ``, IntlDateFormatter $fmt])
     Get the locale used by formatter
string datefmt_get_pattern(IntlDateFormatter $fmt)
     Get the pattern used for the IntlDateFormatter
string datefmt_get_timezone_id(IntlDateFormatter $fmt)
     Get the timezone-id used for the IntlDateFormatter
string DateInterval::format(string $format)
     Formats the interval
string DateTime::format(string $format, DateTime $object)
     Returns date formatted according to given format
string DateTimeZone::getName(DateTimeZone $object)
     Returns the name of the timezone
string date_default_timezone_get()
     Gets the default timezone used by all date/time functions in a script
string db2_conn_error([resource $connection = ``])
     Returns a string containing the SQLSTATE returned by the last connection attempt
string db2_conn_errormsg([resource $connection = ``])
     Returns the last connection error message and SQLCODE value
string db2_escape_string(string $string_literal)
     Used to escape certain characters
string db2_field_name(resource $stmt, mixed $column)
     Returns the name of the column in the result set
string db2_field_type(resource $stmt, mixed $column)
     Returns the data type of the indicated column in a result set
string db2_get_option(resource $resource, string $option)
     Retrieves an option value for a statement resource or a connection resource
string db2_last_insert_id(resource $resource)
     Returns the auto generated ID of the last insert query that successfully   executed on this connection
string db2_lob_read(resource $stmt, int $colnum, int $length)
     Gets a user defined size of LOB files with each invocation
string db2_stmt_error([resource $stmt = ``])
     Returns a string containing the SQLSTATE returned by an SQL statement
string db2_stmt_errormsg([resource $stmt = ``])
     Returns a string containing the last SQL statement error message
string dba_fetch(string $key, resource $handle, int $skip)
     Fetch data specified by key
string dba_firstkey(resource $handle)
     Fetch first key
string dba_nextkey(resource $handle)
     Fetch next key
string dbplus_chdir([string $newdir = ``])
     Get/Set database virtual current directory
string dbplus_errcode([int $errno = ``])
     Get error string for given errorcode or last error
string dbplus_tcl(int $sid, string $script)
     Execute TCL code on server side
string dbx_error(object $link_identifier)
     Report the error message of the latest function call in the module
string dbx_escape_string(object $link_identifier, string $text)
     Escape a string so it can safely be used in an sql-statement
string dcgettext(string $domain, string $message, int $category)
     Overrides the domain for a single lookup
string dcngettext(string $domain, string $msgid1, string $msgid2, int $n, int $category)
     Plural version of dcgettext
string decbin(int $number)
     Decimal to binary
string dechex(int $number)
     Decimal to hexadecimal
string decoct(int $number)
     Decimal to octal
string dgettext(string $domain, string $message)
     Override the current domain
string dio_read(resource $fd [, int $len = 1024])
     Reads bytes from a file descriptor
string DirectoryIterator::getBasename([string $suffix = ``])
     Get base name of current DirectoryIterator item.
string DirectoryIterator::getFilename()
     Return file name of current DirectoryIterator item.
string DirectoryIterator::getPath()
     Get path of current Iterator item without filename
string DirectoryIterator::getPathname()
     Return path and file name of current DirectoryIterator item
string DirectoryIterator::getType()
     Determine the type of the current DirectoryIterator item
string DirectoryIterator::key()
     Return the key for the current DirectoryIterator item
string DirectoryIterator::__toString()
     Get file name as a string
string dirname(string $path)
     Returns parent directory`s path
string dngettext(string $domain, string $msgid1, string $msgid2, int $n)
     Plural version of dgettext
string DomAttribute::name()
     Returns the name of attribute
string DomAttribute::value()
     Returns value of attribute
string DOMCharacterData::substringData(int $offset, int $count)
     Extracts a range of data from the node
string DOMDocument::saveHTML([DOMNode $node = null])
     Dumps the internal document into a string using HTML formatting
string DOMDocument::saveXML([DOMNode $node = `` [, int $options = ``]])
     Dumps the internal XML tree back into a string
string DomDocumentType::name()
     Returns name of document type
string DomDocumentType::public_id()
     Returns public id of document type
string DomDocumentType::system_id()
     Returns the system id of document type
string DOMElement::getAttribute(string $name)
     Returns value of attribute
string DOMElement::getAttributeNS(string $namespaceURI, string $localName)
     Returns value of attribute
string DomElement::get_attribute(string $name)
     Returns the value of the given attribute
string DomElement::tagname()
     Returns the name of the current element
string DOMNode::lookupNamespaceURI(string $prefix)
     Gets the namespace URI of the node based on the prefix
string DOMNode::lookupPrefix(string $namespaceURI)
     Gets the namespace prefix of the node based on the namespace URI
string DomProcessingInstruction::data()
     Returns the data of ProcessingInstruction node
string DomProcessingInstruction::target()
     Returns the target of a ProcessingInstruction node
string domxml_version()
     Gets the XML library version
string DomXsltStylesheet::result_dump_file(DomDocument $xmldoc, string $filename)
     Dumps the result from a XSLT-Transformation into a file
string DomXsltStylesheet::result_dump_mem(DomDocument $xmldoc)
     Dumps the result from a XSLT-Transformation back into a string
string enchant_broker_get_error(resource $broker)
     Returns the last error of the broker
string enchant_dict_get_error(resource $dict)
     Returns the last error of the current spelling-session
string eregi_replace(string $pattern, string $replacement, string $string)
     Replace regular expression case insensitive
string ereg_replace(string $pattern, string $replacement, string $string)
     Replace regular expression
string escapeshellarg(string $arg)
     Escape a string to be used as a shell argument
string escapeshellcmd(string $command)
     Escape shell metacharacters
string event_buffer_read(resource $bevent, int $data_size)
     Read data from a buffered event
string exec(string $command [, array $output = `` [, int $return_var = ``]])
     Execute an external program
string exif_tagname(int $index)
     Get the header name for an index
string exif_thumbnail(string $filename [, int $width = `` [, int $height = `` [, int $imagetype = ``]]])
     Retrieve the embedded thumbnail of a TIFF or JPEG image
string fbsql_create_blob(string $blob_data [, resource $link_identifier = ``])
     Create a BLOB
string fbsql_create_clob(string $clob_data [, resource $link_identifier = ``])
     Create a CLOB
string fbsql_database(resource $link_identifier [, string $database = ``])
     Get or set the database name used with a connection
string fbsql_database_password(resource $link_identifier [, string $database_password = ``])
     Sets or retrieves the password for a FrontBase database
string fbsql_error([resource $link_identifier = ``])
     Returns the error message from previous operation
string fbsql_field_flags(resource $result [, int $field_offset = ``])
     Get the flags associated with the specified field in a result
string fbsql_field_name(resource $result [, int $field_index = ``])
     Get the name of the specified field in a result
string fbsql_field_table(resource $result [, int $field_offset = ``])
     Get name of the table the specified field is in
string fbsql_field_type(resource $result [, int $field_offset = ``])
     Get the type of the specified field in a result
string fbsql_hostname(resource $link_identifier [, string $host_name = ``])
     Get or set the host name used with a connection
string fbsql_password(resource $link_identifier [, string $password = ``])
     Get or set the user password used with a connection
string fbsql_read_blob(string $blob_handle [, resource $link_identifier = ``])
     Read a BLOB from the database
string fbsql_read_clob(string $clob_handle [, resource $link_identifier = ``])
     Read a CLOB from the database
string fbsql_table_name(resource $result, int $index)
     Get table name of field
string fbsql_username(resource $link_identifier [, string $username = ``])
     Get or set the username for the connection
string fdf_error([int $error_code = -1])
     Return error description for FDF error code
string fdf_get_encoding(resource $fdf_document)
     Get the value of the /Encoding key
string fdf_get_file(resource $fdf_document)
     Get the value of the /F key
string fdf_get_status(resource $fdf_document)
     Get the value of the /STATUS key
string fdf_get_version([resource $fdf_document = ``])
     Gets version number for FDF API or file
string fdf_next_field_name(resource $fdf_document [, string $fieldname = ``])
     Get the next field name
string fdf_save_string(resource $fdf_document)
     Returns the FDF document as a string
string fgetc(resource $handle)
     Gets character from file pointer
string fgets(resource $handle [, int $length = ``])
     Gets line from file pointer
string fgetss(resource $handle [, int $length = `` [, string $allowable_tags = ``]])
     Gets line from file pointer and strip HTML tags
string filepro_fieldname(int $field_number)
     Gets the name of a field
string filepro_fieldtype(int $field_number)
     Gets the type of a field
string filepro_retrieve(int $row_number, int $field_number)
     Retrieves data from a filePro database
string FilesystemIterator::key()
     Retrieve the key for the current file
string filetype(string $filename)
     Gets file type
string file_get_contents(string $filename [, bool $use_include_path = false [, resource $context = `` [, int $offset = -1 [, int $maxlen = ``]]]])
     Reads entire file into a string
string finfo_buffer(resource $finfo, string $string [, int $options = FILEINFO_NONE [, resource $context = ``]])
     Return information about a string buffer
string finfo_file(resource $finfo, string $file_name [, int $options = FILEINFO_NONE [, resource $context = ``]])
     Return information about a file
string fread(resource $handle, int $length)
     Binary-safe file read
string fribidi_log2vis(string $str, string $direction, int $charset)
     Convert a logical string to a visual one
string ftp_mkdir(resource $ftp_stream, string $directory)
     Creates a directory
string ftp_pwd(resource $ftp_stream)
     Returns the current directory name
string ftp_systype(resource $ftp_stream)
     Returns the system type identifier of the remote FTP server
string GearmanClient::context()
     Get the application context
string GearmanClient::data()
     Get the application data (deprecated)
string GearmanClient::do(string $function_name, string $workload [, string $unique = ``])
     Run a single task and return a result
string GearmanClient::doBackground(string $function_name, string $workload [, string $unique = ``])
     Run a task in the background
string GearmanClient::doHigh(string $function_name, string $workload [, string $unique = ``])
     Run a single high priority task
string GearmanClient::doHighBackground(string $function_name, string $workload [, string $unique = ``])
     Run a high priority task in the background
string GearmanClient::doJobHandle()
     Get the job handle for the running task
string GearmanClient::doLow(string $function_name, string $workload [, string $unique = ``])
     Run a single low priority task
string GearmanClient::doLowBackground(string $function_name, string $workload [, string $unique = ``])
     Run a low priority task in the background
string GearmanClient::error()
     Returns an error string for the last error encountered.
string GearmanJob::functionName()
     Get function name
string GearmanJob::handle()
     Get the job handle
string GearmanJob::unique()
     Get the unique identifier
string GearmanJob::workload()
     Get workload
string GearmanTask::data()
     Get data returned for a task
string GearmanTask::function()
     Get associated function name (deprecated)
string GearmanTask::functionName()
     Get associated function name
string GearmanTask::jobHandle()
     Get the job handle
string GearmanTask::unique()
     Get the unique identifier for a task
string GearmanTask::uuid()
     Get the unique identifier for a task (deprecated)
string GearmanWorker::error()
     Get the last error encountered
string gearman_job_handle()
     Get the job handle
string geoip_continent_code_by_name(string $hostname)
     Get the two letter continent code
string geoip_country_code3_by_name(string $hostname)
     Get the three letter country code
string geoip_country_code_by_name(string $hostname)
     Get the two letter country code
string geoip_country_name_by_name(string $hostname)
     Get the full country name
string geoip_database_info([int $database = GEOIP_COUNTRY_EDITION])
     Get GeoIP Database information
string geoip_db_filename(int $database)
     Returns the filename of the corresponding GeoIP Database
string geoip_isp_by_name(string $hostname)
     Get the Internet Service Provider (ISP) name
string geoip_org_by_name(string $hostname)
     Get the organization name
string geoip_region_name_by_code(string $country_code, string $region_code)
     Returns the region name for some country and region code combo
string geoip_time_zone_by_country_and_region(string $country_code [, string $region_code = ``])
     Returns the time zone for some country and region code combo
string getcwd()
     Gets the current working directory
string getenv(string $varname)
     Gets the value of an environment variable
string gethostbyaddr(string $ip_address)
     Get the Internet host name corresponding to a given IP address
string gethostbyname(string $hostname)
     Get the IPv4 address corresponding to a given Internet host name
string gethostname()
     Gets the host name
string getprotobynumber(int $number)
     Get protocol name associated with protocol number
string getservbyport(int $port, string $protocol)
     Get Internet service which corresponds to port and protocol
string gettext(string $message)
     Lookup a message in the current domain
string gettype(mixed $var)
     Get the type of a variable
string get_called_class()
     the \"Late Static Binding\" class name
string get_cfg_var(string $option)
     Gets the value of a PHP configuration option
string get_class([object $object = ``])
     Returns the name of the class of an object
string get_current_user()
     Gets the name of the owner of the current PHP script
string get_include_path()
     Gets the current include_path configuration option
string get_parent_class([mixed $object = ``])
     Retrieves the parent class name for object or class
string get_resource_type(resource $handle)
     Returns the resource type
string Gmagick::getcopyright()
     Returns the GraphicsMagick API copyright as a string
string Gmagick::getfilename()
     The filename associated with an image sequence
string Gmagick::getimagefilename()
     Returns the filename of a particular image in a sequence
string Gmagick::getimageformat()
     Returns the format of a particular image in a sequence
string Gmagick::getimageprofile(string $name)
     Returns the named image profile.
string Gmagick::getimagesignature()
     Generates an SHA-256 message digest
string Gmagick::getpackagename()
     Returns the GraphicsMagick package name.
string Gmagick::getreleasedate()
     Returns the GraphicsMagick release date as a string.
string Gmagick::removeimageprofile(string $name)
     Removes the named image profile and returns it
string GmagickDraw::getfont()
     Returns the font
string GmagickDraw::gettextencoding()
     Returns the code set used for text annotations
string gmdate(string $format [, int $timestamp = ``])
     Format a GMT/UTC date/time
string gmp_strval(resource $gmpnumber [, int $base = ``])
     Convert GMP number to string
string gmstrftime(string $format [, int $timestamp = time()])
     Format a GMT/UTC time/date according to locale settings
string gnupg_decrypt(resource $identifier, string $text)
     Decrypts a given text
string gnupg_encrypt(resource $identifier, string $plaintext)
     Encrypts a given text
string gnupg_encryptsign(resource $identifier, string $plaintext)
     Encrypts and signs a given text
string gnupg_export(resource $identifier, string $fingerprint)
     Exports a key
string gnupg_geterror(resource $identifier)
     Returns the errortext, if a function fails
string gnupg_sign(resource $identifier, string $plaintext)
     Signs a given text
string grapheme_extract(string $haystack, int $size [, int $extract_type = `` [, int $start = `` [, int $next = ``]]])
     Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8.
string grapheme_stristr(string $haystack, string $needle [, bool $before_needle = false])
     Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack.
string grapheme_strstr(string $haystack, string $needle [, bool $before_needle = false])
     Returns part of haystack string from the first occurrence of needle to the end of haystack.
string gupnp_context_get_host_ip(resource $context)
     Get the IP address
string gupnp_root_device_get_relative_location(resource $root_device)
     Get the relative location of root device.
string gzcompress(string $data [, int $level = -1])
     Compress a string
string gzdecode(string $data [, int $length = ``])
     Decodes a gzip compressed string
string gzdeflate(string $data [, int $level = -1])
     Deflate a string
string gzencode(string $data [, int $level = -1 [, int $encoding_mode = FORCE_GZIP]])
     Create a gzip compressed string
string gzgetc(resource $zp)
     Get character from gz-file pointer
string gzgets(resource $zp, int $length)
     Get line from file pointer
string gzgetss(resource $zp, int $length [, string $allowable_tags = ``])
     Get line from gz-file pointer and strip HTML tags
string gzinflate(string $data [, int $length = ``])
     Inflate a deflated string
string gzread(resource $zp, int $length)
     Binary-safe gz-file read
string gzuncompress(string $data [, int $length = ``])
     Uncompress a compressed string
string HaruDoc::getInfoAttr(int $type)
     Get current value of the specified document attribute
string HaruDoc::loadTTC(string $fontfile, int $index [, bool $embed = false])
     Load the font with the specified index from TTC file
string HaruDoc::loadTTF(string $fontfile [, bool $embed = false])
     Load TTF font file
string HaruDoc::loadType1(string $afmfile [, string $pfmfile = ``])
     Load Type1 font
string HaruDoc::readFromStream(int $bytes)
     Read data from the temporary stream
string HaruFont::getEncodingName()
     Get the name of the encoding
string HaruFont::getFontName()
     Get the name of the font
string HaruImage::getColorSpace()
     Get the name of the color space
string hash(string $algo, string $data [, bool $raw_output = false])
     Generate a hash value (message digest)
string hash_file(string $algo, string $filename [, bool $raw_output = false])
     Generate a hash value using the contents of a given file
string hash_final(resource $context [, bool $raw_output = false])
     Finalize an incremental hash and return resulting digest
string hash_hmac(string $algo, string $data, string $key [, bool $raw_output = false])
     Generate a keyed hash value using the HMAC method
string hash_hmac_file(string $algo, string $filename, string $key [, bool $raw_output = false])
     Generate a keyed hash value using the HMAC method and the contents of a given file
string hebrev(string $hebrew_text [, int $max_chars_per_line = ``])
     Convert logical Hebrew text to visual text
string hebrevc(string $hebrew_text [, int $max_chars_per_line = ``])
     Convert logical Hebrew text to visual text with newline conversion
string htmlentities(string $string [, int $flags = ENT_COMPAT [, string $charset = `` [, bool $double_encode = true]]])
     Convert all applicable characters to HTML entities
string htmlspecialchars(string $string [, int $flags = ENT_COMPAT [, string $charset = `` [, bool $double_encode = true]]])
     Convert special characters to HTML entities
string htmlspecialchars_decode(string $string [, int $quote_style = ENT_COMPAT])
     Convert special HTML entities back to characters
string html_entity_decode(string $string [, int $quote_style = ENT_COMPAT [, string $charset = `UTF-8`]])
     Convert all HTML entities to their applicable characters
string HttpDeflateStream::finish([string $data = ``])
     Finalize deflate stream
string HttpDeflateStream::flush([string $data = ``])
     Flush deflate stream
string HttpDeflateStream::update(string $data)
     Update deflate stream
string HttpInflateStream::finish([string $data = ``])
     Finalize inflate stream
string HttpInflateStream::flush([string $data = ``])
     Flush inflate stream
string HttpInflateStream::update(string $data)
     Update inflate stream
string HttpMessage::getBody()
     Get message body
string HttpMessage::getHeader(string $header)
     Get header
string HttpMessage::getHttpVersion()
     Get HTTP version
string HttpMessage::getRequestMethod()
     Get request method
string HttpMessage::getRequestUrl()
     Get request URL
string HttpMessage::getResponseStatus()
     Get response status
string HttpMessage::guessContentType(string $magic_file [, int $magic_mode = MAGIC_MIME])
     Guess content type
string HttpMessage::toString([bool $include_parent = false])
     Get string representation
string HttpQueryString::set(mixed $params)
     Set query string params
string HttpQueryString::toString()
     Get query string
string HttpRequest::getContentType()
     Get content type
string HttpRequest::getPutData()
     Get put data
string HttpRequest::getPutFile()
     Get put file
string HttpRequest::getQueryData()
     Get query data
string HttpRequest::getRawPostData()
     Get raw post data
string HttpRequest::getRawRequestMessage()
     Get raw request message
string HttpRequest::getRawResponseMessage()
     Get raw response message
string HttpRequest::getResponseBody()
     Get response body
string HttpRequest::getResponseStatus()
     Get response status
string HttpRequest::getUrl()
     Get url
string HttpResponse::getCacheControl()
     Get cache control
string HttpResponse::getContentDisposition()
     Get content disposition
string HttpResponse::getContentType()
     Get content type
string HttpResponse::getData()
     Get data
string HttpResponse::getETag()
     Get ETag
string HttpResponse::getFile()
     Get file
string HttpResponse::getRequestBody()
     Get request body
string HttpResponse::guessContentType(string $magic_file [, int $magic_mode = MAGIC_MIME])
     Guess content type
string http_build_cookie(array $cookie)
     Build cookie string
string http_build_query(mixed $query_data [, string $numeric_prefix = `` [, string $arg_separator = `` [, int $enc_type = ``]]])
     Generate URL-encoded query string
string http_build_str(array $query [, string $prefix = `` [, string $arg_separator = ini_get(\"arg_separator.output\")]])
     Build query string
string http_build_url([mixed $url = `` [, mixed $parts = `` [, int $flags = HTTP_URL_REPLACE [, array $new_url = ``]]]])
     Build a URL
string http_chunked_decode(string $encoded)
     Decode chunked-encoded data
string http_date([int $timestamp = ``])
     Compose HTTP RFC compliant date
string http_deflate(string $data [, int $flags = ``])
     Deflate data
string http_get(string $url [, array $options = `` [, array $info = ``]])
     Perform GET request
string http_get_request_body()
     Get request body as string
string http_head(string $url [, array $options = `` [, array $info = ``]])
     Perform HEAD request
string http_inflate(string $data)
     Inflate data
string http_negotiate_charset(array $supported [, array $result = ``])
     Negotiate clients preferred character set
string http_negotiate_content_type(array $supported [, array $result = ``])
     Negotiate clients preferred content type
string http_negotiate_language(array $supported [, array $result = ``])
     Negotiate clients preferred language
string http_persistent_handles_clean([string $ident = ``])
     Clean up persistent handles
string http_persistent_handles_ident([string $ident = ``])
     Get/set ident of persistent handles
string http_post_data(string $url, string $data [, array $options = `` [, array $info = ``]])
     Perform POST request with pre-encoded data
string http_post_fields(string $url, array $data [, array $files = `` [, array $options = `` [, array $info = ``]]])
     Perform POST request with data to be encoded
string http_put_data(string $url, string $data [, array $options = `` [, array $info = ``]])
     Perform PUT request with data
string http_put_file(string $url, string $file [, array $options = `` [, array $info = ``]])
     Perform PUT request with file
string http_put_stream(string $url, resource $stream [, array $options = `` [, array $info = ``]])
     Perform PUT request with stream
string http_request(int $method, string $url [, string $body = `` [, array $options = `` [, array $info = ``]]])
     Perform custom request
string http_request_body_encode(array $fields, array $files)
     Encode request body
string http_request_method_name(int $method)
     Get request method name
string hw_api_attribute::key()
     Returns key of the attribute
string hw_api_attribute::langdepvalue(string $language)
     Returns value for a given language
string hw_api_attribute::value()
     Returns value of the attribute
string hw_api_content::mimetype()
     Returns mimetype
string hw_api_content::read(string $buffer, int $len)
     Read content
string hw_api_object::title(array $parameter)
     Returns the title attribute
string hw_api_object::value(string $name)
     Returns value of attribute
string hw_api_reason::description()
     Returns description of reason
string hw_Array2Objrec(array $object_array)
     Convert attributes from object array to object record
string hw_DocByAnchorObj(int $connection, int $anchorID)
     Object record object belonging to anchor
string hw_Document_Attributes(int $hw_document)
     Object record of hw_document
string hw_Document_BodyTag(int $hw_document [, string $prefix = ``])
     Body tag of hw_document
string hw_Document_Content(int $hw_document)
     Returns content of hw_document
string hw_dummy(int $link, int $id, int $msgid)
     Hyperwave dummy function
string hw_ErrorMsg(int $connection)
     Returns error message
string hw_GetAndLock(int $connection, int $objectID)
     Return object record and lock object
string hw_getrellink(int $link, int $rootid, int $sourceid, int $destid)
     Get link from source to dest relative to rootid
string hw_getusername(int $connection)
     Name of currently logged in user
string hw_Identify(int $link, string $username, string $password)
     Identifies as user
string hw_Info(int $connection)
     Info about connection
string hw_stat(int $link)
     Returns status string
string ibase_blob_get(resource $blob_handle, int $len)
     Get len bytes data from open blob
string ibase_blob_import(resource $link_identifier, resource $file_handle)
     Create blob, copy file in it, and close it
string ibase_db_info(resource $service_handle, string $db, int $action [, int $argument = ``])
     Request statistics about a database
string ibase_errmsg()
     Return error messages
string ibase_server_info(resource $service_handle, int $action)
     Request information about a database server
string ibase_wait_event(string $event_name1 [, string $event_name2 = `` [, string $... = ``, resource $connection]])
     Wait for an event to be posted by the database
string iconv(string $in_charset, string $out_charset, string $str)
     Convert string to requested character encoding
string iconv_mime_decode(string $encoded_header [, int $mode = `` [, string $charset = ini_get(\"iconv.internal_encoding\")]])
     Decodes a MIME header field
string iconv_mime_encode(string $field_name, string $field_value [, array $preferences = ``])
     Composes a MIME header field
string iconv_substr(string $str, int $offset [, int $length = iconv_strlen($str, $charset) [, string $charset = ini_get(\"iconv.internal_encoding\")]])
     Cut out part of a string
string id3_get_frame_long_name(string $frameId)
     Get the long name of an ID3v2 frame
string id3_get_frame_short_name(string $frameId)
     Get the short name of an ID3v2 frame
string id3_get_genre_name(int $genre_id)
     Get the name for a genre id
string idn_to_ascii(string $domain [, int $options = ``])
     Convert domain name to IDNA ASCII form.
string idn_to_utf8(string $domain [, int $options = ``])
     Convert domain name from IDNA ASCII to Unicode.
string ifxus_read_slob(int $bid, int $nbytes)
     Reads nbytes of the slob object
string ifx_error([resource $link_identifier = ``])
     Returns error code of last Informix call
string ifx_errormsg([int $errorcode = ``])
     Returns error message of last Informix call
string ifx_get_blob(int $bid)
     Return the content of a blob object
string ifx_get_char(int $bid)
     Return the content of the char object
string iis_get_script_map(int $server_instance, string $virtual_path, string $script_extension)
     Gets script mapping on a virtual directory for a specific extension
string image_type_to_extension(int $imagetype [, bool $include_dot = ``])
     Get file extension for image type
string image_type_to_mime_type(int $imagetype)
     Get Mime-Type for image-type returned by getimagesize,   exif_read_data, exif_thumbnail, exif_imagetype
string Imagick::getCopyright()
     Returns the ImageMagick API copyright as a string
string Imagick::getFilename()
     The filename associated with an image sequence
string Imagick::getFont()
     Gets font
string Imagick::getFormat()
     Returns the format of the Imagick object
string Imagick::getHomeURL()
     Returns the ImageMagick home URL
string Imagick::getImageArtifact(string $artifact)
     Get image artifact
string Imagick::getImageBlob()
     Returns the image sequence as a blob
string Imagick::getImageFilename()
     Returns the filename of a particular image in a sequence
string Imagick::getImageFormat()
     Returns the format of a particular image in a sequence
string Imagick::getImageMagickLicense()
     Returns a string containing the ImageMagick license
string Imagick::getImageProfile(string $name)
     Returns the named image profile
string Imagick::getImageProperty(string $name)
     Returns the named image property
string Imagick::getImagesBlob()
     Returns all image sequences as a blob
string Imagick::getImageSignature()
     Generates an SHA-256 message digest
string Imagick::getOption(string $key)
     Returns a value associated with the specified key
string Imagick::getPackageName()
     Returns the ImageMagick package name
string Imagick::getReleaseDate()
     Returns the ImageMagick release date
string Imagick::removeImageProfile(string $name)
     Removes the named image profile and returns it
string ImagickDraw::getClipPath()
     Obtains the current clipping path ID
string ImagickDraw::getFont()
     Returns the font
string ImagickDraw::getFontFamily()
     Returns the font family
string ImagickDraw::getTextEncoding()
     Returns the code set used for text annotations
string ImagickDraw::getVectorGraphics()
     Returns a string containing vector graphics
string ImagickPixel::getColorAsString()
     Returns the color as a string
string imap_8bit(string $string)
     Convert an 8bit string to a quoted-printable string
string imap_base64(string $text)
     Decode BASE64 encoded text
string imap_binary(string $string)
     Convert an 8bit string to a base64 string
string imap_body(resource $imap_stream, int $msg_number [, int $options = ``])
     Read the message body
string imap_fetchbody(resource $imap_stream, int $msg_number, string $section [, int $options = ``])
     Fetch a particular section of the body of the message
string imap_fetchheader(resource $imap_stream, int $msg_number [, int $options = ``])
     Returns header for a message
string imap_fetchmime(resource $imap_stream, int $msg_number, string $section [, int $options = ``])
     Fetch MIME headers for a particular section of the message
string imap_last_error()
     Gets the last IMAP error that occurred during this page request
string imap_mail_compose(array $envelope, array $body)
     Create a MIME message based on given envelope and body sections
string imap_qprint(string $string)
     Convert a quoted-printable string to an 8 bit string
string imap_rfc822_write_address(string $mailbox, string $host, string $personal)
     Returns a properly formatted email address given the mailbox, host, and personal info
string imap_utf7_decode(string $text)
     Decodes a modified UTF-7 encoded string
string imap_utf7_encode(string $data)
     Converts ISO-8859-1 string to modified UTF-7 text
string imap_utf8(string $mime_encoded_text)
     Converts MIME-encoded text to UTF-8
string implode(string $glue, array $pieces)
     Join array elements with a string
string inet_ntop(string $in_addr)
     Converts a packed internet address to a human readable representation
string inet_pton(string $address)
     Converts a human readable IP address to its packed in_addr representation
string ingres_charset(resource $link)
     Returns the installation character set
string ingres_cursor(resource $result)
     Get a cursor name for a given result resource
string ingres_error([resource $link = ``])
     Get a meaningful error message for the last error generated
string ingres_errsqlstate([resource $link = ``])
     Get the last SQLSTATE error code generated
string ingres_escape_string(resource $link, string $source_string)
     Escape special characters for use in a query
string ingres_field_name(resource $result, int $index)
     Get the name of a field in a query result
string ingres_field_type(resource $result, int $index)
     Get the type of a field in a query result
string ini_get(string $varname)
     Gets the value of a configuration option
string ini_set(string $varname, string $newvalue)
     Sets the value of a configuration option
string IntlDateFormatter::format(mixed $value, IntlDateFormatter $fmt)
     Format the date/time value as a string
string IntlDateFormatter::getErrorMessage(IntlDateFormatter $fmt)
     Get the error text from the last operation.
string IntlDateFormatter::getLocale([int $which = ``, IntlDateFormatter $fmt])
     Get the locale used by formatter
string IntlDateFormatter::getPattern(IntlDateFormatter $fmt)
     Get the pattern used for the IntlDateFormatter
string IntlDateFormatter::getTimeZoneId(IntlDateFormatter $fmt)
     Get the timezone-id used for the IntlDateFormatter
string intl_error_name(int $error_code)
     Get symbolic name for a given error code
string intl_get_error_message()
     Get description of the last error
string JDMonthName(int $julianday, int $mode)
     Returns a month name
string JDToFrench(int $juliandaycount)
     Converts a Julian Day Count to the French Republican Calendar
string JDToGregorian(int $julianday)
     Converts Julian Day Count to Gregorian date
string jdtojewish(int $juliandaycount [, bool $hebrew = false [, int $fl = ``]])
     Converts a Julian day count to a Jewish calendar date
string JDToJulian(int $julianday)
     Converts a Julian Day Count to a Julian Calendar Date
string json_encode(mixed $value [, int $options = ``])
     Returns the JSON representation of a value
string judy_version()
     Return or print the current PHP Judy version
string KTaglib_ID3v2_AttachedPictureFrame::getDescription()
     Returns a description for the picture in a picture frame
string KTaglib_ID3v2_AttachedPictureFrame::getMimeType()
     Returns the mime type of the picture
string KTaglib_ID3v2_AttachedPictureFrame::setMimeType(string $type)
     Set`s the mime type of the picture
string KTaglib_ID3v2_Frame::__toString()
     Returns a string representation of the frame
string KTaglib_Tag::getAlbum()
     Returns the title string from a ID3 tag
string KTaglib_Tag::getArtist()
     Returns the artist string from a ID3 tag
string KTaglib_Tag::getComment()
     Returns the comment from a ID3 tag
string KTaglib_Tag::getGenre()
     Returns the genre from a ID3 tag
string KTaglib_Tag::getTitle()
     Returns the title string from a ID3 tag
string lcfirst(string $str)
     Make a string`s first character lowercase
string ldap_8859_to_t61(string $value)
     Translate 8859 characters to t61 characters
string ldap_dn2ufn(string $dn)
     Convert DN to User Friendly Naming format
string ldap_err2str(int $errno)
     Convert LDAP error number into string error message
string ldap_error(resource $link_identifier)
     Return the LDAP error message of the last LDAP command
string ldap_first_attribute(resource $link_identifier, resource $result_entry_identifier)
     Return first attribute
string ldap_get_dn(resource $link_identifier, resource $result_entry_identifier)
     Get the DN of a result entry
string ldap_next_attribute(resource $link_identifier, resource $result_entry_identifier)
     Get the next attribute in result
string ldap_t61_to_8859(string $value)
     Translate t61 characters to 8859 characters
string Locale::acceptFromHttp(string $header)
     Tries to find out best available locale based on HTTP \"Accept-Language\" header
string Locale::composeLocale(array $subtags)
     Returns a correctly ordered and delimited locale ID
string Locale::getDefault()
     Gets the default locale value from the INTL global `default_locale`
string Locale::getDisplayLanguage(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for language of the inputlocale
string Locale::getDisplayName(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for the input locale
string Locale::getDisplayRegion(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for region of the input locale
string Locale::getDisplayScript(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for script of the input locale
string Locale::getDisplayVariant(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for variants of the input locale
string Locale::getPrimaryLanguage(string $locale)
     Gets the primary language for the input locale
string Locale::getRegion(string $locale)
     Gets the region for the input locale
string Locale::getScript(string $locale)
     Gets the script for the input locale
string Locale::lookup(array $langtag, string $locale [, bool $canonicalize = false [, string $default = ``]])
     Searches the language tag list for the best match to the language
string locale_accept_from_http(string $header)
     Tries to find out best available locale based on HTTP \"Accept-Language\" header
string locale_compose(array $subtags)
     Returns a correctly ordered and delimited locale ID
string locale_get_default()
     Gets the default locale value from the INTL global `default_locale`
string locale_get_display_language(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for language of the inputlocale
string locale_get_display_name(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for the input locale
string locale_get_display_region(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for region of the input locale
string locale_get_display_script(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for script of the input locale
string locale_get_display_variant(string $locale [, string $in_locale = ``])
     Returns an appropriately localized display name for variants of the input locale
string locale_get_primary_language(string $locale)
     Gets the primary language for the input locale
string locale_get_region(string $locale)
     Gets the region for the input locale
string locale_get_script(string $locale)
     Gets the script for the input locale
string locale_lookup(array $langtag, string $locale [, bool $canonicalize = false [, string $default = ``]])
     Searches the language tag list for the best match to the language
string long2ip(string $proper_address)
     Converts an (IPv4) Internet network address into a string in Internet standard dotted format
string ltrim(string $str [, string $charlist = ``])
     Strip whitespace (or other characters) from the beginning of a string
string lzf_compress(string $data)
     LZF compression
string lzf_decompress(string $data)
     LZF decompression
string mailparse_determine_best_xfer_encoding(resource $fp)
     Gets the best way of encoding
string mailparse_msg_extract_part_file(resource $mimemail, mixed $filename [, callback $callbackfunc = ``])
     Extracts/decodes a message section
string mailparse_msg_extract_whole_part_file(resource $mimemail, string $filename [, callback $callbackfunc = ``])
     Extracts a message section including headers without decoding the transfer encoding
string maxdb::character_set_name(resource $link)
     Returns the default character set for the database connection
string maxdb::error(resource $link)
     Returns a string description of the last error
string maxdb::get_host_info(resource $link)
     Returns a string representing the type of connection used
string maxdb::info(resource $link)
     Retrieves information about the most recently executed query
string maxdb::protocol_version(resource $link)
     Returns the version of the MaxDB protocol used
string maxdb::real_escape_string(resource $link, string $escapestr)
     Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
string maxdb::server_info(resource $link)
     Returns the version of the MaxDB server
string maxdb::sqlstate(resource $link)
     Returns the SQLSTATE error from previous MaxDB operation
string maxdb::stat(resource $link)
     Gets the current system status
string maxdb_character_set_name(resource $link)
     Returns the default character set for the database connection
string maxdb_connect_error()
     Returns a string description of the last connect error
string maxdb_error(resource $link)
     Returns a string description of the last error
string maxdb_get_client_info()
     Returns the MaxDB client version as a string
string maxdb_get_host_info(resource $link)
     Returns a string representing the type of connection used
string maxdb_get_proto_info(resource $link)
     Returns the version of the MaxDB protocol used
string maxdb_get_server_info(resource $link)
     Returns the version of the MaxDB server
string maxdb_info(resource $link)
     Retrieves information about the most recently executed query
string maxdb_real_escape_string(resource $link, string $escapestr)
     Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
string maxdb_sqlstate(resource $link)
     Returns the SQLSTATE error from previous MaxDB operation
string maxdb_stat(resource $link)
     Gets the current system status
string maxdb_stmt::error(resource $stmt)
     Returns a string description for last statement error
string maxdb_stmt_error(resource $stmt)
     Returns a string description for last statement error
string maxdb_stmt_sqlstate(resource $stmt)
     Returns SQLSTATE error from previous statement operation
string mb_convert_case(string $str, int $mode [, string $encoding = mb_internal_encoding()])
     Perform case folding on a string
string mb_convert_encoding(string $str, string $to_encoding [, mixed $from_encoding = ``])
     Convert character encoding
string mb_convert_kana(string $str [, string $option = \"KV\" [, string $encoding = ``]])
     Convert \"kana\" one from another (\"zen-kaku\", \"han-kaku\" and more)
string mb_convert_variables(string $to_encoding, mixed $from_encoding, mixed $vars [, mixed $... = ``])
     Convert character code in variable(s)
string mb_decode_mimeheader(string $str)
     Decode string in MIME header field
string mb_decode_numericentity(string $str, array $convmap, string $encoding)
     Decode HTML numeric string reference to character
string mb_detect_encoding(string $str [, mixed $encoding_list = mb_detect_order() [, bool $strict = false]])
     Detect character encoding
string mb_encode_mimeheader(string $str [, string $charset = `` [, string $transfer_encoding = `` [, string $linefeed = `` [, int $indent = ``]]]])
     Encode string for MIME header
string mb_encode_numericentity(string $str, array $convmap, string $encoding)
     Encode character to HTML numeric string reference
string mb_eregi_replace(string $pattern, string $replace, string $string [, string $option = \"msri\"])
     Replace regular expression with multibyte support ignoring case
string mb_ereg_replace(string $pattern, string $replacement, string $string [, string $option = \"msr\"])
     Replace regular expression with multibyte support
string mb_output_handler(string $contents, int $status)
     Callback function converts character encoding in output buffer
string mb_preferred_mime_name(string $encoding)
     Get MIME charset string
string mb_regex_encoding([string $encoding = ``])
     Returns current encoding for multibyte regex as string
string mb_regex_set_options([string $options = \"msr\"])
     Set/Get the default options for mbregex functions
string mb_strcut(string $str, int $start [, int $length = `` [, string $encoding = ``]])
     Get part of string
string mb_strimwidth(string $str, int $start, int $width [, string $trimmarker = `` [, string $encoding = ``]])
     Get truncated string with specified width
string mb_stristr(string $haystack, string $needle [, bool $part = false [, string $encoding = ``]])
     Finds first occurrence of a string within another, case insensitive
string mb_strlen(string $str [, string $encoding = ``])
     Get string length
string mb_strpos(string $haystack, string $needle [, int $offset = `` [, string $encoding = ``]])
     Find position of first occurrence of string in a string
string mb_strrchr(string $haystack, string $needle [, bool $part = false [, string $encoding = ``]])
     Finds the last occurrence of a character in a string within another
string mb_strrichr(string $haystack, string $needle [, bool $part = false [, string $encoding = ``]])
     Finds the last occurrence of a character in a string within another, case insensitive
string mb_strstr(string $haystack, string $needle [, bool $part = false [, string $encoding = ``]])
     Finds first occurrence of a string within another
string mb_strtolower(string $str [, string $encoding = mb_internal_encoding()])
     Make a string lowercase
string mb_strtoupper(string $str [, string $encoding = mb_internal_encoding()])
     Make a string uppercase
string mb_strwidth(string $str [, string $encoding = ``])
     Return width of string
string mb_substr(string $str, int $start [, int $length = `` [, string $encoding = ``]])
     Get part of string
string mb_substr_count(string $haystack, string $needle [, string $encoding = ``])
     Count the number of substring occurrences
string mcrypt_cbc(string $cipher, string $key, string $data, int $mode [, string $iv = ``])
     Encrypts/decrypts data in CBC mode
string mcrypt_cfb(string $cipher, string $key, string $data, int $mode [, string $iv = ``])
     Encrypts/decrypts data in CFB mode
string mcrypt_create_iv(int $size [, int $source = MCRYPT_DEV_RANDOM])
     Creates an initialization vector (IV) from a random source
string mcrypt_decrypt(string $cipher, string $key, string $data, string $mode [, string $iv = ``])
     Decrypts crypttext with given parameters
string mcrypt_ecb(string $cipher, string $key, string $data, int $mode [, string $iv = ``])
     Deprecated: Encrypts/decrypts data in ECB mode
string mcrypt_encrypt(string $cipher, string $key, string $data, string $mode [, string $iv = ``])
     Encrypts plaintext with given parameters
string mcrypt_enc_get_algorithms_name(resource $td)
     Returns the name of the opened algorithm
string mcrypt_enc_get_modes_name(resource $td)
     Returns the name of the opened mode
string mcrypt_generic(resource $td, string $data)
     This function encrypts data
string mcrypt_get_cipher_name(string $cipher)
     Gets the name of the specified cipher
string mcrypt_ofb(string $cipher, string $key, string $data, int $mode [, string $iv = ``])
     Encrypts/decrypts data in OFB mode
string md5(string $str [, bool $raw_output = false])
     Calculate the md5 hash of a string
string md5_file(string $filename [, bool $raw_output = false])
     Calculates the md5 hash of a given file
string mdecrypt_generic(resource $td, string $data)
     Decrypts data
string Memcache::getVersion()
     Return version of the server
string Memcached::getResultMessage()
     Return the message describing the result of the last operation
string MessageFormatter::format(array $args, MessageFormatter $fmt)
     Format the message
string MessageFormatter::formatMessage(string $locale, string $pattern, array $args)
     Quick format message
string MessageFormatter::getErrorMessage(MessageFormatter $fmt)
     Get the error text from the last operation
string MessageFormatter::getLocale(NumberFormatter $formatter)
     Get the locale for which the formatter was created.
string MessageFormatter::getPattern(MessageFormatter $fmt)
     Get the pattern used by the formatter
string metaphone(string $str [, int $phonemes = ``])
     Calculate the metaphone key of a string
string mhash(int $hash, string $data [, string $key = ``])
     Computes hash
string mhash_get_hash_name(int $hash)
     Gets the name of the specified hash
string mhash_keygen_s2k(int $hash, string $password, string $salt, int $bytes)
     Generates a key
string mime_content_type(string $filename)
     Detect MIME Content-type for a file (deprecated)
string money_format(string $format, float $number)
     Formats a number as a currency string
string Mongo::getSlave()
     Returns the address being used by this for slaveOkay reads
string Mongo::switchSlave()
     Choose a new slave for slaveOkay reads
string Mongo::__toString()
     String representation of this connection
string MongoBinData::__toString()
     The string representation of this binary data object.
string MongoCode::__toString()
     Returns this code as a string
string MongoCollection::getName()
     Returns this collection`s name
string MongoCollection::__toString()
     String representation of this collection
string MongoCursor::key()
     Returns the current result`s _id
string MongoDate::__toString()
     Returns a string representation of this date
string MongoDB::__toString()
     The name of this database
string MongoGridFSCursor::key()
     Returns the current result`s filename
string MongoGridFSFile::getBytes()
     Returns this file`s contents as a string of bytes
string MongoGridFSFile::getFilename()
     Returns this file`s filename
string MongoId::getHostname()
     Gets the hostname being used for this machine`s ids
string MongoId::__toString()
     Returns a hexidecimal representation of this id
string MongoInt32::__toString()
     Returns the string representation of this 32-bit integer.
string MongoInt64::__toString()
     Returns the string representation of this 64-bit integer.
string MongoRegex::__toString()
     A string representation of this regular expression
string MongoTimestamp::__toString()
     Returns a string representation of this timestamp
string mqseries_strerror(int $reason)
     Returns the error message corresponding to a result code (MQRC).
string msession_get(string $session, string $name, string $value)
     Get value from session
string msession_get_data(string $session)
     Get data session unstructured data
string msession_inc(string $session, string $name)
     Increment value in session
string msession_plugin(string $session, string $val [, string $param = ``])
     Call an escape function within the msession personality plugin
string msession_randstr(int $param)
     Get random string
string msession_uniq(int $param [, string $classname = `` [, string $data = ``]])
     Get unique id
string msgfmt_format(array $args, MessageFormatter $fmt)
     Format the message
string msgfmt_format_message(string $locale, string $pattern, array $args)
     Quick format message
string msgfmt_get_error_message(MessageFormatter $fmt)
     Get the error text from the last operation
string msgfmt_get_locale(NumberFormatter $formatter)
     Get the locale for which the formatter was created.
string msgfmt_get_pattern(MessageFormatter $fmt)
     Get the pattern used by the formatter
string msql_error()
     Returns error message of last msql call
string msql_field_flags(resource $result, int $field_offset)
     Get field flags
string msql_field_name(resource $result, int $field_offset)
     Get the name of the specified field in a result
string msql_field_type(resource $result, int $field_offset)
     Get field type
string msql_result(resource $result, int $row [, mixed $field = ``])
     Get result data
string mssql_field_name(resource $result [, int $offset = -1])
     Get the name of a field
string mssql_field_type(resource $result [, int $offset = -1])
     Gets the type of a field
string mssql_get_last_message()
     Returns the last message from the server
string mssql_guid_string(string $binary [, bool $short_format = false])
     Converts a 16 byte binary GUID to a string
string mssql_result(resource $result, int $row, mixed $field)
     Get result data
string mysqli::character_set_name(mysqli $link)
     Returns the default character set for the database connection
string mysqli::client_info(mysqli $link)
     Returns the MySQL client version as a string
string mysqli::connect_error()
     Returns a string description of the last connect error
string mysqli::error(mysqli $link)
     Returns a string description of the last error
string mysqli::get_client_info(mysqli $link)
     Returns the MySQL client version as a string
string mysqli::host_info(mysqli $link)
     Returns a string representing the type of connection used
string mysqli::info(mysqli $link)
     Retrieves information about the most recently executed query
string mysqli::real_escape_string(string $escapestr, mysqli $link)
     Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
string mysqli::server_info(mysqli $link)
     Returns the version of the MySQL server
string mysqli::sqlstate(mysqli $link)
     Returns the SQLSTATE error from previous MySQL operation
string mysqli::stat(mysqli $link)
     Gets the current system status
string mysqli_character_set_name(mysqli $link)
     Returns the default character set for the database connection
string mysqli_connect_error()
     Returns a string description of the last connect error
string mysqli_error(mysqli $link)
     Returns a string description of the last error
string mysqli_get_client_info(mysqli $link)
     Returns the MySQL client version as a string
string mysqli_get_client_info(mysqli $link)
     Returns the MySQL client version as a string
string mysqli_get_host_info(mysqli $link)
     Returns a string representing the type of connection used
string mysqli_get_server_info(mysqli $link)
     Returns the version of the MySQL server
string mysqli_info(mysqli $link)
     Retrieves information about the most recently executed query
string mysqli_real_escape_string(string $escapestr, mysqli $link)
     Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
string mysqli_sqlstate(mysqli $link)
     Returns the SQLSTATE error from previous MySQL operation
string mysqli_stat(mysqli $link)
     Gets the current system status
string mysqli_stmt::error(mysqli_stmt $stmt)
     Returns a string description for last statement error
string mysqli_stmt::sqlstate(mysqli_stmt $stmt)
     Returns SQLSTATE error from previous statement operation
string mysqli_stmt_error(mysqli_stmt $stmt)
     Returns a string description for last statement error
string mysqli_stmt_sqlstate(mysqli_stmt $stmt)
     Returns SQLSTATE error from previous statement operation
string mysql_client_encoding([resource $link_identifier = ``])
     Returns the name of the character set
string mysql_db_name(resource $result, int $row [, mixed $field = ``])
     Get result data
string mysql_error([resource $link_identifier = ``])
     Returns the text of the error message from previous MySQL operation
string mysql_escape_string(string $unescaped_string)
     Escapes a string for use in a mysql_query
string mysql_field_flags(resource $result, int $field_offset)
     Get the flags associated with the specified field in a result
string mysql_field_name(resource $result, int $field_offset)
     Get the name of the specified field in a result
string mysql_field_table(resource $result, int $field_offset)
     Get name of the table the specified field is in
string mysql_field_type(resource $result, int $field_offset)
     Get the type of the specified field in a result
string mysql_get_client_info()
     Get MySQL client info
string mysql_get_host_info([resource $link_identifier = ``])
     Get MySQL host info
string mysql_get_server_info([resource $link_identifier = ``])
     Get MySQL server info
string mysql_info([resource $link_identifier = ``])
     Get information about the most recent query
string mysql_real_escape_string(string $unescaped_string [, resource $link_identifier = ``])
     Escapes special characters in a string for use in an SQL statement
string mysql_result(resource $result, int $row [, mixed $field = ``])
     Get result data
string mysql_stat([resource $link_identifier = ``])
     Get current system status
string mysql_tablename(resource $result, int $i)
     Get table name of field
string m_connectionerror(resource $conn)
     Get a textual representation of why a connection failed
string m_getcell(resource $conn, int $identifier, string $column, int $row)
     Get a specific cell from a comma delimited response by column name
string m_getcellbynum(resource $conn, int $identifier, int $column, int $row)
     Get a specific cell from a comma delimited response by column number
string m_getcommadelimited(resource $conn, int $identifier)
     Get the RAW comma delimited data returned from MCVE
string m_getheader(resource $conn, int $identifier, int $column_num)
     Get the name of the column in a comma-delimited response
string m_responseparam(resource $conn, int $identifier, string $key)
     Get a custom response parameter
string m_sslcert_gen_hash(string $filename)
     Generate hash for SSL client certificate verification
string ncurses_erasechar()
     Returns current erase character
string ncurses_inch()
     Get character and attribute at current position
string ncurses_killchar()
     Returns current line kill character
string ncurses_longname()
     Returns terminals description
string ncurses_termname()
     Returns terminals (short)-name
string newt_checkbox_get_value(resource $checkbox)
     Retreives value of checkox resource
string newt_checkbox_tree_get_entry_value(resource $checkboxtree, mixed $data)
     
string newt_entry_get_value(resource $entry)
     
string newt_listbox_get_current(resource $listbox)
     
string newt_reflow_text(string $text, int $width, int $flex_down, int $flex_up, int $actual_width, int $actual_height)
     
string ngettext(string $msgid1, string $msgid2, int $n)
     Plural version of gettext
string nl2br(string $string [, bool $is_xhtml = true])
     Inserts HTML line breaks before all newlines in a string
string nl_langinfo(int $item)
     Query language and locale information
string Normalizer::normalize(string $input [, string $form = Normalizer::FORM_C])
     Normalizes the input provided and returns the normalized string
string normalizer_normalize(string $input [, string $form = Normalizer::FORM_C])
     Normalizes the input provided and returns the normalized string
string nthmac(string $clent, string $data)
     Obtain a nthmac key (needs 2 arguments)
string NumberFormatter::format(number $value [, int $type = ``, NumberFormatter $fmt])
     Format a number
string NumberFormatter::formatCurrency(float $value, string $currency, NumberFormatter $fmt)
     Format a currency value
string NumberFormatter::getErrorMessage(NumberFormatter $fmt)
     Get formatter`s last error message.
string NumberFormatter::getLocale([int $type = ``, NumberFormatter $fmt])
     Get formatter locale
string NumberFormatter::getPattern(NumberFormatter $fmt)
     Get formatter pattern
string NumberFormatter::getSymbol(int $attr, NumberFormatter $fmt)
     Get a symbol value
string NumberFormatter::getTextAttribute(int $attr, NumberFormatter $fmt)
     Get a text attribute
string number_format(float $number, int $decimals, string $dec_point, string $thousands_sep)
     Format a number with grouped thousands
string numfmt_format(number $value [, int $type = ``, NumberFormatter $fmt])
     Format a number
string numfmt_format_currency(float $value, string $currency, NumberFormatter $fmt)
     Format a currency value
string numfmt_get_error_message(NumberFormatter $fmt)
     Get formatter`s last error message.
string numfmt_get_locale([int $type = ``, NumberFormatter $fmt])
     Get formatter locale
string numfmt_get_pattern(NumberFormatter $fmt)
     Get formatter pattern
string numfmt_get_symbol(int $attr, NumberFormatter $fmt)
     Get a symbol value
string numfmt_get_text_attribute(int $attr, NumberFormatter $fmt)
     Get a text attribute
string OAuth::getLastResponse()
     Get the last response
string OAuthProvider::generateToken(int $size [, bool $strong = false])
     Generate a random token
string OAuthProvider::reportProblem(string $oauthexception [, bool $send_headers = true])
     Report a problem
string oauth_get_sbs(string $http_method, string $uri [, array $request_parameters = ``])
     Generate a Signature Base String
string oauth_urlencode(string $uri)
     Encode a URI to RFC 3986
string ob_deflatehandler(string $data, int $mode)
     Deflate output handler
string ob_etaghandler(string $data, int $mode)
     ETag output handler
string ob_get_clean()
     Get current buffer contents and delete current output buffer
string ob_get_contents()
     Return the contents of the output buffer
string ob_get_flush()
     Flush the output buffer, return it as a string and turn off output buffering
string ob_gzhandler(string $buffer, int $mode)
     ob_start callback function to gzip output buffer
string ob_iconv_handler(string $contents, int $status)
     Convert character encoding as output buffer handler
string ob_inflatehandler(string $data, int $mode)
     Inflate output handler
string ob_tidyhandler(string $input [, int $mode = ``])
     ob_start callback function to repair the buffer
string OCI-Lob::load()
     Returns large object`s contents
string OCI-Lob::read(int $length)
     Reads part of the large object
string oci_field_name(resource $statement, int $field)
     Returns the name of a field from the statement
string oci_server_version(resource $connection)
     Returns server version
string oci_statement_type(resource $statement)
     Returns the type of a statement
string odbc_cursor(resource $result_id)
     Get cursorname
string odbc_error([resource $connection_id = ``])
     Get the last error code
string odbc_errormsg([resource $connection_id = ``])
     Get the last error message
string odbc_field_name(resource $result_id, int $field_number)
     Get the columnname
string odbc_field_type(resource $result_id, int $field_number)
     Datatype of a field
string openssl_decrypt(string $data, string $method, string $password [, bool $raw_input = false [, string $iv = \"\"]])
     Decrypts data
string openssl_dh_compute_key(string $pub_key, resource $dh_key)
     Computes shared secret for public value of remote DH key and local DH key
string openssl_digest(string $data, string $method [, bool $raw_output = false])
     Computes a digest
string openssl_encrypt(string $data, string $method, string $password [, bool $raw_output = false [, string $iv = \"\"]])
     Encrypts data
string openssl_error_string()
     Return openSSL error message
string openssl_random_pseudo_bytes(int $length [, bool $crypto_strong = ``])
     Generate a pseudo-random string of bytes
string pack(string $format [, mixed $args = `` [, mixed $... = ``]])
     Pack data into binary string
string PDF_fit_table(resource $pdfdoc, int $table, float $llx, float $lly, float $urx, float $ury, string $optlist)
     Place table on page
string PDF_fit_textflow(resource $pdfdoc, int $textflow, float $llx, float $lly, float $urx, float $ury, string $optlist)
     Format textflow in rectangular area
string PDF_get_apiname(resource $pdfdoc)
     Get name of unsuccessfull API function
string PDF_get_buffer(resource $p)
     Get PDF output buffer
string PDF_get_errmsg(resource $pdfdoc)
     Get error text
string PDF_get_parameter(resource $p, string $key, float $modifier)
     Get string parameter
string PDF_get_pdi_parameter(resource $p, string $key, int $doc, int $page, int $reserved)
     Get PDI string parameter [deprecated]
string PDF_pcos_get_stream(resource $p, int $doc, string $optlist, string $path)
     Get contents of pCOS path with type stream, fstream, or string
string PDF_pcos_get_string(resource $p, int $doc, string $path)
     Get value of pCOS path with type name, string, or boolean
string PDF_utf8_to_utf16(resource $pdfdoc, string $utf8string, string $ordering)
     Convert string from UTF-8 to UTF-16
string PDF_utf16_to_utf8(resource $pdfdoc, string $utf16string)
     Convert string from UTF-16 to UTF-8
string PDF_utf32_to_utf16(resource $pdfdoc, string $utf32string, string $ordering)
     Convert string from UTF-32 to UTF-16
string PDO::lastInsertId([string $name = ``])
     Returns the ID of the last inserted row or sequence value
string PDO::pgsqlLOBCreate()
     Creates a new large object
string PDO::quote(string $string [, int $parameter_type = PDO::PARAM_STR])
     Quotes a string for use in a query.
string PDOStatement::debugDumpParams()
     Dump an SQL prepared command
string PDOStatement::errorCode()
     Fetch the SQLSTATE associated with the last operation on the statement handle
string PDOStatement::fetchColumn([int $column_number = ``])
     Returns a single column from the next row of a result set
string pg_client_encoding([resource $connection = ``])
     Gets the client encoding
string pg_dbname([resource $connection = ``])
     Get the database name
string pg_escape_bytea([resource $connection = ``, string $data])
     Escape a string for insertion into a bytea field
string pg_escape_string([resource $connection = ``, string $data])
     Escape a string for insertion into a text field
string pg_fetch_result(resource $result, int $row, mixed $field)
     Returns values from a result resource
string pg_field_name(resource $result, int $field_number)
     Returns the name of a field
string pg_field_type(resource $result, int $field_number)
     Returns the type name for the corresponding field number
string pg_host([resource $connection = ``])
     Returns the host name associated with the connection
string pg_last_error([resource $connection = ``])
     Get the last error message string of a connection
string pg_last_notice(resource $connection)
     Returns the last notice message from PostgreSQL server
string pg_last_oid(resource $result)
     Returns the last row`s OID
string pg_lo_read(resource $large_object [, int $len = 8192])
     Read a large object
string pg_options([resource $connection = ``])
     Get the options associated with the connection
string pg_parameter_status([resource $connection = ``, string $param_name])
     Looks up a current parameter setting of the server.
string pg_result_error(resource $result)
     Get error message associated with result
string pg_result_error_field(resource $result, int $fieldcode)
     Returns an individual field of an error report.
string pg_tty([resource $connection = ``])
     Return the TTY name associated with the connection
string pg_unescape_bytea(string $data)
     Unescape binary for bytea type
string Phar::apiVersion()
     Returns the api version
string Phar::createDefaultStub([string $indexfile = `` [, string $webindexfile = ``]])
     Create a phar-file format specific stub
string Phar::getStub()
     Return the PHP loader or bootstrap stub of a Phar archive
string Phar::getVersion()
     Return version info of Phar archive
string Phar::running([bool $retphar = true])
     Returns the full path on disk or full phar URL to the currently executing Phar archive
string phpversion([string $extension = ``])
     Gets the current PHP version
string php_ini_loaded_file()
     Retrieve a path to the loaded php.ini file
string php_ini_scanned_files()
     Return a list of .ini files parsed from the additional ini dir
string php_logo_guid()
     Gets the logo guid
string php_sapi_name()
     Returns the type of interface between web server and PHP
string php_strip_whitespace(string $filename)
     Return source with stripped comments and whitespace
string php_uname([string $mode = \"a\"])
     Returns information about the operating system PHP is running on
string posix_ctermid()
     Get path name of controlling terminal
string posix_getcwd()
     Pathname of current directory
string posix_getlogin()
     Return login name
string posix_strerror(int $errno)
     Retrieve the system error message associated with the given errno
string posix_ttyname(int $fd)
     Determine terminal device name
string preg_quote(string $str [, string $delimiter = ``])
     Quote regular expression characters
string ps_get_buffer(resource $psdoc)
     Fetches the full buffer containig the generated PS data
string ps_get_parameter(resource $psdoc, string $name [, float $modifier = ``])
     Gets certain parameters
string ps_symbol_name(resource $psdoc, int $ord [, int $fontid = ``])
     Gets name of a glyph
string px_date2string(resource $pxdoc, int $value, string $format)
     Converts a date into a string.
string px_get_parameter(resource $pxdoc, string $name)
     Gets a parameter
string px_timestamp2string(resource $pxdoc, float $value, string $format)
     Converts the timestamp into a string.
string qdom_error()
     Returns the error string from the last QDOM operation or FALSE if no errors occurred
string quoted_printable_decode(string $str)
     Convert a quoted-printable string to an 8 bit string
string quoted_printable_encode(string $str)
     Convert a 8 bit string to a quoted-printable string
string quotemeta(string $str)
     Quote meta characters
string radius_cvt_addr(string $data)
     Converts raw data to IP-Address
string radius_cvt_string(string $data)
     Converts raw data to string
string radius_demangle(resource $radius_handle, string $mangled)
     Demangles data
string radius_demangle_mppe_key(resource $radius_handle, string $mangled)
     Derives mppe-keys from mangled data
string radius_request_authenticator(resource $radius_handle)
     Returns the request authenticator
string radius_server_secret(resource $radius_handle)
     Returns the shared secret
string radius_strerror(resource $radius_handle)
     Returns an error message
string RarArchive::getComment(RarArchive $rarfile)
     Get comment text from the RAR archive
string RarEntry::getCrc()
     Get CRC of the entry
string RarEntry::getFileTime()
     Get entry last modification time
string RarEntry::getName()
     Get name of the entry
string RarEntry::__toString()
     Get text representation of entry
string rar_comment_get(RarArchive $rarfile)
     Get comment text from the RAR archive
string rar_wrapper_cache_stats()
     Cache hits and misses for the URL wrapper
string rawurldecode(string $str)
     Decode URL-encoded strings
string rawurlencode(string $str)
     URL-encode according to RFC 3986
string readdir([resource $dir_handle = ``])
     Read entry from directory handle
string readline([string $prompt = ``])
     Reads a line
string readlink(string $path)
     Returns the target of a symbolic link
string realpath(string $path)
     Returns canonicalized absolute pathname
string recode_string(string $request, string $string)
     Recode a string according to a recode request
string RecursiveDirectoryIterator::getSubPath()
     Get sub path
string RecursiveDirectoryIterator::getSubPathname()
     Get sub path and name
string RecursiveDirectoryIterator::key()
     Return path and filename of current dir entry
string RecursiveTreeIterator::current()
     Get current element
string RecursiveTreeIterator::getEntry()
     Get current entry
string RecursiveTreeIterator::getPrefix()
     Get the prefix
string RecursiveTreeIterator::key()
     Get the key of the current element
string ReflectionClass::export(mixed $argument [, bool $return = false])
     Exports a class
string ReflectionClass::getDocComment()
     Gets doc comments
string ReflectionClass::getExtensionName()
     Gets an extensions name
string ReflectionClass::getFileName()
     Gets the filename of the file in which the class has been defined
string ReflectionClass::getName()
     Gets class name
string ReflectionClass::getNamespaceName()
     Gets namespace name
string ReflectionClass::getShortName()
     Gets short name
string ReflectionClass::__toString()
     Returns the string representation of the ReflectionClass object.
string ReflectionExtension::export(string $name [, string $return = false])
     Export
string ReflectionExtension::getName()
     Gets extension name
string ReflectionExtension::getVersion()
     Gets extension version
string ReflectionExtension::info()
     Gets extension info
string ReflectionExtension::__toString()
     To string
string ReflectionFunction::export(string $name [, string $return = ``])
     Exports function
string ReflectionFunction::__toString()
     To string
string ReflectionFunctionAbstract::getDocComment()
     Gets doc comment
string ReflectionFunctionAbstract::getExtensionName()
     Gets extension name
string ReflectionFunctionAbstract::getFileName()
     Gets file name
string ReflectionFunctionAbstract::getName()
     Gets function name
string ReflectionFunctionAbstract::getNamespaceName()
     Gets namespace name
string ReflectionFunctionAbstract::getShortName()
     Gets function short name
string ReflectionMethod::export(string $class, string $name [, bool $return = false])
     Export a reflection method.
string ReflectionMethod::__toString()
     Returns the string representation of the Reflection method object.
string ReflectionObject::export(string $argument [, bool $return = ``])
     Export
string ReflectionParameter::export(string $function, string $parameter [, bool $return = ``])
     Exports
string ReflectionParameter::getName()
     Gets parameter name
string ReflectionParameter::__toString()
     To string
string ReflectionProperty::export(mixed $class, string $name [, bool $return = ``])
     Export
string ReflectionProperty::getDocComment()
     Gets doc comment
string ReflectionProperty::getName()
     Gets property name
string ReflectionProperty::__toString()
     To string
string Reflector::export()
     Exports
string Reflector::__toString()
     To string
string ResourceBundle::getErrorMessage(ResourceBundle $r)
     Get bundle`s last error message.
string resourcebundle_get_error_message(ResourceBundle $r)
     Get bundle`s last error message.
string rpm_version()
     Returns a string representing the current version of the   rpmreader extension
string rrd_error()
     Gets latest error message.
string rtrim(string $str [, string $charlist = ``])
     Strip whitespace (or other characters) from the end of a string
string SAMConnection::error()
     Contains the text description of the last failed SAM operation.
string SAMConnection::send(string $target, SAMMessage $msg [, array $properties = ``])
     Send a message to a queue or publish an item to a topic.
string SAMConnection::subscribe(string $targetTopic)
     Create a subscription to a specified topic.
string SAMMessage::body()
     The body of the message.
string SDO_DAS_Setting::getPropertyName()
     Get the property name for a changed property
string SDO_DAS_XML::saveString(SDO_XMLDocument $xdoc [, int $indent = ``])
     Saves the SDO_DAS_XML_Document object to a string
string SDO_DAS_XML_Document::getRootElementName()
     Returns root element`s name
string SDO_DAS_XML_Document::getRootElementURI()
     Returns root element`s URI string
string SDO_DataObject::getTypeName()
     Return the name of the type for a data object.
string SDO_DataObject::getTypeNamespaceURI()
     Return the namespace URI of the type for a data object.
string SDO_Model_Property::getName()
     Get the name of the SDO_Model_Property
string SDO_Model_Type::getName()
     Get the name of the type
string SDO_Model_Type::getNamespaceURI()
     Get the namespace URI of the type
string serialize(mixed $value)
     Generates a storable representation of a value
string session_cache_limiter([string $cache_limiter = ``])
     Get and/or set the current cache limiter
string session_encode()
     Encodes the current session data as a string
string session_id([string $id = ``])
     Get and/or set the current session id
string session_module_name([string $module = ``])
     Get and/or set the current session module
string session_name([string $name = ``])
     Get and/or set the current session name
string session_pgsql_get_field()
     Get custom field value
string session_save_path([string $path = ``])
     Get and/or set the current session save path
string setlocale(int $category, array $locale [, string $... = ``])
     Set locale information
string set_include_path(string $new_include_path)
     Sets the include_path configuration option
string sha1(string $str [, bool $raw_output = false])
     Calculate the sha1 hash of a string
string sha1_file(string $filename [, bool $raw_output = false])
     Calculate the sha1 hash of a file
string shell_exec(string $cmd)
     Execute command via shell and return the complete output as a string
string shmop_read(int $shmid, int $start, int $count)
     Read data from shared memory block
string signeurlpaiement(string $clent, string $data)
     Obtain the payment url (needs 2 arguments)
string SimpleXMLElement::getName()
     Gets the name of the XML element
string snmp2_get(string $host, string $community, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch an SNMP object
string snmp2_getnext(string $host, string $community, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch the SNMP object which follows the given object id
string snmp3_get(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch an SNMP object
string snmp3_getnext(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id [, string $timeout = 1000000 [, string $retries = 5]])
     Fetch the SNMP object which follows the given object id
string snmpget(string $hostname, string $community, string $object_id [, int $timeout = 1000000 [, int $retries = 5]])
     Fetch an SNMP object
string snmpgetnext(string $host, string $community, string $object_id [, int $timeout = 1000000 [, int $retries = 5]])
     Fetch the SNMP object which follows the given object id
string SoapClient::__doRequest(string $request, string $location, string $action, int $version [, int $one_way = ``])
     Performs a SOAP request
string SoapClient::__getLastRequest()
     Returns last SOAP request
string SoapClient::__getLastRequestHeaders()
     Returns the SOAP headers from the last request
string SoapClient::__getLastResponse()
     Returns last SOAP response
string SoapClient::__getLastResponseHeaders()
     Returns the SOAP headers from the last response
string SoapClient::__setLocation([string $new_location = ``])
     Sets the location of the Web service to use
string SoapFault::__toString()
     Obtain a string representation of a SoapFault
string socket_read(resource $socket, int $length [, int $type = PHP_BINARY_READ])
     Reads a maximum of length bytes from a socket
string socket_strerror(int $errno)
     Return a string describing a socket error
string SolrClient::getDebug()
     Returns the debug data for the last connection attempt
string SolrDocument::key()
     Retrieves the current key
string SolrDocument::serialize()
     Used for custom serialization
string SolrParams::serialize()
     Used for custom serialization
string SolrParams::toString([bool $url_encode = false])
     Returns all the name-value pair parameters in the object
string SolrPingResponse::getResponse()
     Returns the response from the server
string SolrQuery::getFacetDateEnd([string $field_override = ``])
     Returns the value for the facet.date.end parameter
string SolrQuery::getFacetDateGap([string $field_override = ``])
     Returns the value of the facet.date.gap parameter
string SolrQuery::getFacetDateHardEnd([string $field_override = ``])
     Returns the value of the facet.date.hardend parameter
string SolrQuery::getFacetDateStart([string $field_override = ``])
     Returns the  lower bound for the first date range for all date faceting on this field
string SolrQuery::getFacetMethod([string $field_override = ``])
     Returns the value of the facet.method parameter
string SolrQuery::getFacetPrefix([string $field_override = ``])
     Returns the facet prefix
string SolrQuery::getHighlightAlternateField([string $field_override = ``])
     Returns the highlight field to use as backup or default
string SolrQuery::getHighlightFormatter([string $field_override = ``])
     Returns the formatter for the highlighted output
string SolrQuery::getHighlightFragmenter([string $field_override = ``])
     Returns the text snippet generator for highlighted text
string SolrQuery::getHighlightRegexPattern()
     Returns the regular expression for fragmenting
string SolrQuery::getHighlightSimplePost([string $field_override = ``])
     Returns the text which appears after a highlighted term
string SolrQuery::getHighlightSimplePre([string $field_override = ``])
     Returns the text which appears before a highlighted term
string SolrQuery::getQuery()
     Returns the main query
string SolrQuery::getTermsField()
     Returns the field from which the terms are retrieved
string SolrQuery::getTermsLowerBound()
     Returns the term to start at
string SolrQuery::getTermsPrefix()
     Returns the term prefix
string SolrQuery::getTermsUpperBound()
     Returns the term to stop at
string SolrResponse::getDigestedResponse()
     Returns the XML response as serialized PHP data
string SolrResponse::getHttpStatusMessage()
     Returns more details on the HTTP status
string SolrResponse::getRawRequest()
     Returns the raw request sent to the Solr server
string SolrResponse::getRawRequestHeaders()
     Returns the raw request headers sent to the Solr server
string SolrResponse::getRawResponse()
     Returns the raw response from the server
string SolrResponse::getRawResponseHeaders()
     Returns the raw response headers from the server
string SolrResponse::getRequestUrl()
     Returns the full URL the request was sent to
string SolrUtils::escapeQueryChars(string $str)
     Escapes a lucene query string
string SolrUtils::getSolrVersion()
     Returns the current version of the Solr extension
string SolrUtils::queryPhrase(string $str)
     Prepares a phrase from an unescaped lucene string
string solr_get_version()
     Returns the current version of the Apache Solr extension
string soundex(string $str)
     Calculate the soundex key of a string
string SphinxClient::escapeString(string $string)
     Escape special characters
string SphinxClient::getLastError()
     Get the last error message
string SphinxClient::getLastWarning()
     Get the last warning
string SplFileInfo::getBasename([string $suffix = ``])
     Gets the base name of the file
string SplFileInfo::getExtension()
     Gets the file extension
string SplFileInfo::getFilename()
     Gets the filename
string SplFileInfo::getLinkTarget()
     Gets the target of a link
string SplFileInfo::getPath()
     Gets the path without filename
string SplFileInfo::getPathname()
     Gets the path to the file
string SplFileInfo::getRealPath()
     Gets absolute path to file
string SplFileInfo::getType()
     Gets file type
string SplFileObject::fgetc()
     Gets character from file
string SplFileObject::fgets()
     Gets line from file
string SplFileObject::fgetss([string $allowable_tags = ``])
     Gets line from file and strip HTML tags
string SplObjectStorage::serialize()
     Serializes the storage
string spl_autoload_extensions([string $file_extensions = ``])
     Register and return default file extensions for spl_autoload
string spl_object_hash(object $obj)
     Return hash id for given object
string sprintf(string $format [, mixed $args = `` [, mixed $... = ``]])
     Return a formatted string
string SQLite3::escapeString(string $value)
     Returns a string that has been properly escaped
string SQLite3::lastErrorMsg()
     Returns English text describing the most recent failed SQLite request
string SQLite3Result::columnName(int $column_number)
     Returns the name of the nth column
string SQLiteResult::fetchSingle(resource $result [, bool $decode_binary = true])
     Fetches the first column of a result set as a string
string SQLiteResult::fieldName(resource $result, int $field_index)
     Returns the name of a particular field
string SQLiteUnbuffered::fetchSingle(resource $result [, bool $decode_binary = true])
     Fetches the first column of a result set as a string
string SQLiteUnbuffered::fieldName(resource $result, int $field_index)
     Returns the name of a particular field
string sqlite_error_string(int $error_code)
     Returns the textual description of an error code
string sqlite_escape_string(string $item)
     Escapes a string for use as a query parameter
string sqlite_fetch_single(resource $result [, bool $decode_binary = true])
     Fetches the first column of a result set as a string
string sqlite_field_name(resource $result, int $field_index)
     Returns the name of a particular field
string sqlite_libencoding()
     Returns the encoding of the linked SQLite library
string sqlite_libversion()
     Returns the version of the linked SQLite library
string sqlite_udf_decode_binary(string $data)
     Decode binary data passed as parameters to an UDF
string sqlite_udf_encode_binary(string $data)
     Encode binary data before returning it from an UDF
string sql_regcase(string $string)
     Make regular expression for case insensitive match
string ssdeep_fuzzy_hash(string $to_hash)
     Create a fuzzy hash from a string
string ssdeep_fuzzy_hash_filename(string $file_name)
     Create a fuzzy hash from a file
string ssh2_fingerprint(resource $session [, int $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX])
     Retrieve fingerprint of remote server
string ssh2_sftp_readlink(resource $sftp, string $link)
     Return the target of a symbolic link
string ssh2_sftp_realpath(resource $sftp, string $filename)
     Resolve the realpath of a provided path string
string Stomp::error(resource $link)
     Gets the last stomp error
string Stomp::getSessionId(resource $link)
     Gets the current stomp session ID
string StompException::getDetails()
     Get exception details
string stomp_connect_error()
     Returns a string description of the last connect error
string stomp_error(resource $link)
     Gets the last stomp error
string stomp_get_session_id(resource $link)
     Gets the current stomp session ID
string stomp_version()
     Gets the current stomp extension version
string streamWrapper::dir_readdir()
     Read entry from directory handle
string streamWrapper::stream_read(int $count)
     Read from stream
string stream_get_contents(resource $handle [, int $maxlength = -1 [, int $offset = -1]])
     Reads remainder of a stream into a string
string stream_get_line(resource $handle, int $length [, string $ending = ``])
     Gets line from stream resource up to a given delimiter
string stream_resolve_include_path(string $filename)
     Resolve filename against the include path
string stream_socket_get_name(resource $handle, bool $want_peer)
     Retrieve the name of the local or remote sockets
string stream_socket_recvfrom(resource $socket, int $length [, int $flags = `` [, string $address = ``]])
     Receives data from a socket, connected or not
string strftime(string $format [, int $timestamp = time()])
     Format a local time/date according to locale settings
string stripcslashes(string $str)
     Un-quote string quoted with addcslashes
string stripos(string $haystack, string $needle [, int $offset = ``])
     Find position of first occurrence of a case-insensitive string
string stripslashes(string $str)
     Un-quotes a quoted string
string strip_tags(string $str [, string $allowable_tags = ``])
     Strip HTML and PHP tags from a string
string stristr(string $haystack, mixed $needle [, bool $before_needle = false])
     Case-insensitive strstr
string strpbrk(string $haystack, string $char_list)
     Search a string for any of a set of characters
string strrchr(string $haystack, mixed $needle)
     Find the last occurrence of a character in a string
string strrev(string $string)
     Reverse a string
string strstr(string $haystack, mixed $needle [, bool $before_needle = false])
     Find first occurrence of a string
string strtok(string $str, string $token)
     Tokenize string
string strtolower(string $str)
     Make a string lowercase
string strtoupper(string $string)
     Make a string uppercase
string strtr(string $str, string $from, string $to, array $replace_pairs)
     Translate characters or replace substrings
string strval(mixed $var)
     Get string value of a variable
string str_pad(string $input, int $pad_length [, string $pad_string = \" \" [, int $pad_type = STR_PAD_RIGHT]])
     Pad a string to a certain length with another string
string str_repeat(string $input, int $multiplier)
     Repeat a string
string str_rot13(string $str)
     Perform the rot13 transform on a string
string str_shuffle(string $str)
     Randomly shuffles a string
string substr(string $string, int $start [, int $length = ``])
     Return part of a string
string svn_auth_get_parameter(string $key)
     Retrieves authentication parameter
string svn_cat(string $repos_url [, int $revision_no = ``])
     Returns the contents of a file in a repository
string svn_client_version()
     Returns the version of the SVN client libraries
string svn_fs_node_prop(resource $fsroot, string $path, string $propname)
     Returns the value of a property for a node
string svn_fs_revision_prop(resource $fs, int $revnum, string $propname)
     Fetches the value of a named property
string SWFFont::getShape(int $code)
     Returns the glyph shape of a char as a text string
string sybase_get_last_message()
     Returns the last message from the server
string sybase_result(resource $result, int $row, mixed $field)
     Get result data
string system(string $command [, int $return_var = ``])
     Execute an external program and display the output
string sys_get_temp_dir()
     Returns directory path used for temporary files
string tempnam(string $dir, string $prefix)
     Create file with unique file name
string textdomain(string $text_domain)
     Sets the default domain
string tidy::getoptdoc(string $optname, tidy $object)
     Returns the documentation for the given option name
string tidy::getRelease()
     Get release date (version) for Tidy library
string tidy::repairFile(string $filename [, mixed $config = `` [, string $encoding = `` [, bool $use_include_path = false]]])
     Repair a file and return it as a string
string tidy::repairString(string $data [, mixed $config = `` [, string $encoding = ``]])
     Repair a string using an optionally provided configuration file
string tidy_get_error_buffer(tidy $object)
     Return warnings and errors which occurred parsing the specified document
string tidy_get_opt_doc(string $optname, tidy $object)
     Returns the documentation for the given option name
string tidy_get_output(tidy $object)
     Return a string representing the parsed tidy markup
string tidy_get_release()
     Get release date (version) for Tidy library
string tidy_repair_file(string $filename [, mixed $config = `` [, string $encoding = `` [, bool $use_include_path = false]]])
     Repair a file and return it as a string
string tidy_repair_string(string $data [, mixed $config = `` [, string $encoding = ``]])
     Repair a string using an optionally provided configuration file
string timezone_name_from_abbr(string $abbr [, int $gmtOffset = -1 [, int $isdst = -1]])
     Returns the timezone name from abbreviation
string timezone_version_get()
     Gets the version of the timezonedb
string token_name(int $token)
     Get the symbolic name of a given PHP token
string TokyoTyrant::ext(string $name, int $options, string $key, string $value)
     Execute a remote script
string TokyoTyrant::out(mixed $keys)
     Removes records
string TokyoTyrantQuery::hint()
     Get the hint string of the query
string TokyoTyrantQuery::key()
     Returns the current key
string Transliterator::getErrorMessage()
     Get last error message
string transliterator_get_error_message()
     Get last error message
string trim(string $str [, string $charlist = ``])
     Strip whitespace (or other characters) from the beginning and end of a string
string ucfirst(string $str)
     Make a string`s first character uppercase
string ucwords(string $str)
     Uppercase the first character of each word in a string
string udm_error(resource $agent)
     Get mnoGoSearch error message
string udm_get_res_field(resource $res, int $row, int $field)
     Fetch a result field
string udm_get_res_param(resource $res, int $param)
     Get mnoGoSearch result parameters
string uniqid([string $prefix = \"\" [, bool $more_entropy = false]])
     Generate a unique ID
string urldecode(string $str)
     Decodes URL-encoded string
string urlencode(string $str)
     URL-encodes string
string utf8_decode(string $data)
     Converts a string with ISO-8859-1 characters encoded with UTF-8   to single-byte ISO-8859-1
string utf8_encode(string $data)
     Encodes an ISO-8859-1 string to UTF-8
string V8JsException::getJsFileName()
     The getJsFileName purpose
string V8JsException::getJsTrace()
     The getJsTrace purpose
string var_dump([mixed $expression = `` [,  $... = ``]])
     Dumps information about a variable
string vpopmail_error()
     Get text message for last vpopmail error
string vsprintf(string $format, array $args)
     Return a formatted string
string wddx_packet_end(resource $packet_id)
     Ends a WDDX packet with the specified ID
string wddx_serialize_value(mixed $var [, string $comment = ``])
     Serialize a single value into a WDDX packet
string wddx_serialize_vars(mixed $var_name [, mixed $... = ``])
     Serialize variables into a WDDX packet
string wordwrap(string $str [, int $width = 75 [, string $break = \"\n\" [, bool $cut = false]]])
     Wraps a string to a given number of characters
string xattr_get(string $filename, string $name [, int $flags = ``])
     Get an extended attribute
string xdiff_string_bdiff(string $old_data, string $new_data)
     Make binary diff of two strings
string xdiff_string_bpatch(string $str, string $patch)
     Patch a string with a binary diff
string xdiff_string_diff(string $old_data, string $new_data [, int $context = 3 [, bool $minimal = false]])
     Make unified diff of two strings
string xdiff_string_diff_binary(string $old_data, string $new_data)
     Alias of xdiff_string_bdiff
string xdiff_string_patch(string $str, string $patch [, int $flags = `` [, string $error = ``]])
     Patch a string with an unified diff
string xdiff_string_patch_binary(string $str, string $patch)
     Alias of xdiff_string_bpatch
string xdiff_string_rabdiff(string $old_data, string $new_data)
     Make binary diff of two strings using the Rabin`s polynomial fingerprinting algorithm
string XMLReader::getAttribute(string $name)
     Get the value of a named attribute
string XMLReader::getAttributeNo(int $index)
     Get the value of an attribute by index
string XMLReader::getAttributeNs(string $localName, string $namespaceURI)
     Get the value of an attribute by localname and URI
string XMLReader::readInnerXML()
     Retrieve XML from current node
string XMLReader::readOuterXML()
     Retrieve XML from current node, including it self
string XMLReader::readString()
     Reads the contents of the current node as a string
string xmlrpc_encode(mixed $value)
     Generates XML for a PHP value
string xmlrpc_encode_request(string $method, mixed $params [, array $output_options = ``])
     Generates XML for a method request
string xmlrpc_get_type(mixed $value)
     Gets xmlrpc type for a PHP value
string xmlrpc_server_call_method(resource $server, string $xml, mixed $user_data [, array $output_options = ``])
     Parses XML requests and call methods
string XMLWriter::outputMemory([bool $flush = ``, resource $xmlwriter])
     Returns current buffer
string xml_error_string(int $code)
     Get XML parser error string
string XSLTProcessor::getParameter(string $namespaceURI, string $localName)
     Get value of a parameter
string XSLTProcessor::transformToXML(DOMDocument $doc)
     Transform to XML
string xslt_backend_info()
     Returns the information on the compilation settings of the backend
string xslt_backend_name()
     Returns the name of the backend
string xslt_backend_version()
     Returns the version number of Sablotron
string xslt_error(resource $xh)
     Returns an error string
string yaml_emit(mixed $data [, int $encoding = YAML_ANY_ENCODING [, int $linebreak = YAML_ANY_BREAK]])
     Returns the YAML representation of a value
string yaz_addinfo(resource $id)
     Returns additional error information
string yaz_error(resource $id)
     Returns error description
string yaz_get_option(resource $id, string $name)
     Returns value of option for connection
string yaz_record(resource $id, int $pos, string $type)
     Returns a record
string yp_err_string(int $errorcode)
     Returns the error string associated with the given error code
string yp_get_default_domain()
     Fetches the machine`s default NIS domain
string yp_master(string $domain, string $map)
     Returns the machine name of the master NIS server for a map
string yp_match(string $domain, string $map, string $key)
     Returns the matched line
string zend_logo_guid()
     Gets the Zend guid
string zend_version()
     Gets the version of the current Zend engine
string ZipArchive::getArchiveComment([int $flags = ``])
     Returns the Zip archive comment
string ZipArchive::getCommentIndex(int $index [, int $flags = ``])
     Returns the comment of an entry using the entry index
string ZipArchive::getCommentName(string $name [, int $flags = ``])
     Returns the comment of an entry using the entry name
string ZipArchive::getNameIndex(int $index [, int $flags = ``])
     Returns the name of an entry using its index
string ZipArchive::getStatusString()
     Returns the status error message, system and/or zip messages
string zip_entry_compressionmethod(resource $zip_entry)
     Retrieve the compression method of a directory entry
string zip_entry_name(resource $zip_entry)
     Retrieve the name of a directory entry
string zip_entry_read(resource $zip_entry [, int $length = ``])
     Read from an open directory entry
string zlib_get_coding_type()
     Returns the coding type used for output compression
string|array SplFileObject::current()
     Retrieve current line of file
SWFAction SWFAction::__construct(string $script)
     Creates a new SWFAction
SWFBitmap SWFBitmap::__construct(mixed $file [, mixed $alphafile = ``])
     Loads Bitmap object
SWFButton SWFButton::__construct()
     Creates a new Button
SWFFill SWFShape::addFill(int $red, int $green, int $blue [, int $alpha = 255, SWFBitmap $bitmap [, int $flags = ``, SWFGradient $gradient]])
     Adds a solid fill to the shape
SWFFontChar SWFMovie::importFont(string $libswf, string $name)
     
SWFFont SWFFont::__construct(string $filename)
     Loads a font definition
SWFGradient SWFGradient::__construct()
     Creates a gradient object
SWFMorph SWFMorph::__construct()
     Creates a new SWFMorph object
SWFMovie SWFMovie::__construct([int $version = ``])
     Creates a new movie object, representing an SWF version 4 movie
SWFPrebuiltClip SWFPrebuiltClip::__construct(mixed $file)
     Returns a SWFPrebuiltClip object
SWFShape SWFMorph::getShape1()
     Gets a handle to the starting shape
SWFShape SWFMorph::getShape2()
     Gets a handle to the ending shape
SWFShape SWFShape::__construct()
     Creates a new shape object
SWFSoundInstance SWFButton::addASound(SWFSound $sound, int $flags)
     Associates a sound with a button transition
SWFSoundInstance SWFMovie::startSound(SWFSound $sound)
     
SWFSoundInstance SWFSprite::startSound(SWFSound $sound)
     
SWFSound SWFSound(string $filename [, int $flags = ``])
     Returns a new SWFSound object from given file
SWFSprite SWFMovie::importChar(string $libswf, string $name)
     
SWFSprite SWFSprite::__construct()
     Creates a movie clip (a sprite)
SWFTextField SWFTextField::__construct([int $flags = ``])
     Creates a text field object
SWFVideoStream SWFVideoStream::__construct([string $file = ``])
     Returns a SWFVideoStream object
tidyNode tidy::body(tidy $object)
     Returns a tidyNode object starting from the <body> tag of the tidy parse tree
tidyNode tidy::head(tidy $object)
     Returns a tidyNode object starting from the <head> tag of the tidy parse tree
tidyNode tidy::html(tidy $object)
     Returns a tidyNode object starting from the <html> tag of the tidy parse tree
tidyNode tidy::root(tidy $object)
     Returns a tidyNode object representing the root of the tidy parse tree
tidyNode tidyNode::getParent()
     Returns the parent node of the current node
tidyNode tidy_get_body(tidy $object)
     Returns a tidyNode object starting from the <body> tag of the tidy parse tree
tidyNode tidy_get_head(tidy $object)
     Returns a tidyNode object starting from the <head> tag of the tidy parse tree
tidyNode tidy_get_html(tidy $object)
     Returns a tidyNode object starting from the <html> tag of the tidy parse tree
tidyNode tidy_get_root(tidy $object)
     Returns a tidyNode object representing the root of the tidy parse tree
tidy tidy::parseFile(string $filename [, mixed $config = `` [, string $encoding = `` [, bool $use_include_path = false]]])
     Parse markup in file or URI
tidy tidy::parseString(string $input [, mixed $config = `` [, string $encoding = ``]])
     Parse a document stored in a string
tidy tidy::__construct([string $filename = `` [, mixed $config = `` [, string $encoding = `` [, bool $use_include_path = ``]]]])
     Constructs a new tidy object
tidy tidy_parse_file(string $filename [, mixed $config = `` [, string $encoding = `` [, bool $use_include_path = false]]])
     Parse markup in file or URI
tidy tidy_parse_string(string $input [, mixed $config = `` [, string $encoding = ``]])
     Parse a document stored in a string
 timezone_abbreviations_list()
     Alias of DateTimeZone::listAbbreviations
 timezone_identifiers_list()
     Alias of DateTimeZone::listIdentifiers
 timezone_location_get()
     Alias of DateTimeZone::getLocation
 timezone_name_get()
     Alias of DateTimeZone::getName
 timezone_offset_get()
     Alias of DateTimeZone::getOffset
 timezone_open()
     Alias of DateTimeZone::__construct
 timezone_transitions_get()
     Alias of DateTimeZone::getTransitions
 TokyoTyrant::__construct([string $host = `` [, int $port = TokyoTyrant::RDBDEF_PORT [, array $options = ``]]])
     Construct a new TokyoTyrant object
TokyoTyrantIterator TokyoTyrant::getIterator()
     Get an iterator
TokyoTyrantIterator TokyoTyrantTable::getIterator()
     Get an iterator
 TokyoTyrantQuery::__construct(TokyoTyrantTable $table)
     Construct a new query
TokyoTyrantQuery TokyoTyrantQuery::out()
     Removes records based on query
TokyoTyrantQuery TokyoTyrantTable::getQuery()
     Get a query object
TokyoTyrant TokyoTyrant::connect(string $host [, int $port = TokyoTyrant::RDBDEF_PORT [, array $options = ``]])
     Connect to a database
TokyoTyrant TokyoTyrant::connectUri(string $uri)
     Connects to a database
TokyoTyrant TokyoTyrant::copy(string $path)
     Copies the database
TokyoTyrant TokyoTyrant::put(mixed $keys [, string $value = null])
     Puts values
TokyoTyrant TokyoTyrant::putCat(mixed $keys [, string $value = ``])
     Concatenates to a record
TokyoTyrant TokyoTyrant::putKeep(mixed $keys [, string $value = ``])
     Puts a record
TokyoTyrant TokyoTyrant::putNr(mixed $keys [, string $value = null])
     Puts value
TokyoTyrant TokyoTyrant::tune(float $timeout [, int $options = TokyoTyrant::RDBT_RECON])
     Tunes connection values
 Transliterator::__construct()
     Construct a Transliterator object
Transliterator Transliterator::create(string $id [, int $direction = ``])
     Create a transliterator
Transliterator Transliterator::createFromRules(string $rules [, int $direction = ``, string $id])
     Create transliterator from rules
Transliterator Transliterator::createInverse()
     Create an inverse transliterator
Transliterator transliterator_create(string $id [, int $direction = ``])
     Create a transliterator
Transliterator transliterator_create_from_rules(string $rules [, int $direction = ``, string $id])
     Create transliterator from rules
Transliterator transliterator_create_inverse()
     Create an inverse transliterator
 user_error()
     Alias of trigger_error
 V8Js::__construct([string $object_name = \"PHP\" [, array $variables = array() [, array $extensions = array() [, bool $report_uncaught_exceptions = ``]]]])
     Construct a new V8Js object
V8JsException V8Js::getPendingException()
     Return pending uncaught Javascript exception
 VARIANT()
     VARIANT class
variant com_get_active_object(string $progid [, int $code_page = ``])
     Returns a handle to an already running instance of a COM object
variant variant_cast(variant $variant, int $type)
     Convert a variant into a new variant object of another type
variant variant_date_from_timestamp(int $timestamp)
     Returns a variant date representation of a Unix timestamp
void aggregate(object $object, string $class_name)
     Dynamic class and object aggregation of methods and properties
void aggregate_methods(object $object, string $class_name)
     Dynamic class and object aggregation of methods
void aggregate_methods_by_list(object $object, string $class_name, array $methods_list [, bool $exclude = false])
     Selective dynamic class methods aggregation to an object
void aggregate_methods_by_regexp(object $object, string $class_name, string $regexp [, bool $exclude = false])
     Selective class methods aggregation to an object using a regular   expression
void aggregate_properties(object $object, string $class_name)
     Dynamic aggregation of  class properties to an object
void aggregate_properties_by_list(object $object, string $class_name, array $properties_list [, bool $exclude = false])
     Selective dynamic class properties aggregation to an object
void aggregate_properties_by_regexp(object $object, string $class_name, string $regexp [, bool $exclude = false])
     Selective class properties aggregation to an object using a regular   expression
void APCIterator::next()
     Move pointer to next item
void APCIterator::rewind()
     Rewinds iterator
void APCIterator::valid()
     Checks if current position is valid
void apd_clunk(string $warning [, string $delimiter = ``])
     Throw a warning and a callstack
void apd_croak(string $warning [, string $delimiter = ``])
     Throw an error, a callstack and then exit
void apd_dump_function_table()
     Outputs the current function table
void apd_set_session(int $debug_level)
     Changes or sets the current debugging level
void apd_set_session_trace(int $debug_level [, string $dump_directory = ``])
     Starts the session debugging
void AppendIterator::append(Iterator $iterator)
     Appends an iterator
void AppendIterator::current()
     Gets the current value
void AppendIterator::getArrayIterator()
     The getArrayIterator method
void AppendIterator::getInnerIterator()
     Gets an inner iterator
void AppendIterator::getIteratorIndex()
     Gets an index of iterators
void AppendIterator::key()
     Gets the current key
void AppendIterator::next()
     Moves to the next element
void AppendIterator::rewind()
     Rewinds the Iterator
void AppendIterator::valid()
     Checks validity of the current element
void ArrayIterator::append(mixed $value)
     Append an element
void ArrayIterator::asort()
     Sort array by values
void ArrayIterator::getFlags()
     Get flags
void ArrayIterator::ksort()
     Sort array by keys
void ArrayIterator::natcasesort()
     Sort an array naturally, case insensitive
void ArrayIterator::natsort()
     Sort an array naturally
void ArrayIterator::next()
     Move to next entry
void ArrayIterator::offsetExists(string $index)
     Check if offset exists
void ArrayIterator::offsetSet(string $index, string $newval)
     Set value for an offset
void ArrayIterator::offsetUnset(string $index)
     Unset value for an offset
void ArrayIterator::rewind()
     Rewind array back to the start
void ArrayIterator::seek(int $position)
     Seek to position
void ArrayIterator::setFlags(string $flags)
     Set behaviour flags
void ArrayIterator::uasort(string $cmp_function)
     User defined sort
void ArrayIterator::uksort(string $cmp_function)
     User defined sort
void ArrayObject::append(mixed $value)
     Appends the value
void ArrayObject::asort()
     Sort the entries by value
void ArrayObject::ksort()
     Sort the entries by key
void ArrayObject::natcasesort()
     Sort an array using a case insensitive \"natural order\" algorithm
void ArrayObject::natsort()
     Sort entries using a \"natural order\" algorithm
void ArrayObject::offsetSet(mixed $index, mixed $newval)
     Sets the value at the specified index to newval
void ArrayObject::offsetUnset(mixed $index)
     Unsets the value at the specified index
void ArrayObject::serialize()
     Serialize an ArrayObject
void ArrayObject::setFlags(int $flags)
     Sets the behavior flags.
void ArrayObject::setIteratorClass(string $iterator_class)
     Sets the iterator classname for the ArrayObject.
void ArrayObject::uasort(callback $cmp_function)
     Sort the entries with a user-defined comparison function and maintain key association
void ArrayObject::uksort(callback $cmp_function)
     Sort the entries by keys using a user-defined comparison function
void ArrayObject::unserialize(string $serialized)
     Unserialize an ArrayObject
void CachingIterator::current()
     Return the current element
void CachingIterator::getCache()
     The getCache purpose
void CachingIterator::getFlags()
     Get flags used
void CachingIterator::getInnerIterator()
     Returns the inner iterator
void CachingIterator::hasNext()
     Check whether the inner iterator has a valid next element
void CachingIterator::key()
     Return the key for the current element
void CachingIterator::next()
     Move the iterator forward
void CachingIterator::offsetExists(string $index)
     The offsetExists purpose
void CachingIterator::offsetGet(string $index)
     The offsetGet purpose
void CachingIterator::offsetSet(string $index, string $newval)
     The offsetSet purpose
void CachingIterator::offsetUnset(string $index)
     The offsetUnset purpose
void CachingIterator::rewind()
     Rewind the iterator
void CachingIterator::setFlags(bitmask $flags)
     The setFlags purpose
void CachingIterator::valid()
     Check whether the current element is valid
void CachingIterator::__toString()
     Return the string representation of the current element
void CairoContext::appendPath(CairoPath $path, CairoContext $context)
     Appends a path to current path
void CairoContext::arc(float $x, float $y, float $radius, float $angle1, float $angle2, CairoContext $context)
     Adds a circular arc
void CairoContext::arcNegative(float $x, float $y, float $radius, float $angle1, float $angle2, CairoContext $context)
     Adds a negative arc
void CairoContext::clip(CairoContext $context)
     Establishes a new clip region
void CairoContext::clipPreserve(CairoContext $context)
     Establishes a new clip region from the current clip
void CairoContext::closePath(CairoContext $context)
     Closes the current path
void CairoContext::copyPage(CairoContext $context)
     Emits the current page
void CairoContext::curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3, CairoContext $context)
     Adds a curve
void CairoContext::fill(CairoContext $context)
     Fills the current path
void CairoContext::fillPreserve(CairoContext $context)
     Fills and preserve the current path
void CairoContext::getFontFace(CairoContext $context)
     The getFontFace purpose
void CairoContext::getFontMatrix(CairoContext $context)
     The getFontMatrix purpose
void CairoContext::getFontOptions(CairoContext $context)
     The getFontOptions purpose
void CairoContext::getGroupTarget(CairoContext $context)
     The getGroupTarget purpose
void CairoContext::getMatrix(CairoContext $context)
     The getMatrix purpose
void CairoContext::getScaledFont(CairoContext $context)
     The getScaledFont purpose
void CairoContext::getSource(CairoContext $context)
     The getSource purpose
void CairoContext::getTarget(CairoContext $context)
     The getTarget purpose
void CairoContext::glyphPath(array $glyphs, CairoContext $context)
     The glyphPath purpose
void CairoContext::identityMatrix(CairoContext $context)
     The identityMatrix purpose
void CairoContext::lineTo(string $x, string $y, CairoContext $context)
     The lineTo purpose
void CairoContext::mask(CairoPattern $pattern, CairoContext $context)
     The mask purpose
void CairoContext::maskSurface(CairoSurface $surface [, string $x = `` [, string $y = ``, CairoContext $context]])
     The maskSurface purpose
void CairoContext::moveTo(string $x, string $y, CairoContext $context)
     The moveTo purpose
void CairoContext::newPath(CairoContext $context)
     The newPath purpose
void CairoContext::newSubPath(CairoContext $context)
     The newSubPath purpose
void CairoContext::paint(CairoContext $context)
     The paint purpose
void CairoContext::paintWithAlpha(string $alpha, CairoContext $context)
     The paintWithAlpha purpose
void CairoContext::popGroup(CairoContext $context)
     The popGroup purpose
void CairoContext::popGroupToSource(CairoContext $context)
     The popGroupToSource purpose
void CairoContext::pushGroup(CairoContext $context)
     The pushGroup purpose
void CairoContext::pushGroupWithContent(string $content, CairoContext $context)
     The pushGroupWithContent purpose
void CairoContext::rectangle(string $x, string $y, string $width, string $height, CairoContext $context)
     The rectangle purpose
void CairoContext::relCurveTo(string $x1, string $y1, string $x2, string $y2, string $x3, string $y3, CairoContext $context)
     The relCurveTo purpose
void CairoContext::relLineTo(string $x, string $y, CairoContext $context)
     The relLineTo purpose
void CairoContext::relMoveTo(string $x, string $y, CairoContext $context)
     The relMoveTo purpose
void CairoContext::resetClip(CairoContext $context)
     The resetClip purpose
void CairoContext::restore(CairoContext $context)
     The restore purpose
void CairoContext::rotate(string $angle, CairoContext $context)
     The rotate purpose
void CairoContext::save(CairoContext $context)
     The save purpose
void CairoContext::scale(string $x, string $y, CairoContext $context)
     The scale purpose
void CairoContext::selectFontFace(string $family [, string $slant = `` [, string $weight = ``, CairoContext $context]])
     The selectFontFace purpose
void CairoContext::setAntialias([string $antialias = ``, CairoContext $context])
     The setAntialias purpose
void CairoContext::setDash(array $dashes [, string $offset = ``, CairoContext $context])
     The setDash purpose
void CairoContext::setFillRule(string $setting, CairoContext $context)
     The setFillRule purpose
void CairoContext::setFontFace(CairoFontFace $fontface, CairoContext $context)
     The setFontFace purpose
void CairoContext::setFontMatrix(CairoMatrix $matrix, CairoContext $context)
     The setFontMatrix purpose
void CairoContext::setFontOptions(CairoFontOptions $fontoptions, CairoContext $context)
     The setFontOptions purpose
void CairoContext::setFontSize(string $size, CairoContext $context)
     The setFontSize purpose
void CairoContext::setLineCap(string $setting, CairoContext $context)
     The setLineCap purpose
void CairoContext::setLineJoin(string $setting, CairoContext $context)
     The setLineJoin purpose
void CairoContext::setLineWidth(string $width, CairoContext $context)
     The setLineWidth purpose
void CairoContext::setMatrix(CairoMatrix $matrix, CairoContext $context)
     The setMatrix purpose
void CairoContext::setMiterLimit(string $limit, CairoContext $context)
     The setMiterLimit purpose
void CairoContext::setOperator(string $setting, CairoContext $context)
     The setOperator purpose
void CairoContext::setScaledFont(CairoScaledFont $scaledfont, CairoContext $context)
     The setScaledFont purpose
void CairoContext::setSource(CairoPattern $pattern, CairoContext $context)
     The setSource purpose
void CairoContext::setSourceRGB(string $red, string $green, string $blue, CairoContext $context, CairoPattern $pattern)
     The setSourceRGB purpose
void CairoContext::setSourceRGBA(string $red, string $green, string $blue, string $alpha, CairoContext $context, CairoPattern $pattern)
     The setSourceRGBA purpose
void CairoContext::setSourceSurface(CairoSurface $surface [, string $x = `` [, string $y = ``, CairoContext $context]])
     The setSourceSurface purpose
void CairoContext::setTolerance(string $tolerance, CairoContext $context)
     The setTolerance purpose
void CairoContext::showPage(CairoContext $context)
     The showPage purpose
void CairoContext::showText(string $text, CairoContext $context)
     The showText purpose
void CairoContext::stroke(CairoContext $context)
     The stroke purpose
void CairoContext::strokePreserve(CairoContext $context)
     The strokePreserve purpose
void CairoContext::textPath(string $string, CairoContext $context, string $text)
     The textPath purpose
void CairoContext::transform(CairoMatrix $matrix, CairoContext $context)
     The transform purpose
void CairoContext::translate(string $x, string $y, CairoContext $context)
     The translate purpose
void CairoFontOptions::merge(string $other)
     The merge purpose
void CairoFontOptions::setAntialias([string $antialias = ``, CairoContext $context])
     The setAntialias purpose
void CairoFontOptions::setHintMetrics(string $hint_metrics)
     The setHintMetrics purpose
void CairoFontOptions::setHintStyle(string $hint_style)
     The setHintStyle purpose
void CairoFontOptions::setSubpixelOrder(string $subpixel_order)
     The setSubpixelOrder purpose
void CairoGradientPattern::addColorStopRgb(string $offset, string $red, string $green, string $blue)
     The addColorStopRgb purpose
void CairoGradientPattern::addColorStopRgba(string $offset, string $red, string $green, string $blue, string $alpha)
     The addColorStopRgba purpose
void CairoGradientPattern::setExtend(int $extend)
     The setExtend purpose
void CairoImageSurface::createForData(string $data, int $format, int $width, int $height [, int $stride = -1])
     The createForData purpose
void CairoMatrix::invert()
     The invert purpose
void CairoMatrix::rotate(string $sx, string $sy, CairoContext $context, string $angle)
     The rotate purpose
void CairoMatrix::scale(float $sx, float $sy, CairoContext $context)
     Applies scaling to a matrix
void CairoMatrix::translate(string $tx, string $ty, CairoContext $context, string $x, string $y)
     The translate purpose
void CairoPattern::getMatrix(CairoContext $context)
     The getMatrix purpose
void CairoPattern::setMatrix(CairoMatrix $matrix, CairoContext $context)
     The setMatrix purpose
void CairoPdfSurface::setSize(string $width, string $height)
     The setSize purpose
void CairoPsSurface::dscBeginPageSetup()
     The dscBeginPageSetup purpose
void CairoPsSurface::dscBeginSetup()
     The dscBeginSetup purpose
void CairoPsSurface::dscComment(string $comment)
     The dscComment purpose
void CairoPsSurface::restrictToLevel(string $level)
     The restrictToLevel purpose
void CairoPsSurface::setEps(string $level)
     The setEps purpose
void CairoPsSurface::setSize(string $width, string $height)
     The setSize purpose
void CairoScaledFont::getFontFace(CairoContext $context)
     The getFontFace purpose
void CairoScaledFont::getFontMatrix(CairoContext $context)
     The getFontMatrix purpose
void CairoScaledFont::getFontOptions(CairoContext $context)
     The getFontOptions purpose
void CairoScaledFont::getScaleMatrix()
     The getScaleMatrix purpose
void CairoSurface::copyPage(CairoContext $context)
     The copyPage purpose
void CairoSurface::createSimilar(CairoSurface $other, int $content, string $width, string $height)
     The createSimilar purpose
void CairoSurface::finish()
     The finish purpose
void CairoSurface::flush()
     The flush purpose
void CairoSurface::getFontOptions(CairoContext $context)
     The getFontOptions purpose
void CairoSurface::markDirty()
     The markDirty purpose
void CairoSurface::markDirtyRectangle(string $x, string $y, string $width, string $height)
     The markDirtyRectangle purpose
void CairoSurface::setDeviceOffset(string $x, string $y)
     The setDeviceOffset purpose
void CairoSurface::setFallbackResolution(string $x, string $y)
     The setFallbackResolution purpose
void CairoSurface::showPage(CairoContext $context)
     The showPage purpose
void CairoSurface::writeToPng(string $file)
     The writeToPng purpose
void CairoSurfacePattern::getSurface()
     The getSurface purpose
void CairoSurfacePattern::setExtend(int $extend)
     The setExtend purpose
void CairoSurfacePattern::setFilter(string $filter)
     The setFilter purpose
void CairoSvgSurface::restrictToVersion(string $version)
     The restrictToVersion purpose
void cairo_append_path(CairoPath $path, CairoContext $context)
     Appends a path to current path
void cairo_arc(float $x, float $y, float $radius, float $angle1, float $angle2, CairoContext $context)
     Adds a circular arc
void cairo_arc_negative(float $x, float $y, float $radius, float $angle1, float $angle2, CairoContext $context)
     Adds a negative arc
void cairo_clip(CairoContext $context)
     Establishes a new clip region
void cairo_clip_preserve(CairoContext $context)
     Establishes a new clip region from the current clip
void cairo_close_path(CairoContext $context)
     Closes the current path
void cairo_copy_page(CairoContext $context)
     The copyPage purpose
void cairo_copy_page(CairoContext $context)
     The copyPage purpose
void cairo_curve_to(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3, CairoContext $context)
     Adds a curve
void cairo_fill(CairoContext $context)
     Fills the current path
void cairo_fill_preserve(CairoContext $context)
     Fills and preserve the current path
void cairo_font_options_merge(CairoFontOptions $options, CairoFontOptions $other)
     Description
void cairo_font_options_set_antialias(CairoFontOptions $options, int $antialias)
     Description
void cairo_font_options_set_hint_metrics(CairoFontOptions $options, int $hint_metrics)
     Description
void cairo_font_options_set_hint_style(CairoFontOptions $options, int $hint_style)
     Description
void cairo_font_options_set_subpixel_order(CairoFontOptions $options, int $subpixel_order)
     Description
void cairo_get_font_face(CairoContext $context)
     The getFontFace purpose
void cairo_get_font_face(CairoContext $context)
     The getFontFace purpose
void cairo_get_font_matrix(CairoContext $context)
     The getFontMatrix purpose
void cairo_get_font_matrix(CairoContext $context)
     The getFontMatrix purpose
void cairo_get_font_options(CairoContext $context)
     The getFontOptions purpose
void cairo_get_font_options(CairoContext $context)
     The getFontOptions purpose
void cairo_get_font_options(CairoContext $context)
     The getFontOptions purpose
void cairo_get_group_target(CairoContext $context)
     The getGroupTarget purpose
void cairo_get_matrix(CairoContext $context)
     The getMatrix purpose
void cairo_get_matrix(CairoContext $context)
     The getMatrix purpose
void cairo_get_scaled_font(CairoContext $context)
     The getScaledFont purpose
void cairo_get_source(CairoContext $context)
     The getSource purpose
void cairo_get_target(CairoContext $context)
     The getTarget purpose
void cairo_glyph_path(array $glyphs, CairoContext $context)
     The glyphPath purpose
void cairo_identity_matrix(CairoContext $context)
     The identityMatrix purpose
void cairo_line_to(string $x, string $y, CairoContext $context)
     The lineTo purpose
void cairo_mask(CairoPattern $pattern, CairoContext $context)
     The mask purpose
void cairo_mask_surface(CairoSurface $surface [, string $x = `` [, string $y = ``, CairoContext $context]])
     The maskSurface purpose
void cairo_matrix_invert(CairoMatrix $matrix)
     Description
void cairo_matrix_rotate(CairoMatrix $matrix, float $radians)
     Description
void cairo_matrix_scale(float $sx, float $sy, CairoContext $context)
     Applies scaling to a matrix
void cairo_matrix_translate(CairoMatrix $matrix, float $tx, float $ty)
     Description
void cairo_move_to(string $x, string $y, CairoContext $context)
     The moveTo purpose
void cairo_new_path(CairoContext $context)
     The newPath purpose
void cairo_new_sub_path(CairoContext $context)
     The newSubPath purpose
void cairo_paint(CairoContext $context)
     The paint purpose
void cairo_paint_with_alpha(string $alpha, CairoContext $context)
     The paintWithAlpha purpose
void cairo_pattern_add_color_stop_rgb(CairoGradientPattern $pattern, float $offset, float $red, float $green, float $blue)
     Description
void cairo_pattern_add_color_stop_rgba(CairoGradientPattern $pattern, float $offset, float $red, float $green, float $blue, float $alpha)
     Description
void cairo_pattern_set_extend(string $pattern, string $extend)
     Description
void cairo_pattern_set_filter(CairoSurfacePattern $pattern, int $filter)
     Description
void cairo_pattern_set_matrix(CairoPattern $pattern, CairoMatrix $matrix)
     Description
void cairo_pdf_surface_set_size(CairoPdfSurface $surface, float $width, float $height)
     Description
void cairo_pop_group(CairoContext $context)
     The popGroup purpose
void cairo_pop_group_to_source(CairoContext $context)
     The popGroupToSource purpose
void cairo_ps_surface_dsc_begin_page_setup(CairoPsSurface $surface)
     Description
void cairo_ps_surface_dsc_begin_setup(CairoPsSurface $surface)
     Description
void cairo_ps_surface_dsc_comment(CairoPsSurface $surface, string $comment)
     Description
void cairo_ps_surface_restrict_to_level(CairoPsSurface $surface, int $level)
     Description
void cairo_ps_surface_set_eps(CairoPsSurface $surface, bool $level)
     Description
void cairo_ps_surface_set_size(CairoPsSurface $surface, float $width, float $height)
     Description
void cairo_push_group(CairoContext $context)
     The pushGroup purpose
void cairo_push_group_with_content(string $content, CairoContext $context)
     The pushGroupWithContent purpose
void cairo_rectangle(string $x, string $y, string $width, string $height, CairoContext $context)
     The rectangle purpose
void cairo_rel_curve_to(string $x1, string $y1, string $x2, string $y2, string $x3, string $y3, CairoContext $context)
     The relCurveTo purpose
void cairo_rel_line_to(string $x, string $y, CairoContext $context)
     The relLineTo purpose
void cairo_rel_move_to(string $x, string $y, CairoContext $context)
     The relMoveTo purpose
void cairo_reset_clip(CairoContext $context)
     The resetClip purpose
void cairo_restore(CairoContext $context)
     The restore purpose
void cairo_rotate(string $sx, string $sy, CairoContext $context, string $angle)
     The rotate purpose
void cairo_rotate(string $sx, string $sy, CairoContext $context, string $angle)
     The rotate purpose
void cairo_save(CairoContext $context)
     The save purpose
void cairo_scale(string $x, string $y, CairoContext $context)
     The scale purpose
void cairo_select_font_face(string $family [, string $slant = `` [, string $weight = ``, CairoContext $context]])
     The selectFontFace purpose
void cairo_set_antialias([string $antialias = ``, CairoContext $context])
     The setAntialias purpose
void cairo_set_antialias([string $antialias = ``, CairoContext $context])
     The setAntialias purpose
void cairo_set_dash(array $dashes [, string $offset = ``, CairoContext $context])
     The setDash purpose
void cairo_set_fill_rule(string $setting, CairoContext $context)
     The setFillRule purpose
void cairo_set_font_face(CairoFontFace $fontface, CairoContext $context)
     The setFontFace purpose
void cairo_set_font_matrix(CairoMatrix $matrix, CairoContext $context)
     The setFontMatrix purpose
void cairo_set_font_options(CairoFontOptions $fontoptions, CairoContext $context)
     The setFontOptions purpose
void cairo_set_font_size(string $size, CairoContext $context)
     The setFontSize purpose
void cairo_set_line_cap(string $setting, CairoContext $context)
     The setLineCap purpose
void cairo_set_line_join(string $setting, CairoContext $context)
     The setLineJoin purpose
void cairo_set_line_width(string $width, CairoContext $context)
     The setLineWidth purpose
void cairo_set_matrix(CairoMatrix $matrix, CairoContext $context)
     The setMatrix purpose
void cairo_set_matrix(CairoMatrix $matrix, CairoContext $context)
     The setMatrix purpose
void cairo_set_miter_limit(string $limit, CairoContext $context)
     The setMiterLimit purpose
void cairo_set_operator(string $setting, CairoContext $context)
     The setOperator purpose
void cairo_set_scaled_font(CairoScaledFont $scaledfont, CairoContext $context)
     The setScaledFont purpose
void cairo_set_source(string $red, string $green, string $blue, string $alpha, CairoContext $context, CairoPattern $pattern)
     The setSourceRGBA purpose
void cairo_set_source(string $red, string $green, string $blue, string $alpha, CairoContext $context, CairoPattern $pattern)
     The setSourceRGBA purpose
void cairo_set_source(string $red, string $green, string $blue, string $alpha, CairoContext $context, CairoPattern $pattern)
     The setSourceRGBA purpose
void cairo_set_source_surface(CairoSurface $surface [, string $x = `` [, string $y = ``, CairoContext $context]])
     The setSourceSurface purpose
void cairo_set_tolerance(string $tolerance, CairoContext $context)
     The setTolerance purpose
void cairo_show_page(CairoContext $context)
     The showPage purpose
void cairo_show_page(CairoContext $context)
     The showPage purpose
void cairo_show_text(string $text, CairoContext $context)
     The showText purpose
void cairo_stroke(CairoContext $context)
     The stroke purpose
void cairo_stroke_preserve(CairoContext $context)
     The strokePreserve purpose
void cairo_surface_copy_page(CairoSurface $surface)
     Description
void cairo_surface_finish(CairoSurface $surface)
     Description
void cairo_surface_flush(CairoSurface $surface)
     Description
void cairo_surface_mark_dirty(CairoSurface $surface)
     Description
void cairo_surface_mark_dirty_rectangle(CairoSurface $surface, float $x, float $y, float $width, float $height)
     Description
void cairo_surface_set_device_offset(CairoSurface $surface, float $x, float $y)
     Description
void cairo_surface_set_fallback_resolution(CairoSurface $surface, float $x, float $y)
     Description
void cairo_surface_show_page(CairoSurface $surface)
     Description
void cairo_surface_write_to_png(CairoSurface $surface, resource $stream)
     Description
void cairo_svg_surface_restrict_to_version(CairoSvgSurface $surface, int $version)
     Description
void cairo_text_path(string $string, CairoContext $context, string $text)
     The textPath purpose
void cairo_transform(CairoMatrix $matrix, CairoContext $context)
     The transform purpose
void cairo_translate(string $tx, string $ty, CairoContext $context, string $x, string $y)
     The translate purpose
void cairo_translate(string $tx, string $ty, CairoContext $context, string $x, string $y)
     The translate purpose
void clearstatcache([bool $clear_realpath_cache = false [, string $filename = ``]])
     Clears file status cache
void closedir([resource $dir_handle = ``])
     Close directory handle
void com_addref()
     Increases the components reference counter [deprecated]
void com_release()
     Decreases the components reference counter [deprecated]
void curl_close(resource $ch)
     Close a cURL session
void curl_multi_close(resource $mh)
     Close a set of cURL handles
void cyrus_authenticate(resource $connection [, string $mechlist = `` [, string $service = `` [, string $user = `` [, int $minssf = `` [, int $maxssf = `` [, string $authname = `` [, string $password = ``]]]]]]])
     Authenticate against a Cyrus IMAP server
void dba_close(resource $handle)
     Close a DBA database
void deaggregate(object $object [, string $class_name = ``])
     Removes the aggregated methods and properties from an object
void debug_print_backtrace([int $options = `` [, int $limit = ``]])
     Prints a backtrace
void debug_zval_dump(mixed $variable)
     Dumps a string representation of an internal zend value to output
void define_syslog_variables()
     Initializes all syslog related variables
void delete()
     See unlink or unset
void dio_close(resource $fd)
     Closes the file descriptor given by fd
void dir()
     Return an instance of the Directory class
void DirectoryIterator::next()
     Move forward to next DirectoryIterator item
void DirectoryIterator::rewind()
     Rewind the DirectoryIterator back to the start
void DirectoryIterator::seek(int $position)
     Seek to a DirectoryIterator item
void DOMCharacterData::appendData(string $data)
     Append the string to the end of the character data of the node
void DOMCharacterData::deleteData(int $offset, int $count)
     Remove a range of characters from the node
void DOMCharacterData::insertData(int $offset, string $data)
     Insert a string at the specified 16-bit unit offset
void DOMCharacterData::replaceData(int $offset, int $count, string $data)
     Replace a substring within the DOMCharacterData node
void DOMDocument::normalizeDocument()
     Normalizes the document
void DOMElement::setAttributeNS(string $namespaceURI, string $qualifiedName, string $value)
     Adds new attribute
void DOMElement::setIdAttribute(string $name, bool $isId)
     Declares the attribute specified by name to be of type ID
void DOMElement::setIdAttributeNode(DOMAttr $attr, bool $isId)
     Declares the attribute specified by node to be of type ID
void DOMElement::setIdAttributeNS(string $namespaceURI, string $localName, bool $isId)
     Declares the attribute specified by local name and namespace URI to be of type ID
void DOMNode::normalize()
     Normalizes the node
void DOMXPath::registerPhpFunctions([mixed $restrict = ``])
     Register PHP functions as XPath functions
void echo(string $arg1 [, string $... = ``])
     Output one or more strings
void EmptyIterator::current()
     The current() method
void EmptyIterator::key()
     The key() method
void EmptyIterator::next()
     The next() method
void EmptyIterator::rewind()
     The rewind() method
void EmptyIterator::valid()
     The valid() method
void enchant_dict_add_to_personal(resource $dict, string $word)
     add a word to personal word list
void enchant_dict_add_to_session(resource $dict, string $word)
     add `word` to this spell-checking session
void enchant_dict_store_replacement(resource $dict, string $mis, string $cor)
     Add a correction for a word
void event_base_free(resource $event_base)
     Destroy event base
void event_buffer_fd_set(resource $bevent, resource $fd)
     Change a buffered event file descriptor
void event_buffer_free(resource $bevent)
     Destroy buffered event
void event_buffer_timeout_set(resource $bevent, int $read_timeout, int $write_timeout)
     Set read and write timeouts for a buffered event
void event_buffer_watermark_set(resource $bevent, int $events, int $lowmark, int $highmark)
     Set the watermarks for read and write events
void event_free(resource $event)
     Free event resource
void exit(int $status)
     Output a message and terminate the current script
void fam_close(resource $fam)
     Close FAM connection
void fbsql_set_characterset(resource $link_identifier, int $characterset [, int $in_out_both = ``])
     Change input/output character set
void fbsql_set_transaction(resource $link_identifier, int $locking, int $isolation)
     Set the transaction locking and isolation
void fdf_close(resource $fdf_document)
     Close an FDF document
void fdf_header()
     Sets FDF-specific output headers
void FilesystemIterator::next()
     Move to the next file
void FilesystemIterator::rewind()
     Rewinds back to the beginning
void FilesystemIterator::setFlags([int $flags = ``])
     Sets handling flags
void FilterIterator::next()
     Move the iterator forward
void FilterIterator::rewind()
     Rewind the iterator
void flush()
     Flush the output buffer
void gc_disable()
     Deactivates the circular reference collector
void gc_enable()
     Activates the circular reference collector
void GearmanClient::setClientCallback(callback $callback)
     Callback function when there is a data packet for a task (deprecated)
void GearmanWorker::clone()
     Create a copy of the worker
void Gmagick::deconstructimages()
     Returns certain pixel differences between images
void Gmagick::getimagebackgroundcolor()
     Returns the image background color
void Gmagick::getimagebordercolor()
     Returns the image border color
void Gmagick::getimagemattecolor()
     Returns the image matte color
void Gmagick::medianfilterimage(float $radius)
     Applies a digital filter
void Gmagick::minifyimage()
     Scales an image proportionally to half its size
void Gmagick::modulateimage(float $brightness, float $saturation, float $hue)
     Control the brightness, saturation, and hue
void Gmagick::motionblurimage(float $radius, float $sigma, float $angle)
     Simulates motion blur
void Gmagick::newimage(int $width, int $height, string $background [, string $format = ``])
     Creates a new image
void Gmagick::normalizeimage([int $channel = ``])
     Enhances the contrast of a color image
void Gmagick::oilpaintimage(float $radius)
     Simulates an oil painting
void Gmagick::profileimage(string $name, string $profile)
     Adds or removes a profile from an image
void Gmagick::quantizeimage(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError)
     Analyzes the colors within a reference image
void Gmagick::quantizeimages(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError)
     The quantizeimages purpose
void Gmagick::radialblurimage(float $angle [, int $channel = Gmagick::CHANNEL_DEFAULT])
     Radial blurs an image
void Gmagick::raiseimage(int $width, int $height, int $x, int $y, bool $raise)
     Creates a simulated 3d button-like effect
void Gmagick::read(string $filename)
     Reads image from filename
void Gmagick::readimage(string $filename)
     Reads image from filename
void Gmagick::readimageblob(string $imageContents [, string $filename = ``])
     Reads image from a binary string
void Gmagick::readimagefile(resource $fp [, string $filename = ``])
     The readimagefile purpose
void Gmagick::reducenoiseimage(float $radius)
     Smooths the contours of an image
void Gmagick::removeimage()
     Removes an image from the image list
void Gmagick::resampleimage(float $xResolution, float $yResolution, int $filter, float $blur)
     Resample image to desired resolution
void Gmagick::resizeimage(int $width, int $height, int $filter, float $blur [, bool $fit = false])
     Scales an image
void Gmagick::rollimage(int $x, int $y)
     Offsets an image
void Gmagick::write(string $filename)
     Writes an image to the specified filename
void GmagickDraw::getfillcolor()
     Returns the fill color
void GmagickDraw::getstrokecolor()
     Returns the color used for stroking object outlines
void gmp_clrbit(resource $a, int $index)
     Clear bit
void gmp_setbit(resource $a, int $index [, bool $set_clear = true])
     Set bit
void gnupg_seterrormode(resource $identifier, int $errormode)
     Sets the mode for error_reporting
void gupnp_context_set_subscription_timeout(resource $context, int $timeout)
     Sets the event subscription timeout
void HaruDoc::__construct()
     Construct new HaruDoc instance
void header(string $string [, bool $replace = true [, int $http_response_code = ``]])
     Send a raw HTTP header
void header_remove([string $name = ``])
     Remove previously set headers
void HttpDeflateStream::__construct([int $flags = ``])
     HttpDeflateStream class constructor
void HttpInflateStream::__construct([int $flags = ``])
     HttpInflateStream class constructor
void HttpMessage::addHeaders(array $headers [, bool $append = false])
     Add headers
void HttpMessage::prepend(HttpMessage $message [, bool $top = true])
     Prepend message(s)
void HttpMessage::setBody(string $body)
     Set message body
void HttpMessage::setHeaders(array $headers)
     Set headers
void HttpMessage::setType(int $type)
     Set message type
void HttpMessage::__construct([string $message = ``])
     HttpMessage constructor
void HttpQueryString::__construct([bool $global = true [, mixed $add = ``]])
     HttpQueryString constructor
void HttpRequest::clearHistory()
     Clear history
void HttpRequest::__construct([string $url = `` [, int $request_method = HTTP_METH_GET [, array $options = ``]]])
     HttpRequest constructor
void HttpRequestPool::reset()
     Reset request pool
void HttpRequestPool::__construct([HttpRequest $request = ``])
     HttpRequestPool constructor
void HttpRequestPool::__destruct()
     HttpRequestPool destructor
void HttpResponse::capture()
     Capture script output
void HttpResponse::redirect([string $url = `` [, array $params = `` [, bool $session = false [, int $status = ``]]]])
     Redirect
void http_throttle(float $sec [, int $bytes = 40960])
     HTTP throttling
void hw_connection_info(int $link)
     Prints information about the connection to Hyperwave server
void ibase_blob_add(resource $blob_handle, string $data)
     Add data into a newly created blob
void imagecolorset(resource $image, int $index, int $red, int $green, int $blue [, int $alpha = ``])
     Set the color for the specified palette index
void imagepalettecopy(resource $destination, resource $source)
     Copy the palette from one image to another
void InfiniteIterator::next()
     Moves the inner Iterator forward or rewinds it
void ini_restore(string $varname)
     Restores the value of a configuration option
void IteratorIterator::current()
     Get the current value
void IteratorIterator::getInnerIterator()
     Get the inner iterator
void IteratorIterator::key()
     Get the key of the current element
void IteratorIterator::next()
     Forward to the next element
void IteratorIterator::rewind()
     Rewind to the first element
void java_last_exception_clear()
     Clear last Java exception
void Judy::last([string $index = ``])
     Search for the last index in the Judy array
void Judy::size()
     Return the size of the current Judy array
void Judy::__destruct()
     Destruct a Judy object
void KTaglib_ID3v2_AttachedPictureFrame::setPicture(string $filename)
     Sets the frame picture to the given image
void KTaglib_ID3v2_AttachedPictureFrame::setType(int $type)
     Set the type of the image
void libxml_clear_errors()
     Clear libxml error buffer
void libxml_set_streams_context(resource $streams_context)
     Set the streams context for the next libxml document load or write
void LimitIterator::next()
     Move the iterator forward
void LimitIterator::rewind()
     Rewind the iterator to the specified starting offset
void mailparse_msg_extract_part(resource $mimemail, string $msgbody [, callback $callbackfunc = ``])
     Extracts/decodes a message section
void maxdb::disable_reads_from_master(resource $link)
     Disable reads from master
void maxdb_debug(string $debug)
     Performs debugging operations
void maxdb_disable_reads_from_master(resource $link)
     Disable reads from master
void maxdb_free_result(resource $result)
     Frees the memory associated with a result
void maxdb_result::free(resource $result)
     Frees the memory associated with a result
void maxdb_server_end()
     Shut down the embedded server
void maxdb_stmt::free_result(resource $stmt)
     Frees stored result memory for the given statement handle
void maxdb_stmt_free_result(resource $stmt)
     Frees stored result memory for the given statement handle
void ming_setcubicthreshold(int $threshold)
     Set cubic threshold
void ming_setscale(float $scale)
     Set the global scaling factor.
void ming_setswfcompression(int $level)
     Sets the SWF output compression
void ming_useconstants(int $use)
     Use constant pool
void ming_useswfversion(int $version)
     Sets the SWF version
void MongoCursor::doQuery()
     Execute the query.
void MongoCursor::next()
     Advances the cursor to the next result
void MongoCursor::reset()
     Clears the cursor
void MongoCursor::rewind()
     Returns the cursor to the beginning of the result set
void mqseries_back(resource $hconn, resource $compCode, resource $reason)
     MQSeries MQBACK
void mqseries_begin(resource $hconn, array $beginOptions, resource $compCode, resource $reason)
     MQseries MQBEGIN
void mqseries_close(resource $hconn, resource $hobj, int $options, resource $compCode, resource $reason)
     MQSeries MQCLOSE
void mqseries_cmit(resource $hconn, resource $compCode, resource $reason)
     MQSeries MQCMIT
void mqseries_conn(string $qManagerName, resource $hconn, resource $compCode, resource $reason)
     MQSeries MQCONN
void mqseries_connx(string $qManagerName, array $connOptions, resource $hconn, resource $compCode, resource $reason)
     MQSeries MQCONNX
void mqseries_disc(resource $hconn, resource $compCode, resource $reason)
     MQSeries MQDISC
void mqseries_get(resource $hConn, resource $hObj, array $md, array $gmo, int $bufferLength, string $msg, int $data_length, resource $compCode, resource $reason)
     MQSeries MQGET
void mqseries_inq(resource $hconn, resource $hobj, int $selectorCount, array $selectors, int $intAttrCount, resource $intAttr, int $charAttrLength, resource $charAttr, resource $compCode, resource $reason)
     MQSeries MQINQ
void mqseries_open(resource $hconn, array $objDesc, int $option, resource $hobj, resource $compCode, resource $reason)
     MQSeries MQOPEN
void mqseries_put(resource $hConn, resource $hObj, array $md, array $pmo, string $message, resource $compCode, resource $reason)
     MQSeries MQPUT
void mqseries_put1(resource $hconn, resource $objDesc, resource $msgDesc, resource $pmo, string $buffer, resource $compCode, resource $reason)
     MQSeries MQPUT1
void mqseries_set(resource $hconn, resource $hobj, int $selectorcount, array $selectors, int $intattrcount, array $intattrs, int $charattrlength, array $charattrs, resource $compCode, resource $reason)
     MQSeries MQSET
void msession_disconnect()
     Close connection to msession server
void msession_set_array(string $session, array $tuples)
     Set msession variables from an array
void mssql_min_error_severity(int $severity)
     Sets the minimum error severity
void mssql_min_message_severity(int $severity)
     Sets the minimum message severity
void mt_srand([int $seed = ``])
     Seed the better random number generator
void MultipleIterator::attachIterator(Iterator $iterator [, string $infos = ``])
     Attaches iterator information
void MultipleIterator::containsIterator(Iterator $iterator)
     Checks if an iterator is attached
void MultipleIterator::countIterators()
     Gets the number of attached iterator instances
void MultipleIterator::current()
     Gets the registered iterator instances
void MultipleIterator::detachIterator(Iterator $iterator)
     Detaches an iterator
void MultipleIterator::getFlags()
     Gets the flag information
void MultipleIterator::key()
     Gets the registered iterator instances
void MultipleIterator::next()
     Moves all attached iterator instances forward
void MultipleIterator::rewind()
     Rewinds all attached iterator instances
void MultipleIterator::setFlags(int $flags)
     Sets flags
void MultipleIterator::valid()
     Checks the validity of sub iterators
void mysqli::set_local_infile_default(mysqli $link)
     Unsets user defined handler for load local infile command
void mysqli_driver::embedded_server_end()
     Stop embedded server
void mysqli_embedded_server_end()
     Stop embedded server
void mysqli_free_result(mysqli_result $result)
     Frees the memory associated with a result
void mysqli_result::free(mysqli_result $result)
     Frees the memory associated with a result
void mysqli_set_local_infile_default(mysqli $link)
     Unsets user defined handler for load local infile command
void mysqli_stmt::data_seek(int $offset, mysqli_stmt $stmt)
     Seeks to an arbitrary row in statement result set
void mysqli_stmt::free_result(mysqli_stmt $stmt)
     Frees stored result memory for the given statement handle
void mysqli_stmt_data_seek(int $offset, mysqli_stmt $stmt)
     Seeks to an arbitrary row in statement result set
void mysqli_stmt_free_result(mysqli_stmt $stmt)
     Frees stored result memory for the given statement handle
void mysqli_warning::next()
     The next purpose
void m_destroyengine()
     Free memory associated with IP/SSL connectivity
void ncurses_bkgdset(int $attrchar)
     Control screen background
void ncurses_filter()
     Set LINES for iniscr() and newterm() to 1
void ncurses_getmaxyx(resource $window, int $y, int $x)
     Returns the size of a window
void ncurses_getyx(resource $window, int $y, int $x)
     Returns the current cursor position for a window
void ncurses_init()
     Initialize ncurses
void ncurses_noqiflush()
     Do not flush on signal characters
void ncurses_qiflush()
     Flush on signal characters
void ncurses_timeout(int $millisec)
     Set timeout for special key sequences
void ncurses_update_panels()
     Refreshes the virtual screen to reflect the relations between panels in the stack
void ncurses_use_env(bool $flag)
     Control use of environment information about terminal size
void newt_bell()
     Send a beep to the terminal
void newt_checkbox_set_flags(resource $checkbox, int $flags, int $sense)
     Configures checkbox resource
void newt_checkbox_set_value(resource $checkbox, string $value)
     Sets the value of the checkbox
void newt_checkbox_tree_add_item(resource $checkboxtree, string $text, mixed $data, int $flags, int $index [, int $... = ``])
     Adds new item to the checkbox tree
void newt_checkbox_tree_set_current(resource $checkboxtree, mixed $data)
     
void newt_checkbox_tree_set_entry(resource $checkboxtree, mixed $data, string $text)
     
void newt_checkbox_tree_set_entry_value(resource $checkboxtree, mixed $data, string $value)
     
void newt_checkbox_tree_set_width(resource $checkbox_tree, int $width)
     
void newt_clear_key_buffer()
     Discards the contents of the terminal`s input buffer without  waiting for additional input
void newt_cls()
     
void newt_component_add_callback(resource $component, mixed $func_name, mixed $data)
     
void newt_component_takes_focus(resource $component, bool $takes_focus)
     
void newt_cursor_off()
     
void newt_cursor_on()
     
void newt_delay(int $microseconds)
     
void newt_draw_form(resource $form)
     
void newt_draw_root_text(int $left, int $top, string $text)
     Displays the string text at the position indicated
void newt_entry_set(resource $entry, string $value [, bool $cursor_at_end = ``])
     
void newt_entry_set_filter(resource $entry, callback $filter, mixed $data)
     
void newt_entry_set_flags(resource $entry, int $flags, int $sense)
     
void newt_form_add_component(resource $form, resource $component)
     Adds a single component to the form
void newt_form_add_components(resource $form, array $components)
     Add several components to the form
void newt_form_add_hot_key(resource $form, int $key)
     
void newt_form_destroy(resource $form)
     Destroys a form
void newt_form_run(resource $form, array $exit_struct)
     Runs a form
void newt_form_set_background(resource $from, int $background)
     
void newt_form_set_height(resource $form, int $height)
     
void newt_form_set_size(resource $form)
     
void newt_form_set_timer(resource $form, int $milliseconds)
     
void newt_form_set_width(resource $form, int $width)
     
void newt_form_watch_fd(resource $form, resource $stream [, int $flags = ``])
     
void newt_get_screen_size(int $cols, int $rows)
     Fills in the passed references with the current size of the  terminal
void newt_grid_add_components_to_form(resource $grid, resource $form, bool $recurse)
     
void newt_grid_free(resource $grid, bool $recurse)
     
void newt_grid_get_size(resouce $grid, int $width, int $height)
     
void newt_grid_place(resource $grid, int $left, int $top)
     
void newt_grid_set_field(resource $grid, int $col, int $row, int $type, resource $val, int $pad_left, int $pad_top, int $pad_right, int $pad_bottom, int $anchor [, int $flags = ``])
     
void newt_grid_wrapped_window(resource $grid, string $title)
     
void newt_grid_wrapped_window_at(resource $grid, string $title, int $left, int $top)
     
void newt_label_set_text(resource $label, string $text)
     
void newt_listbox_append_entry(resource $listbox, string $text, mixed $data)
     
void newt_listbox_clear(resource $listobx)
     
void newt_listbox_clear_selection(resource $listbox)
     
void newt_listbox_delete_entry(resource $listbox, mixed $key)
     
void newt_listbox_insert_entry(resource $listbox, string $text, mixed $data, mixed $key)
     
void newt_listbox_select_item(resource $listbox, mixed $key, int $sense)
     
void newt_listbox_set_current(resource $listbox, int $num)
     
void newt_listbox_set_current_by_key(resource $listbox, mixed $key)
     
void newt_listbox_set_data(resource $listbox, int $num, mixed $data)
     
void newt_listbox_set_entry(resource $listbox, int $num, string $text)
     
void newt_listbox_set_width(resource $listbox, int $width)
     
void newt_listitem_set(resource $item, string $text)
     
void newt_pop_help_line()
     Replaces the current help line with the one from the stack
void newt_pop_window()
     Removes the top window from the display
void newt_push_help_line([string $text = ``])
     Saves the current help line on a stack, and displays the new line
void newt_redraw_help_line()
     
void newt_refresh()
     Updates modified portions of the screen
void newt_resize_screen([bool $redraw = ``])
     
void newt_resume()
     Resume using the newt interface after calling  newt_suspend
void newt_scale_set(resource $scale, int $amount)
     
void newt_scrollbar_set(resource $scrollbar, int $where, int $total)
     
void newt_set_help_callback(mixed $function)
     
void newt_set_suspend_callback(callback $function, mixed $data)
     Set a callback function which gets invoked when user  presses the suspend key
void newt_suspend()
     Tells newt to return the terminal to its initial state
void newt_textbox_set_height(resource $textbox, int $height)
     
void newt_textbox_set_text(resource $textbox, string $text)
     
void newt_wait_for_key()
     Doesn`t return until a key has been pressed
void newt_win_message(string $title, string $button_text, string $format [, mixed $args = `` [, mixed $... = ``]])
     
void newt_win_messagev(string $title, string $button_text, string $format, array $args)
     
void NoRewindIterator::next()
     Forward to the next element
void NoRewindIterator::rewind()
     Prevents the rewind operation on the inner iterator.
void OAuth::setRequestEngine(int $reqengine)
     The setRequestEngine purpose
void OAuth::__destruct()
     The destructor
void OAuthProvider::callconsumerHandler()
     Calls the consumerNonceHandler callback
void OAuthProvider::callTimestampNonceHandler()
     Calls the timestampNonceHandler callback
void OAuthProvider::calltokenHandler()
     Calls the tokenNonceHandler callback
void OAuthProvider::checkOAuthRequest([string $uri = `` [, string $method = ``]])
     Check an oauth request
void OAuthProvider::consumerHandler(callback $callback_function)
     Set the consumerHandler handler callback
void OAuthProvider::is2LeggedEndpoint(mixed $params_array)
     is2LeggedEndpoint
void OAuthProvider::isRequestTokenEndpoint(bool $will_issue_request_token)
     Sets isRequestTokenEndpoint
void OAuthProvider::timestampNonceHandler(callback $callback_function)
     Set the timestampNonceHandler handler callback
void OAuthProvider::tokenHandler(callback $callback_function)
     Set the tokenHandler handler callback
void ob_clean()
     Clean (erase) the output buffer
void ob_flush()
     Flush (send) the output buffer
void ob_implicit_flush([int $flag = true])
     Turn implicit flush on/off
void oci_internal_debug(bool $onoff)
     Enables or disables internal debug output
void odbc_close(resource $connection_id)
     Close an ODBC connection
void odbc_close_all()
     Close all ODBC connections
void openssl_free_key(resource $key_identifier)
     Free key resource
void openssl_pkey_free(resource $key)
     Frees a private key
void openssl_x509_free(resource $x509cert)
     Free certificate resource
void overload(string $class_name)
     Enable property and method call overloading for a class
void ParentIterator::next()
     Move the iterator forward
void ParentIterator::rewind()
     Rewind the iterator
void parse_str(string $str [, array $arr = ``])
     Parses the string into variables
void passthru(string $command [, int $return_var = ``])
     Execute an external program and display raw output
void pcntl_exec(string $path [, array $args = `` [, array $envs = ``]])
     Executes specified program in current process space
void Phar::addEmptyDir(string $dirname)
     Add an empty directory to the phar archive
void Phar::addFile(string $file [, string $localname = ``])
     Add a file from the filesystem to the phar archive
void Phar::addFromString(string $localname, string $contents)
     Add a file from the filesystem to the phar archive
void Phar::compressFiles(int $compression)
     Compresses all files in the current Phar archive
void Phar::interceptFileFuncs()
     instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
void Phar::mount(string $pharpath, string $externalpath)
     Mount an external path or file to a virtual location within the phar archive
void Phar::mungServer(array $munglist)
     Defines a list of up to 4 $_SERVER variables that should be modified for execution
void Phar::offsetSet(string $offset, string $value)
     set the contents of an internal file to those of an external file
void Phar::setMetadata(mixed $metadata)
     Sets phar archive meta-data
void Phar::setMetadata(mixed $metadata)
     Sets phar archive meta-data
void Phar::setSignatureAlgorithm(int $sigtype)
     set the signature algorithm for a phar and apply it.  The
void Phar::setSignatureAlgorithm(int $sigtype)
     set the signature algorithm for a phar and apply it.  The
void Phar::startBuffering()
     Start buffering Phar write operations, do not modify the Phar object on disk
void Phar::stopBuffering()
     Stop buffering write requests to the Phar archive, and save changes to disk
void Phar::webPhar([string $alias = `` [, string $index = \"index.php\" [, string $f404 = `` [, array $mimetypes = `` [, array $rewrites = ``]]]]])
     mapPhar for web-based phars. front controller for web applications
void Phar::__construct(string $fname [, int $flags = `` [, string $alias = ``]])
     Construct a Phar archive object
void PharData::addFile(string $file [, string $localname = ``])
     Add a file from the filesystem to the tar/zip archive
void PharData::offsetSet(string $offset, string $value)
     set the contents of a file within the tar/zip to those of an external file or string
void PharData::__construct(string $fname [, int $flags = `` [, string $alias = `` [, int $format = ``]]])
     Construct a non-executable tar or zip archive object
void PharFileInfo::chmod(int $permissions)
     Sets file-specific permission bits
void PharFileInfo::setMetaData(mixed $metadata)
     Sets file-specific meta-data saved with a file
void PharFileInfo::__construct(string $entry)
     Construct a Phar entry object
void ps_close_image(resource $psdoc, int $imageid)
     Closes image and frees memory
void px_set_tablename(resource $pxdoc, string $name)
     Sets the name of a table (deprecated)
void readline_callback_read_char()
     Reads a character and informs the readline callback interface when a line is received
void readline_on_new_line()
     Inform readline that the cursor has moved to a new line
void readline_redisplay()
     Redraws the display
void RecursiveDirectoryIterator::next()
     Move to next entry
void RecursiveDirectoryIterator::rewind()
     Rewind dir back to the start
void RecursiveFilterIterator::getChildren()
     Return the inner iterator`s children contained in a RecursiveFilterIterator
void RecursiveFilterIterator::hasChildren()
     Check whether the inner iterator`s current element has children
void RecursiveIteratorIterator::beginChildren()
     Begin children
void RecursiveIteratorIterator::beginIteration()
     Begin Iteration
void RecursiveIteratorIterator::endChildren()
     End children
void RecursiveIteratorIterator::endIteration()
     End Iteration
void RecursiveIteratorIterator::next()
     Move forward to the next element
void RecursiveIteratorIterator::nextElement()
     Next element
void RecursiveIteratorIterator::rewind()
     Rewind the iterator to the first element of the top level inner iterator
void RecursiveIteratorIterator::setMaxDepth([string $max_depth = -1])
     Set max depth
void RecursiveTreeIterator::beginChildren()
     Begin children
void RecursiveTreeIterator::endChildren()
     End children
void RecursiveTreeIterator::endIteration()
     End iteration
void RecursiveTreeIterator::getPostfix()
     Get the postfix
void RecursiveTreeIterator::next()
     Move to next element
void RecursiveTreeIterator::nextElement()
     Next element
void RecursiveTreeIterator::rewind()
     Rewind iterator
void RecursiveTreeIterator::setPrefixPart(int $part, string $value)
     Set a part of the prefix
void Reflection::export(Reflector $reflector [, bool $return = false])
     Exports
void ReflectionClass::setStaticPropertyValue(string $name, string $value)
     Sets static property value
void ReflectionClass::__clone()
     Clones object
void ReflectionExtension::__clone()
     Clones
void ReflectionFunctionAbstract::__clone()
     Clones function
void ReflectionFunctionAbstract::__toString()
     To string
void ReflectionMethod::setAccessible(bool $accessible)
     Set method accessibility
void ReflectionParameter::__clone()
     Clone
void ReflectionProperty::setAccessible(bool $accessible)
     Set property accessibility
void ReflectionProperty::setValue(object $object, mixed $value)
     Set property value
void ReflectionProperty::__clone()
     Clone
void RegexIterator::setFlags(int $flags)
     Sets the flags.
void RegexIterator::setMode(int $mode)
     Sets the operation mode.
void RegexIterator::setPregFlags(int $preg_flags)
     Sets the regular expression flags.
void register_shutdown_function(callback $function [, mixed $parameter = `` [, mixed $... = ``]])
     Register a function for execution on shutdown
void restore_include_path()
     Restores the value of the include_path configuration option
void rewinddir([resource $dir_handle = ``])
     Rewind directory handle
void RRDCreator::addArchive(string $description)
     Adds RRA - archive of data values for each data source.
void RRDCreator::addDataSource(string $description)
     Adds data source definition for RRD database.
void RRDCreator::__construct(string $path [, string $startTime = `` [, int $step = ``]])
     Creates new RRDCreator instance
void RRDGraph::setOptions(array $options)
     Sets the options for rrd graph export
void RRDGraph::__construct(string $path)
     Creates new RRDGraph instance
void RRDUpdater::__construct(string $path)
     Creates new RRDUpdater instance
void Runkit_Sandbox_Parent()
     Runkit Anti-Sandbox Class
void SAMConnection::setDebug(bool $switch)
     Turn on or off additional debugging output.
void SDO_DAS_ChangeSummary::beginLogging()
     Begin change logging
void SDO_DAS_ChangeSummary::endLogging()
     End change logging
void SDO_DAS_DataFactory::addPropertyToType(string $parent_type_namespace_uri, string $parent_type_name, string $property_name, string $type_namespace_uri, string $type_name [, array $options = ``])
     Adds a property to a type
void SDO_DAS_DataFactory::addType(string $type_namespace_uri, string $type_name [, array $options = ``])
     Add a new type to a model
void SDO_DAS_Relational::applyChanges(PDO $database_handle, SDODataObject $root_data_object)
     Applies the changes made to a data graph back to the database.
void SDO_DAS_XML::addTypes(string $xsd_file)
     To load a second or subsequent schema file to a SDO_DAS_XML object
void SDO_DAS_XML::saveFile(SDO_XMLDocument $xdoc, string $xml_file [, int $indent = ``])
     Saves the SDO_DAS_XML_Document object to a file
void SDO_DAS_XML_Document::setEncoding(string $encoding)
     Sets the given string as encoding
void SDO_DAS_XML_Document::setXMLDeclaration(bool $xmlDeclatation)
     Sets the xml declaration
void SDO_DAS_XML_Document::setXMLVersion(string $xmlVersion)
     Sets the given string as xml version
void SDO_DataFactory::create(string $type_namespace_uri, string $type_name)
     Create an SDO_DataObject
void SDO_DataObject::clear()
     Clear an SDO_DataObject`s properties
void SDO_List::insert(mixed $value [, int $index = ``])
     Insert into a list
void SDO_Sequence::insert(mixed $value [, int $sequenceIndex = `` [, mixed $propertyIdentifier = ``]])
     Insert into a sequence
void SDO_Sequence::move(int $toIndex, int $fromIndex)
     Move an item to another sequence position
void SeekableIterator::seek(int $position)
     Seeks to a position
void session_set_cookie_params(int $lifetime [, string $path = `` [, string $domain = `` [, bool $secure = false [, bool $httponly = false]]]])
     Set the session cookie parameters
void session_unset()
     Free all session variables
void session_write_close()
     Write session data and end session
void setproctitle(string $title)
     Set the process title
void set_time_limit(int $seconds)
     Limits the maximum execution time
void shmop_close(int $shmid)
     Close shared memory block
void SimpleXMLElement::addAttribute(string $name, string $value [, string $namespace = ``])
     Adds an attribute to the SimpleXML element
void SimpleXMLIterator::next()
     Move to next element
void SimpleXMLIterator::rewind()
     Rewind to the first element
void snmp_set_oid_numeric_print(int $oid_format)
     Return all objects including their respective object id within the specified one
void SoapClient::__setCookie(string $name [, string $value = ``])
     The __setCookie purpose
void SoapServer::addFunction(mixed $functions)
     Adds one or more functions to handle SOAP requests
void SoapServer::addSoapHeader(SoapHeader $object)
     Add a SOAP header to the response
void SoapServer::fault(string $code, string $string [, string $actor = `` [, string $details = `` [, string $name = ``]]])
     Issue SoapServer fault indicating an error
void SoapServer::handle([string $soap_request = ``])
     Handles a SOAP request
void SoapServer::setClass(string $class_name [, string $args = ``])
     Sets the class which handles SOAP requests
void SoapServer::setObject(string $object)
     Sets the object which will be used to handle SOAP requests
void SoapServer::setPersistence(int $mode)
     Sets SoapServer persistence mode
void socket_clear_error([resource $socket = ``])
     Clears the error on the socket or the last error code
void socket_close(resource $socket)
     Closes a socket resource
void SolrClient::addDocuments(array $docs [, bool $allowDups = false [, int $commitWithin = ``]])
     Adds a collection of SolrInputDocument instances to the index
void SolrClient::request(string $raw_request)
     Sends a raw update request
void SolrClient::setResponseWriter(string $responseWriter)
     Sets the response writer used to prepare the response from Solr
void SolrClient::threads()
     Checks the threads status
void SolrClient::__destruct()
     Destructor for SolrClient
void SolrDocument::next()
     Moves the internal pointer to the next field
void SolrDocument::offsetSet(string $fieldName, string $fieldValue)
     Adds a field to the document
void SolrDocument::offsetUnset(string $fieldName)
     Removes a field
void SolrDocument::rewind()
     Resets the internal pointer to the beginning
void SolrDocument::unserialize(string $serialized)
     Custom serialization of SolrDocument objects
void SolrDocument::__clone()
     Creates a copy of a SolrDocument object
void SolrDocument::__destruct()
     Destructor
void SolrDocumentField::__destruct()
     Destructor
void SolrGenericResponse::__destruct()
     Destructor
void SolrInputDocument::__clone()
     Creates a copy of a SolrDocument
void SolrInputDocument::__destruct()
     Destructor
void SolrModifiableParams::__destruct()
     Destructor
void SolrObject::offsetSet(string $property_name, string $property_value)
     Sets the value for a property
void SolrObject::offsetUnset(string $property_name)
     Sets the value for the property
void SolrObject::__destruct()
     Destructor
void SolrParams::set(string $name, string $value)
     An alias of SolrParams::setParam
void SolrParams::unserialize(string $serialized)
     Used for custom serialization
void SolrPingResponse::__destruct()
     Destructor
void SolrQuery::__destruct()
     Destructor
void SolrQueryResponse::__destruct()
     Destructor
void SolrUpdateResponse::__destruct()
     Destructor
void SphinxClient::resetFilters()
     Clear all filters
void SphinxClient::resetGroupBy()
     Clear all group-by settings
void SplDoublyLinkedList::next()
     Move to next entry
void SplDoublyLinkedList::offsetSet(mixed $index, mixed $newval)
     Sets the value at the specified $index to $newval
void SplDoublyLinkedList::offsetUnset(mixed $index)
     Unsets the value at the specified $index
void SplDoublyLinkedList::prev()
     Move to previous entry
void SplDoublyLinkedList::push(mixed $value)
     Pushes an element at the end of the doubly linked list
void SplDoublyLinkedList::rewind()
     Rewind iterator back to the start
void SplDoublyLinkedList::setIteratorMode(int $mode)
     Sets the mode of iteration
void SplDoublyLinkedList::unshift(mixed $value)
     Prepends the doubly linked list with an element
void SplFileInfo::setFileClass([string $class_name = ``])
     Sets the class name used with SplFileInfo::openFile
void SplFileInfo::setInfoClass([string $class_name = ``])
     Sets the class used with getFileInfo and getPathInfo
void SplFileInfo::__toString()
     Returns the path to the file as a string
void SplFileObject::getChildren()
     No purpose
void SplFileObject::next()
     Read next line
void SplFileObject::rewind()
     Rewind the file to the first line
void SplFileObject::seek(int $line_pos)
     Seek to specified line
void SplFileObject::setCsvControl([string $delimiter = \",\" [, string $enclosure = \"\\"\" [, string $escape = \"\\\"]]])
     Set the delimiter and enclosure character for CSV
void SplFileObject::setFlags(int $flags)
     Sets flags for the SplFileObject
void SplFileObject::setMaxLineLen(int $max_len)
     Set maximum line length
void SplFixedArray::next()
     Move to next entry
void SplFixedArray::offsetSet(int $index, mixed $newval)
     Sets a new value at a specified index
void SplFixedArray::offsetUnset(int $index)
     Unsets the value at the specified $index
void SplFixedArray::rewind()
     Rewind iterator back to the start
void SplHeap::insert(mixed $value)
     Inserts an element in the heap by sifting it up.
void SplHeap::next()
     Move to the next node
void SplHeap::recoverFromCorruption()
     Recover from the corrupted state and allow further actions on the heap.
void SplHeap::rewind()
     Rewind iterator back to the start (no-op)
void SplMaxHeap::compare(mixed $value1, mixed $value2)
     Compare elements in order to place them correctly in the heap while sifting up.
void SplMinHeap::compare(mixed $value1, mixed $value2)
     Compare elements in order to place them correctly in the heap while sifting up.
void SplObjectStorage::addAll(SplObjectStorage $storage)
     Adds all objects from another storage
void SplObjectStorage::removeAll(SplObjectStorage $storage)
     Removes objects contained in another storage from the current storage
void SplObjectStorage::removeAllExcept(SplObjectStorage $storage)
     Removes all objects except for those contained in another storage from the current storage
void SplObjectStorage::rewind()
     Rewind the iterator to the first storage element
void SplObjectStorage::setInfo(mixed $data)
     Sets the data associated with the current iterator entry
void SplObjectStorage::unserialize(string $serialized)
     Unserializes a storage from its string representation
void SplObserver::update(SplSubject $subject)
     Receive update from subject
void SplPriorityQueue::insert(mixed $value, mixed $priority)
     Inserts an element in the queue by sifting it up.
void SplPriorityQueue::next()
     Move to the next node
void SplPriorityQueue::recoverFromCorruption()
     Recover from the corrupted state and allow further actions on the queue.
void SplPriorityQueue::rewind()
     Rewind iterator back to the start (no-op)
void SplPriorityQueue::setExtractFlags(int $flags)
     Sets the mode of extraction
void SplQueue::enqueue(mixed $value)
     Adds an element to the queue.
void SplQueue::setIteratorMode(int $mode)
     Sets the mode of iteration
void SplStack::setIteratorMode(int $mode)
     Sets the mode of iteration
void SplSubject::attach(SplObserver $observer)
     Attach an SplObserver
void SplSubject::detach(SplObserver $observer)
     Detach an observer
void SplSubject::notify()
     Notify an observer
void spl_autoload(string $class_name [, string $file_extensions = spl_autoload_extensions()])
     Default implementation for __autoload()
void spl_autoload_call(string $class_name)
     Try all registered __autoload() function to load the requested class
void SQLite3::open(string $filename [, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE [, string $encryption_key = ``]])
     Opens an SQLite database
void SQLiteDatabase::busyTimeout(resource $dbhandle, int $milliseconds)
     Set busy timeout duration, or disable busy handlers
void SQLiteDatabase::createAggregate(resource $dbhandle, string $function_name, callback $step_func, callback $finalize_func [, int $num_args = -1])
     Register an aggregating UDF for use in SQL statements
void SQLiteDatabase::createFunction(resource $dbhandle, string $function_name, callback $callback [, int $num_args = -1])
     Registers a \"regular\" User Defined Function for use in SQL statements
void sqlite_busy_timeout(resource $dbhandle, int $milliseconds)
     Set busy timeout duration, or disable busy handlers
void sqlite_close(resource $dbhandle)
     Closes an open SQLite database
void sqlite_create_aggregate(resource $dbhandle, string $function_name, callback $step_func, callback $finalize_func [, int $num_args = -1])
     Register an aggregating UDF for use in SQL statements
void sqlite_create_function(resource $dbhandle, string $function_name, callback $callback [, int $num_args = -1])
     Registers a \"regular\" User Defined Function for use in SQL statements
void srand([int $seed = ``])
     Seed the random number generator
void stats_rand_setall(int $iseed1, int $iseed2)
     Not documented
void Stomp::setReadTimeout(integer $seconds [, integer $microseconds = ``, resource $link])
     Sets read timeout
void stomp_set_read_timeout(integer $seconds [, integer $microseconds = ``, resource $link])
     Sets read timeout
void streamWrapper::stream_close()
     Close an resource
void stream_bucket_append(resource $brigade, resource $bucket)
     Append bucket to brigade
void stream_bucket_prepend(resource $brigade, resource $bucket)
     Prepend bucket to brigade
void svn_auth_set_parameter(string $key, string $value)
     Sets an authentication parameter
void SWFButton::addAction(SWFAction $action, int $flags)
     Adds an action
void SWFButton::addShape(SWFShape $shape, int $flags)
     Adds a shape to a button
void SWFButton::setAction(SWFAction $action)
     Sets the action
void SWFButton::setDown(SWFShape $shape)
     Alias for addShape(shape, SWFBUTTON_DOWN)
void SWFButton::setHit(SWFShape $shape)
     Alias for addShape(shape, SWFBUTTON_HIT)
void SWFButton::setMenu(int $flag)
     enable track as menu button behaviour
void SWFButton::setOver(SWFShape $shape)
     Alias for addShape(shape, SWFBUTTON_OVER)
void SWFButton::setUp(SWFShape $shape)
     Alias for addShape(shape, SWFBUTTON_UP)
void SWFDisplayItem::addAction(SWFAction $action, int $flags)
     Adds this SWFAction to the given SWFSprite instance
void SWFDisplayItem::addColor(int $red, int $green, int $blue [, int $a = ``])
     Adds the given color to this item`s color transform
void SWFDisplayItem::endMask()
     Another way of defining a MASK layer
void SWFDisplayItem::move(float $dx, float $dy)
     Moves object in relative coordinates
void SWFDisplayItem::moveTo(float $x, float $y)
     Moves object in global coordinates
void SWFDisplayItem::multColor(float $red, float $green, float $blue [, float $a = ``])
     Multiplies the item`s color transform
void SWFDisplayItem::remove()
     Removes the object from the movie
void SWFDisplayItem::rotate(float $angle)
     Rotates in relative coordinates
void SWFDisplayItem::rotateTo(float $angle)
     Rotates the object in global coordinates
void SWFDisplayItem::scale(float $dx, float $dy)
     Scales the object in relative coordinates
void SWFDisplayItem::scaleTo(float $x [, float $y = ``])
     Scales the object in global coordinates
void SWFDisplayItem::setDepth(int $depth)
     Sets z-order
void SWFDisplayItem::setMaskLevel(int $level)
     Defines a MASK layer at level
void SWFDisplayItem::setMatrix(float $a, float $b, float $c, float $d, float $x, float $y)
     Sets the item`s transform matrix
void SWFDisplayItem::setName(string $name)
     Sets the object`s name
void SWFDisplayItem::setRatio(float $ratio)
     Sets the object`s ratio
void SWFDisplayItem::skewX(float $ddegrees)
     Sets the X-skew
void SWFDisplayItem::skewXTo(float $degrees)
     Sets the X-skew
void SWFDisplayItem::skewY(float $ddegrees)
     Sets the Y-skew
void SWFDisplayItem::skewYTo(float $degrees)
     Sets the Y-skew
void SWFFill::moveTo(float $x, float $y)
     Moves fill origin
void SWFFill::rotateTo(float $angle)
     Sets fill`s rotation
void SWFFill::scaleTo(float $x [, float $y = ``])
     Sets fill`s scale
void SWFFill::skewXTo(float $x)
     Sets fill x-skew
void SWFFill::skewYTo(float $y)
     Sets fill y-skew
void SWFFontChar::addChars(string $char)
     Adds characters to a font for exporting font
void SWFFontChar::addUTF8Chars(string $char)
     Adds characters to a font for exporting font
void SWFGradient::addEntry(float $ratio, int $red, int $green, int $blue [, int $alpha = 255])
     Adds an entry to the gradient list
void SWFMovie::addExport(SWFCharacter $char, string $name)
     
void SWFMovie::labelFrame(string $label)
     Labels a frame
void SWFMovie::nextFrame()
     Moves to the next frame of the animation
void SWFMovie::remove(object $instance)
     Removes the object instance from the display list
void SWFMovie::setbackground(int $red, int $green, int $blue)
     Sets the background color
void SWFMovie::setDimension(float $width, float $height)
     Sets the movie`s width and height
void SWFMovie::setFrames(int $number)
     Sets the total number of frames in the animation
void SWFMovie::setRate(float $rate)
     Sets the animation`s frame rate
void SWFMovie::stopSound(SWFSound $sound)
     
void SWFMovie::writeExports()
     
void SWFShape::drawArc(float $r, float $startAngle, float $endAngle)
     Draws an arc of radius r centered at the current location, from angle startAngle to angle endAngle measured clockwise from 12 o`clock
void SWFShape::drawCircle(float $r)
     Draws a circle of radius r centered at the current location, in a counter-clockwise fashion
void SWFShape::drawGlyph(SWFFont $font, string $character [, int $size = ``])
     Draws the first character in the given string into the shape using the glyph definition from the given font
void SWFShape::drawLine(float $dx, float $dy)
     Draws a line (relative)
void SWFShape::drawLineTo(float $x, float $y)
     Draws a line
void SWFShape::movePen(float $dx, float $dy)
     Moves the shape`s pen (relative)
void SWFShape::movePenTo(float $x, float $y)
     Moves the shape`s pen
void SWFShape::setLeftFill(SWFGradient $fill, int $red, int $green, int $blue [, int $a = ``])
     Sets left rasterizing color
void SWFShape::setLine(SWFShape $shape, int $width, int $red, int $green, int $blue [, int $a = ``])
     Sets the shape`s line style
void SWFShape::setRightFill(SWFGradient $fill, int $red, int $green, int $blue [, int $a = ``])
     Sets right rasterizing color
void SWFSoundInstance::loopCount(int $point)
     
void SWFSoundInstance::loopInPoint(int $point)
     
void SWFSoundInstance::loopOutPoint(int $point)
     
void SWFSoundInstance::noMultiple()
     
void SWFSprite::add(object $object)
     Adds an object to a sprite
void SWFSprite::labelFrame(string $label)
     Labels frame
void SWFSprite::nextFrame()
     Moves to the next frame of the animation
void SWFSprite::remove(object $object)
     Removes an object to a sprite
void SWFSprite::setFrames(int $number)
     Sets the total number of frames in the animation
void SWFSprite::stopSound(SWFSound $sount)
     
void SWFText::addString(string $string)
     Draws a string
void SWFText::addUTF8String(string $text)
     Writes the given text into this SWFText object at the current pen position, using the current font, height, spacing, and color
void SWFText::moveTo(float $x, float $y)
     Moves the pen
void SWFText::setColor(int $red, int $green, int $blue [, int $a = 255])
     Sets the current text color
void SWFText::setFont(SWFFont $font)
     Sets the current font
void SWFText::setHeight(float $height)
     Sets the current font height
void SWFText::setSpacing(float $spacing)
     Sets the current font spacing
void SWFText::__construct()
     Creates a new SWFText object
void SWFTextField::addChars(string $chars)
     adds characters to a font that will be available within a textfield
void SWFTextField::addString(string $string)
     Concatenates the given string to the text field
void SWFTextField::align(int $alignement)
     Sets the text field alignment
void SWFTextField::setBounds(float $width, float $height)
     Sets the text field width and height
void SWFTextField::setColor(int $red, int $green, int $blue [, int $a = 255])
     Sets the color of the text field
void SWFTextField::setFont(SWFFont $font)
     Sets the text field font
void SWFTextField::setHeight(float $height)
     Sets the font height of this text field font
void SWFTextField::setIndentation(float $width)
     Sets the indentation of the first line
void SWFTextField::setLeftMargin(float $width)
     Sets the left margin width of the text field
void SWFTextField::setLineSpacing(float $height)
     Sets the line spacing of the text field
void SWFTextField::setMargins(float $left, float $right)
     Sets the margins width of the text field
void SWFTextField::setName(string $name)
     Sets the variable name
void SWFTextField::setPadding(float $padding)
     Sets the padding of this textfield
void SWFTextField::setRightMargin(float $width)
     Sets the right margin width of the text field
void SWFVideoStream::setDimension(int $x, int $y)
     Sets video dimension
void swf_actiongeturl(string $url, string $target)
     Get a URL from a Shockwave Flash movie
void swf_actiongotoframe(int $framenumber)
     Play a frame and then stop
void swf_actiongotolabel(string $label)
     Display a frame with the specified label
void swf_actionnextframe()
     Go forward one frame
void swf_actionplay()
     Start playing the flash movie from the current frame
void swf_actionprevframe()
     Go backwards one frame
void swf_actionsettarget(string $target)
     Set the context for actions
void swf_actionstop()
     Stop playing the flash movie at the current frame
void swf_actiontogglequality()
     Toggle between low and high quality
void swf_actionwaitforframe(int $framenumber, int $skipcount)
     Skip actions if a frame has not been loaded
void swf_addbuttonrecord(int $states, int $shapeid, int $depth)
     Controls location, appearance and active area of the current button
void swf_addcolor(float $r, float $g, float $b, float $a)
     Set the global add color to the rgba value specified
void swf_closefile([int $return_file = ``])
     Close the current Shockwave Flash file
void swf_definebitmap(int $objid, string $image_name)
     Define a bitmap
void swf_definefont(int $fontid, string $fontname)
     Defines a font
void swf_defineline(int $objid, float $x1, float $y1, float $x2, float $y2, float $width)
     Define a line
void swf_definepoly(int $objid, array $coords, int $npoints, float $width)
     Define a polygon
void swf_definerect(int $objid, float $x1, float $y1, float $x2, float $y2, float $width)
     Define a rectangle
void swf_definetext(int $objid, string $str, int $docenter)
     Define a text string
void swf_endbutton()
     End the definition of the current button
void swf_enddoaction()
     End the current action
void swf_endshape()
     Completes the definition of the current shape
void swf_endsymbol()
     End the definition of a symbol
void swf_fontsize(float $size)
     Change the font size
void swf_fontslant(float $slant)
     Set the font slant
void swf_fonttracking(float $tracking)
     Set the current font tracking
void swf_labelframe(string $name)
     Label the current frame
void swf_lookat(float $view_x, float $view_y, float $view_z, float $reference_x, float $reference_y, float $reference_z, float $twist)
     Define a viewing transformation
void swf_modifyobject(int $depth, int $how)
     Modify an object
void swf_mulcolor(float $r, float $g, float $b, float $a)
     Sets the global multiply color to the rgba value specified
void swf_oncondition(int $transition)
     Describe a transition used to trigger an action list
void swf_openfile(string $filename, float $width, float $height, float $framerate, float $r, float $g, float $b)
     Open a new Shockwave Flash file
void swf_ortho(float $xmin, float $xmax, float $ymin, float $ymax, float $zmin, float $zmax)
     Defines an orthographic mapping of user coordinates onto the current viewport
void swf_ortho2(float $xmin, float $xmax, float $ymin, float $ymax)
     Defines 2D orthographic mapping of user coordinates onto the current viewport
void swf_perspective(float $fovy, float $aspect, float $near, float $far)
     Define a perspective projection transformation
void swf_placeobject(int $objid, int $depth)
     Place an object onto the screen
void swf_polarview(float $dist, float $azimuth, float $incidence, float $twist)
     Define the viewer`s position with polar coordinates
void swf_popmatrix()
     Restore a previous transformation matrix
void swf_posround(int $round)
     Enables or Disables the rounding of the translation when objects are placed or moved
void swf_pushmatrix()
     Push the current transformation matrix back onto the stack
void swf_removeobject(int $depth)
     Remove an object
void swf_rotate(float $angle, string $axis)
     Rotate the current transformation
void swf_scale(float $x, float $y, float $z)
     Scale the current transformation
void swf_setfont(int $fontid)
     Change the current font
void swf_setframe(int $framenumber)
     Switch to a specified frame
void swf_shapearc(float $x, float $y, float $r, float $ang1, float $ang2)
     Draw a circular arc
void swf_shapecurveto(float $x1, float $y1, float $x2, float $y2)
     Draw a quadratic bezier curve between two points
void swf_shapecurveto3(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
     Draw a cubic bezier curve
void swf_shapefillbitmapclip(int $bitmapid)
     Set current fill mode to clipped bitmap
void swf_shapefillbitmaptile(int $bitmapid)
     Set current fill mode to tiled bitmap
void swf_shapefilloff()
     Turns off filling
void swf_shapefillsolid(float $r, float $g, float $b, float $a)
     Set the current fill style to the specified color
void swf_shapelinesolid(float $r, float $g, float $b, float $a, float $width)
     Set the current line style
void swf_shapelineto(float $x, float $y)
     Draw a line
void swf_shapemoveto(float $x, float $y)
     Move the current position
void swf_showframe()
     Display the current frame
void swf_startbutton(int $objid, int $type)
     Start the definition of a button
void swf_startdoaction()
     Start a description of an action list for the current frame
void swf_startshape(int $objid)
     Start a complex shape
void swf_startsymbol(int $objid)
     Define a symbol
void swf_translate(float $x, float $y, float $z)
     Translate the current transformations
void swf_viewport(float $xmin, float $xmax, float $ymin, float $ymax)
     Select an area for future drawing
void Swish::__construct(string $index_names)
     Construct a Swish object
void SwishSearch::resetLimit()
     Reset the search limits
void SwishSearch::setLimit(string $property, string $low, string $high)
     Set the search limits
void SwishSearch::setPhraseDelimiter(string $delimiter)
     Set the phrase delimiter
void SwishSearch::setSort(string $sort)
     Set the sort order
void SwishSearch::setStructure(int $structure)
     Set the structure flag in the search object
void sybase_deadlock_retry_count(int $retry_count)
     Sets the deadlock retry count
void sybase_min_client_severity(int $severity)
     Sets minimum client severity
void sybase_min_error_severity(int $severity)
     Sets minimum error severity
void sybase_min_message_severity(int $severity)
     Sets minimum message severity
void sybase_min_server_severity(int $severity)
     Sets minimum server severity
void tidy_load_config(string $filename, string $encoding)
     Load an ASCII Tidy configuration file with the specified encoding
void TokyoTyrantTable::add(string $key, mixed $increment [, string $type = ``])
     Adds a record
void TokyoTyrantTable::get(mixed $keys)
     Get a row
void TokyoTyrantTable::out(mixed $keys)
     Remove records
void TokyoTyrantTable::putCat(string $key, array $columns)
     Concatenates to a row
void TokyoTyrantTable::putKeep(string $key, array $columns)
     Put a new record
void TokyoTyrantTable::putNr(mixed $keys [, string $value = ``])
     Puts value
void TokyoTyrantTable::putShl(string $key, string $value, int $width)
     Concatenates to a record
void Transliterator::transliterate(string $subject [, string $start = `` [, string $end = ``]])
     Transliterate a string
void transliterator_transliterate(string $subject [, string $start = `` [, string $end = ``]])
     Transliterate a string
void unregister_tick_function(string $function_name)
     De-register a function for execution on each tick
void unset([mixed $var = `` [, mixed $... = ``]])
     Unset a given variable
void usleep(int $micro_seconds)
     Delay execution in microseconds
void variant_set(variant $variant, mixed $value)
     Assigns a new value for a variant object
void variant_set_type(variant $variant, int $type)
     Convert a variant into another type \"in-place\"
void w32api_set_call_method(int $method)
     Sets the calling method used
void XSLTProcessor::importStylesheet(object $stylesheet)
     Import stylesheet
void XSLTProcessor::registerPHPFunctions([mixed $restrict = ``])
     Enables the ability to use PHP functions as XSLT functions
void xslt_free(resource $xh)
     Free XSLT processor
void xslt_set_base(resource $xh, string $uri)
     Set the base URI for all XSLT transformations
void xslt_set_encoding(resource $xh, string $encoding)
     Set the encoding for the parsing of XML documents
void xslt_set_error_handler(resource $xh, mixed $handler)
     Set an error handler for a XSLT processor
void xslt_set_log(resource $xh [, mixed $log = ``])
     Set the log file to write log messages to
void xslt_set_sax_handler(resource $xh, array $handlers)
     Set SAX handlers for a XSLT processor
void xslt_set_sax_handlers(resource $processor, array $handlers)
     Set the SAX handlers to be called when the XML document gets processed
void xslt_set_scheme_handler(resource $xh, array $handlers)
     Set Scheme handlers for a XSLT processor
void xslt_set_scheme_handlers(resource $xh, array $handlers)
     Set the scheme handlers for the XSLT processor
void yaz_ccl_conf(resource $id, array $config)
     Configure CCL parser
void yaz_es(resource $id, string $type, array $args)
     Prepares for an Extended Service Request
void yaz_itemorder(resource $id, array $args)
     Prepares for Z39.50 Item Order with an ILL-Request package
void yaz_range(resource $id, int $start, int $number)
     Specifies a range of records to retrieve
void yaz_scan(resource $id, string $type, string $startterm [, array $flags = ``])
     Prepares for a scan
void yaz_schema(resource $id, string $schema)
     Specifies schema for retrieval
void yaz_set_option(resource $id, string $name, string $value, array $options)
     Sets one or more options for connection
void yaz_sort(resource $id, string $criteria)
     Sets sorting criteria
void yaz_syntax(resource $id, string $syntax)
     Specifies the preferred record syntax for retrieval
void yp_all(string $domain, string $map, string $callback)
     Traverse the map and call a function on each entry
void zip_close(resource $zip)
     Close a ZIP file archive
void __halt_compiler()
     Halts the compiler execution
XPathContext xpath_new_context(domdocument $dom_document)
     Creates new xpath context
XPathContext xptr_new_context()
     Create new XPath Context
XPathContext xpath_eval()
     Evaluates the XPath Location Path in the given string
XPathContext xpath_eval_expression()
     Evaluates the XPath Location Path in the given string
XPathContext xptr_eval()
     Evaluate the XPtr Location Path in the given string
 XSLTProcessor::__construct()
     Creates a new XSLTProcessor object';

$delimeter_1 = '*__-__*';
$delimeter_2 = '*--_--*';



$text = str_replace('$','',$text);
$text = str_replace('
    ','"description":"',$text);
$text = str_replace('
','
{"type":"~',$text);
$text = str_replace('(','","parameters":"',$text);
$text = str_replace('[','',$text);
$text = str_replace(')','",
',$text);
$text = str_replace(',
',',',$text);
$text = str_replace('
','
"},
',$text);
$text = str_replace('
"},','"},',$text);
$all_pieces = explode(',
',$text.'"}');
array_shift($all_pieces);
$array = array();
foreach($all_pieces as $key => $value){
    $object = json_decode($value);
    $loop_object = (object) null;
    if(strpos($object->description,'Alias of') === false){ continue;}
   $pieces = explode(' ',$object->type);
    if(strpos($object->type,'::') !== false){
        if( $pieces[0] == '~' && strpos($object->type,'__construct') !== false){
            $more_pieces = explode ('::', $pieces[1]);
            $loop_object->name = $pieces[1];
            $loop_object->type = $more_pieces[0];
        }else{
            $loop_object->name = $pieces[1];
            $loop_object->type = str_replace('~','',$pieces[0]);
        }
    }else{
        if( $pieces[0] == '~'){
            $loop_object->name = $pieces[1];
            $loop_object->type = 'stlfix';
        }else{
            $loop_object->name = $pieces[1];
            $loop_object->type = str_replace('~','',$pieces[0]);
        }
    }
    $loop_object->parameters = $object->parameters;
    $loop_object->description = trim($object->description);
    $array[] = $loop_object;
}

foreach($array as $key => $object){
    $loop_object = (object) null;
    $parameters = array();
    str_replace(']','',$object->parameters);
    if(strpos($object->parameters,',') !== false){
        $total = substr_count($object->parameters,',');
        $parameters = explode(',',$object->parameters);
    }elseif($object->parameters == ''){
        $total = 0;
    }else{
        $total = 1;
        $parameters[] = $object->parameters;
    }
    $optional = substr_count($object->parameters,']');
    if($total != 0){
        $required = $total - $optional;
    }
    foreach($parameters as $key2 => $value){
        $loop_object_2 = (object) null;
        $pieces = explode(' ',trim($value));
        $loop_object_2->type = $pieces[0];
        $loop_object_2->name = $pieces[1];
        $loop_object_2->required = true;
        if(isset($pieces[3])){
            $loop_object_2->default_value = $pieces[3];
        }else{
            $loop_object_2->default_value = null;
        }
        $parameters[$key2] = $loop_object_2;
    }
    if($optional > 0){
        array_reverse($parameters);
        foreach($parameters as $key2 => $object2){
            if($optional == 0){continue;}
            $parameters[$key2]->required = false;
            $optional--;
        }
        array_reverse($parameters);
    }
    
    $object->parameters = $parameters;
    $array[$key] = $object;
}
unset($text,$all_pieces,$parameters);
$all = array();
foreach($array as $key => $object){
    $sequode = (object) null;
    $sequode->name = $object->name;
    $sequode->detail = (object) null;
    $sequode->detail->description = $object->description;
    $sequode->printable_name = $object->name;
    $sequode->input_object = (object) null;
    foreach($object->parameters as $key_2 => $object_2){
        if($object_2->name != ''){
            if($object_2->name == '...'){
                $object_2->name = $object_2->type.'_N';
            }
            $member = $object_2->name;
            $sequode->input_object->$member = $object_2->default_value;
        }
    }
    $sequode->property_object = (object) null;
    $sequode->property_object->Run_Process = 'false';
    
    $sequode->output_object = (object) null;

    $sequode->output_object->Success = 'false';
    if($object->type != 'void' && $object->type != ''){
        $member = $object->type;
        $sequode->output_object->$member = 'null';
    }
    
    $sequode->input_object_detail = (object) null;
    foreach($object->parameters as $key_2 => $object_2){
        if($object_2->name != ''){
            $member = $object_2->name;
            $sequode->input_object_detail->$member = (object) null;
            $sequode->input_object_detail->$member->type = $object_2->type;
            $sequode->input_object_detail->$member->display_name = $object_2->name;
            $sequode->input_object_detail->$member->required = $object_2->required;
            $sequode->input_object_detail->$member->default_value = $object_2->default_value;
            $sequode->input_object_detail->$member->default_component = 'str';
        }
    }
    $sequode->property_object_detail = (object) null;
    $member = 'Run_Process';
    $sequode->property_object_detail->$member = (object) null;
    $sequode->property_object_detail->$member->type = 'bool';
    $sequode->property_object_detail->$member->display_name = 'Run Process';
    $sequode->property_object_detail->$member->required = 'true';
    $sequode->property_object_detail->$member->default_value = 'false';
    $sequode->property_object_detail->$member->default_component = 'checkboxSwitch';
    $sequode->output_object_detail = (object) null;
    $member = 'Success';
    $sequode->output_object_detail->$member = (object) null;
    $sequode->output_object_detail->$member->type = 'bool';
    $sequode->output_object_detail->$member->display_name = 'Success';
    $sequode->output_object_detail->$member->default_value = 'false';
    if($object->type != 'void' && $object->type != ''){
        $member = $object->type;
        $sequode->output_object_detail->$member = (object) null;
        $sequode->output_object_detail->$member->type = $object->type;
        $sequode->output_object_detail->$member->display_name = $object->type;
        $sequode->output_object_detail->$member->default_value = null;
    }
echo "
UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".trim(str_replace('Alias of ','',$sequode->detail->description))."') as t2
) WHERE `name`= '".trim($sequode->name)."'
 LIMIT 1; 
    
";
unset($sequode);
}

    