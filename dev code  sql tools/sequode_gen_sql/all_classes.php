<?php 
$text = 'APCIterator
AppendIterator
ArrayIterator
ArrayObject
CachingIterator
Cairo
CairoContext
CairoFontFace
CairoFontOptions
CairoFormat
CairoGradientPattern
CairoImageSurface
CairoLinearGradient
CairoMatrix
CairoPattern
CairoPdfSurface
CairoPsSurface
CairoRadialGradient
CairoScaledFont
CairoSolidPattern
CairoSurface
CairoSurfacePattern
CairoSvgSurface
chdb
Collator
Countable
DateInterval
DatePeriod
DateTime
DateTimeZone
DirectoryIterator
DOMAttr
DomAttribute
DOMCharacterData
DOMComment
DomDocument
DOMDocument
DOMDocumentFragment
DomDocumentType
DOMElement
DomElement
DOMEntityReference
DOMImplementation
DOMNamedNodeMap
DomNode
DOMNode
DOMNodelist
DomProcessingInstruction
DOMProcessingInstruction
DOMText
DOMXPath
DomXsltStylesheet
EmptyIterator
FilesystemIterator
FilterIterator
finfo
GearmanClient
GearmanJob
GearmanTask
GearmanWorker
GlobIterator
Gmagick
GmagickDraw
GmagickPixel
HaruAnnotation
HaruDestination
HaruDoc
HaruEncoder
HaruFont
HaruImage
HaruOutline
HaruPage
HttpDeflateStream
HttpInflateStream
HttpMessage
HttpQueryString
HttpRequest
HttpRequestPool
HttpResponse
hw_api
hw_api_attribute
hw_api_content
hw_api_error
hw_api_object
hw_api_reason
Imagick
ImagickDraw
ImagickPixel
ImagickPixelIterator
InfiniteIterator
IntlDateFormatter
IteratorIterator
Judy
KTaglib_ID3v2_AttachedPictureFrame
KTaglib_ID3v2_Frame
KTaglib_ID3v2_Tag
KTaglib_MPEG_AudioProperties
KTaglib_MPEG_File
KTaglib_Tag
LimitIterator
Locale
maxdb
maxdb_result
maxdb_stmt
Memcache
Memcached
MessageFormatter
Mongo
MongoBinData
MongoCode
MongoCollection
MongoCursor
MongoDate
MongoDB
MongoDBRef
MongoGridFS
MongoGridFSCursor
MongoGridFSFile
MongoGridfsFile
MongoId
MongoInt32
MongoInt64
MongoRegex
MongoTimestamp
MultipleIterator
mysqli
mysqli_driver
mysqli_result
mysqli_stmt
mysqli_warning
NoRewindIterator
Normalizer
NumberFormatter
OAuth
OAuthProvider
OCI-Collection
OCI-Lob
OuterIterator
ParentIterator
PDO
PDOStatement
Phar
PharData
PharFileInfo
RarArchive
RarEntry
RarException
RecursiveArrayIterator
RecursiveCachingIterator
RecursiveDirectoryIterator
RecursiveFilterIterator
RecursiveIterator
RecursiveIteratorIterator
RecursiveRegexIterator
RecursiveTreeIterator
Reflection
ReflectionClass
ReflectionExtension
ReflectionFunction
ReflectionFunctionAbstract
ReflectionMethod
ReflectionObject
ReflectionParameter
ReflectionProperty
Reflector
RegexIterator
ResourceBundle
RRDCreator
RRDGraph
RRDUpdater
SAMConnection
SAMMessage
SCA
SCA_LocalProxy
SCA_SoapProxy
SDO_DAS_ChangeSummary
SDO_DAS_DataFactory
SDO_DAS_DataObject
SDO_DAS_Relational
SDO_DAS_Setting
SDO_DAS_XML
SDO_DAS_XML_Document
SDO_DataFactory
SDO_DataObject
SDO_Exception
SDO_List
SDO_Model_Property
SDO_Model_ReflectionDataObject
SDO_Model_Type
SDO_Sequence
SeekableIterator
SimpleXMLElement
SimpleXMLIterator
SoapClient
SoapFault
SoapHeader
SoapParam
SoapServer
SoapVar
SolrClient
SolrClientException
SolrDocument
SolrDocumentField
SolrException
SolrGenericResponse
SolrIllegalArgumentException
SolrIllegalOperationException
SolrInputDocument
SolrModifiableParams
SolrObject
SolrParams
SolrPingResponse
SolrQuery
SolrQueryResponse
SolrResponse
SolrUpdateResponse
SolrUtils
SphinxClient
SplBool
SplDoublyLinkedList
SplEnum
SplFileInfo
SplFileObject
SplFixedArray
SplFloat
SplHeap
SplInt
SplMaxHeap
SplMinHeap
SplObjectStorage
SplObserver
SplPriorityQueue
SplQueue
SplStack
SplString
SplSubject
SplTempFileObject
SQLite3
SQLite3Result
SQLite3Stmt
SQLiteDatabase
SQLiteResult
SQLiteUnbuffered
Stomp
StompException
StompFrame
streamWrapper
SWFAction
SWFBitmap
SWFButton
SWFDisplayItem
SWFFill
SWFFont
SWFFontChar
SWFGradient
SWFMorph
SWFMovie
SWFPrebuiltClip
SWFShape
SWFSoundInstance
SWFSprite
SWFText
SWFTextField
SWFVideoStream
Swish
SwishResult
SwishResults
SwishSearch
tidy
tidyNode
TokyoTyrant
TokyoTyrantQuery
TokyoTyrantTable
Transliterator
V8Js
V8JsException
XMLReader
XMLWriter
XSLTProcessor
ZipArchive';
$rows = explode('
',$text);
foreach($rows as $key => $value ){
    updateFromConstructStatement($value);
}
function updateFromConstructStatement($name){
    echo "
UPDATE sequodes_dev SET detail=(
  select r from (  
  SELECT detail as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET input_object=(
  select r from (  
  SELECT input_object as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET property_object=(
  select r from (  
  SELECT property_object as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET output_object=(
  select r from (  
  SELECT output_object as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET input_object_detail=(
  select r from (  
  SELECT input_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET property_object_detail=(
  select r from (  
  SELECT property_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

UPDATE sequodes_dev SET output_object_detail=(
  select r from (  
  SELECT output_object_detail as r FROM sequodes_dev t1 WHERE `name` = '".$name."::__construct') as t2
) WHERE `name`= '".$name."' LIMIT 1;

";
}
