<?php
/* $Id$ */

/**
 * Translated by Stanislav Yordanov <stan at stud.ru.acad.bg>
 * Based on translation made by Georgi Georgiev <chutz at chubaka.homeip.net>
 */

$charset = 'koi8-r';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('�����', '��', '��', '��', '��', '��', '��');

$day_of_week = array('���', '���', '��', '��', '���', '���', '���');
$month = array('������', '��������', '����', '�����', '���', '���', '���', '������', '���������', '�������', '�������', '��������');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y � %H:%M';

$timespanfmt = '%s ����, %s ����, %s ������ � %s �������';

$strAPrimaryKey = '�e�e ������� �������� ���� ��� ';
$strAbortedClients = '����������';
$strAbsolutePathToDocSqlDir = '���� �������� ���������� ��� �� ��� ������� �� docSQL ������������';
$strAccessDenied = '������� ������';
$strAction = '��������';
$strAddDeleteColumn = '������/������ ������ �� ��������';
$strAddDeleteRow = '������/������ ��� �� ��������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '�������� �� ���� ����������';
$strAddPrivMessage = '��� ��������� ���� ����������.';
$strAddPrivilegesOnDb = '������ ���������� ��� �������� ���� �����'; 
$strAddPrivilegesOnTbl = '������ ���������� ��� �������� �������';
$strAddSearchConditions = '������ ������� �� ������� (���� �� "where" �������):';
$strAddToIndex = ' &nbsp;%s&nbsp;������(�) ����(���)�������� ��� ������� ';
$strAddUser = '�������� �� ��� ����������.';
$strAddUserMessage = '��� ��������� ��� ����������.';
$strAddedColumnComment = '������� �������� ��� ������';
$strAddedColumnRelation = '�������� ������� ��� ������';
$strAdministration = '�������������';
$strAffectedRows = '��������� ����:';
$strAfter = '���� %s';
$strAfterInsertBack = '�� �����';
$strAfterInsertNewInsert = '������ ��� �����';
$strAll = '������';
$strAllTableSameWidth = '��������� �� ������ ������� � ���� � ���� ������?';
$strAlterOrderBy = '������� ��������� ��';
$strAnIndex = '���� ������� ������ �� %s';
$strAnalyzeTable = '����������� �� ���������';
$strAnd = '�';
$strAny = '�����';
$strAnyColumn = '����� ������';
$strAnyDatabase = '����� ���� �����';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ����������';
$strAscending = '���������';
$strAtBeginningOfTable = '� �������� �� ���������';
$strAtEndOfTable = '� ���� �� ���������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' ������� ';
$strBinaryDoNotEdit = ' ������� - �� �� ��������� ';
$strBookmarkDeleted = 'Bookmark ���� ������.';
$strBookmarkLabel = '������';
$strBookmarkQuery = '��������� �� SQL-���������';
$strBookmarkThis = '������ ���� SQL-���������';
$strBookmarkView = '���� ���������';
$strBrowse = '��������';
$strBzError = 'phpMyAdmin �� ���� �� ���������� �������(dump) ������ ������ � Bz2 ������������ � ���� ������ �� PHP. ������ �� ���������� �� ���������� ���������� �� <code>$cfg[\'BZipDump\']</code> ����������� � ���������������� ���� �� ����� phpMyAdmin �� <code>FALSE</code>. ��� ������ �� �� ���������� ������������� �� Bz2 �����������, �� ������ �� ����������� �� ��-���� ������ �� PHP. ����� ��������� %s �� ������ ����������.';
$strBzip = '"bzip-����"';

$strCannotLogin = '�� ���� �� �� ����� ��� MySQL �������';
$strCantLoad = '�� ���� �� ������ ������������ %s,<br />���� ��������� �������������� �� PHP';
$strCantLoadMySQL = '�� ���� �� ������ MySQL ������������,<br />���� ��������� �������������� �� PHP.';
$strCantLoadRecodeIconv = '�� ���� �� �� ������� iconv ��� recode ������������ ���������� �� ������������ �� ������ �� �������(charset), �������������� PHP ����, �� �� ��������� ���������� �� ���� ���������� ��� �������� �������������� �� ������ �� �������(charset) � phpMyAdmin.';
$strCantRenameIdxToPrimary = '�� ���� �� ����������� ������� �� PRIMARY!';
$strCantUseRecodeIconv = '�� ���� �� �� �������� ���� iconv ���� libiconv ���� recode_string ��������� ������ ������������ �� ������������ �� ��������. ��������� �������������� �� PHP.';
$strCardinality = '����������';
$strCarriage = '������ �� ���� �� ���: \\r';
$strChange = '�������';
$strChangeCopyMode = '������ ��� ���������� ��� ������ ���������� � ...';
$strChangeCopyModeCopy = '... ������ ������.';
$strChangeCopyModeDeleteAndReload = ' ... ������ ������ �� ��������� �� ������������ � ���� ���� ��������� ������������.';
$strChangeCopyModeJustDelete = ' ... ������ ������ �� ��������� �� �������������.';
$strChangeCopyModeRevoke = ' ... ������ ������ ������� ���������� �� ������ � ���� ���� �� ������.';
$strChangeCopyUser = '������� �� ����� ������������ / �������� �� ����������';
$strChangeDisplay = '�������� ������ �� ���������';
$strChangePassword = '����� �� ��������';
$strCharsetOfFile = '����� �� �������(Charset) �� �����:';
$strCheckAll = '�������� ������';
$strCheckDbPriv = '������� ������������ �� ��';
$strCheckPrivs = '�������� �� ������������';
$strCheckPrivsLong = '������� ������������ �� ���� ����� &quot;%s&quot;.';
$strCheckTable = '�������� �� ���������';
$strChoosePage = '���� �������� �������� �� �����������';
$strColComFeat = '��������� �� ��������� ��� ��������';
$strColumn = '������';
$strColumnNames = '��� �� ������';
$strColumnPrivileges = '���������� ���������� �� ��������';
$strCommand = '�������';
$strComments = '���������';
$strCompleteInserts = '����� INSERT-�';
$strCompression = '���������'; 
$strConfigFileError = 'phpMyAdmin �� ���� �� ������� ����������������� �� ����!<br />���� ���� �� �� ����� ��� PHP ������ ����������� ������ � ���� ��� �� ���� �� ������ �����.<br />���� ��������� ���������������� ���� �������� ���� ���������� ����� ��-���� � ��������� ����������� �� ������ ����� PHP �����. � ��-������ ���� �� ��������, ������ ������� ������� ��� ����� � �������.<br />��� �� ������ ������ ��������, ������ � �����.';
$strConfigureTableCoord = '���� �������������� ������������ �� ������� %s';
$strConfirm = '������������ �� ������� �� �� ���������?';
$strConnections = '��������';
$strCookiesRequired = '����� ������� �� ���������� "Cookies".';
$strCopyTable = '�������� �� ������� (���� �� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� �������� � %s.';
$strCouldNotKill = 'phpMyAdmin �� ���� �� �������� ������� %s. �������� ���� � ���� ���������.';
$strCreate = '������';
$strCreateIndex = '������ ������ ����� &nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������ ��� ������';
$strCreateNewDatabase = '������ ���� ��';
$strCreateNewTable = '������ ���� ������� � �� %s';
$strCreatePage = '������ ���� ��������';
$strCreatePdfFeat = '��������� �� PDF-�';
$strCriteria = '��������';

$strDBGContext = '��������';
$strDBGContextID = '���������� ID';  
$strDBGHits = '���������';
$strDBGLine = '�����';
$strDBGMaxTimeMs = '����. �����, ms';  
$strDBGMinTimeMs = '���. �����, ms'; 
$strDBGModule = '�����';
$strDBGTimePerHitMs = '�����/���������, ms';
$strDBGTotalTimeMs = '���� �����, ms';
$strData = '�����';
$strDataDict = '������ �� �������';
$strDataOnly = '���� �����';
$strDatabase = '��';
$strDatabaseHasBeenDropped = '������ ����� %s ���� �������.';
$strDatabaseWildcard = '���� ����� (���� � � wildcard):';
$strDatabases = '���� �� �����';
$strDatabasesDropped = '%s ���� ����� ���� ������� �������.';
$strDatabasesStats = ' ���������� �� ������ �����';
$strDatabasesStatsDisable = '������� ����������';
$strDatabasesStatsEnable = '������� ����������';
$strDatabasesStatsHeavyTraffic = '���������: ������������� �� ���������� �� ������ ����� ���� �� ������ ����� ����� ������ ����� ��� ������� � MySQL �������.';
$strDbPrivileges = '���������� ���������� �� ������ �����';
$strDbSpecific = '���������� �� ������ �����';
$strDefault = '�� ������������';
$strDefaultValueHelp = '�� ����������� �� ������������, ���� �������� ���� ���� ��������, ��� ������� ����� ��� ��������, ����������� ������� ������: a';
$strDelete = '������';
$strDeleteAndFlush = '�������� ������������� � ���� ���� ����������� ������������.';
$strDeleteAndFlushDescr = '���� � ���-������ �����, �� �������������� �� ������������ ���� �� ������ �������� �����.';
$strDeleteFailed = '��������� ���������!';
$strDeleteUserMessage = '��� �������� ���������� %s.';
$strDeleted = '����� ���� ������';
$strDeletedRows = '������� ������:';
$strDeleting = '��������� �� %s';
$strDescending = '���������';
$strDisabled = '���������';
$strDisplay = '������';
$strDisplayFeat = '������ �������������';
$strDisplayOrder = '������ ��������:';
$strDisplayPDF = '������ PDF �����';
$strDoAQuery = '������� "��������� �� ������" (������ ��  ����������: "%")';
$strDoYouReally = '������������ �� ������� �� ��������� ��������';
$strDocu = '������������';
$strDrop = '�������';
$strDropDB = '������� �� %s';
$strDropSelectedDatabases = '������ ��������� ���� �����';
$strDropTable = '������ ���������';
$strDropUsersDb = '������ ������� ����� ����� ���� ����� ���� ���� �� �������������.';
$strDumpXRows = '����-�� %s ���� ���� �������� �� %s.';
$strDumpingData = '���� (�����) �� ������� � ���������';
$strDynamic = '���������';

$strEdit = '�����������';
$strEditPDFPages = '����������� �� PDF ��������';
$strEditPrivileges = '����������� �� ������������';
$strEffective = '���������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (�.�. ���� ������).';
$strEnabled = '���������';
$strEnd = '����';
$strEnglishPrivileges = ' ���������: ������� �� ������������ �� MySQL �� �������� �� ���������. ';
$strError = '������';
$strExplain = 'Explain SQL';
$strExport = '������������';
$strExportToXML = '������������ � XML ������';
$strExtendedInserts = '��������� INSERT-�';
$strExtra = '������������';

$strFailedAttempts = '��������� �� �����';
$strField = '����';
$strFieldHasBeenDropped = '������ %s ���� �������';
$strFields = '������';
$strFieldsEmpty = ' ������ �� �������� � ������! ';
$strFieldsEnclosedBy = '�������� �� �������� ���';
$strFieldsEscapedBy = '���������� �� ����������� �������';
$strFieldsTerminatedBy = '�������� ��������� ���';
$strFileCouldNotBeRead = '������ �� ���� �� ���� ��������';
$strFixed = '��������';
$strFlushPrivilegesNote = '���������: phpMyAdmin ����� ��������������� ���������� �������� �� ��������� �� ������������ �� MySQL. ������������ �� ���� ������� ���� �� �� ��������� �� ������������ ����� �������� ������� ��� ��� ���� �� ��������� ������� �� ����. � ���� ������, ������ �� %s����������� ������������%s ����� �� ����������.';
$strFlushTable = '�������� ���� �� ��������� ("FLUSH")';
$strFormEmpty = '������ �������� ��� ������ �� �������!';
$strFormat = '������';
$strFullText = '����� ��������';
$strFunction = '�������';

$strGenBy = '���������� ��';
$strGenTime = '����� �� ����������';
$strGeneralRelationFeat = '���� ����������� �� ���������';
$strGlobal = '��������';
$strGlobalPrivileges = '�������� ����������';
$strGlobalValue = '�������� ��������';
$strGo = '�������';
$strGrantOption = '������';
$strGrants = '������&nbsp;����.';
$strGzip = '"gzip-����"';

$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHaveToShow = '������ �� �������� ���� ���� ������ �� ���������';
$strHome = '������';
$strHomepageOfficial = '��������� phpMyAdmin ��� ��������';
$strHomepageSourceforge = 'phpMyAdmin �������� �� Sourceforge';
$strHost = '����';
$strHostEmpty = '����� �� ����� � ������!';

$strId = 'ID'; 
$strIdxFulltext = '�������������';
$strIfYouWish = '��� ������� �� �������� ���� ����� ������ �� ���������, ������� ������ �� �������� ��������� ��� �������.';
$strIgnore = '���������';
$strIgnoringFile = '���������� �� ���� %s';
$strImportDocSQL = '���������� docSQL ���������';
$strImportFiles = '����������� �� �������';
$strImportFinished = '������������� �������';
$strInUse = '�����';
$strIndex = '������';
$strIndexHasBeenDropped = '������� %s ���� ������';
$strIndexName = '��� �� �������&nbsp;:';
$strIndexType = '��� �� �������&nbsp;:';
$strIndexes = '�������';
$strInsecureMySQL = '������ ��������������� ���� ������� ��������� (root ��� ������), ����� ������������ �� ���������������� ������ �� MySQL �� ������������. ������ MySQL ������ � ��������� � ���� �� ������������ � ���� �� ���� ����� ������. T����� �� �������� ���� ����� � �����������.';
$strInsert = '������';
$strInsertAsNewRow = '������ ���� ��� ���';
$strInsertNewRow = '������ ��� ���';
$strInsertTextfiles = '������ �������� ������� � ���������';
$strInsertedRows = '�������� ����:';
$strInstructions = '����������';
$strInvalidName = '"%s" � �������� ���� � ��� �� ������ �� � ���������� �� ��� �� ���� �� �����,������� ��� ����. ';

$strJumpToDB = '����� ��� ���� ����� &quot;%s&quot;.';
$strJustDelete = '������ ������������� �� ��������� � ������������.';
$strJustDeleteDescr = '&quot;���������&quot; ����������� �� ���� ������ �� ������� ����� ����������, ������ �� �� ���������� ������������.';

$strKeepPass = '�� �� �� ����� ��������';
$strKeyname = '��� �� �����';
$strKill = '����';

$strLaTeX = 'LaTeX';
$strLandscape = '��������';
$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '���� �� ��������';
$strLineFeed = '������ �� ���� �� ���: \\n';
$strLines = '������';
$strLinesTerminatedBy = '�������� ��������� �';
$strLinkNotFound = '�������� �� �� ��������';
$strLinksTo = '���� ���';
$strLocalhost = '�������';
$strLocationTextfile = '�������������� �� ��������� ����';
$strLogPassword = '������:';
$strLogUsername = '���:';
$strLogin = '����';
$strLoginInformation = '���������� �� �������';
$strLogout = '����� �� ���������';

$strMissingBracket = '������ �����';
$strModifications = '��������� ���� ���������';
$strModify = '�������';
$strModifyIndexTopic = '������� �� ������';
$strMoreStatusVars = '����� ���������� �� �����������';
$strMoveTable = '����������� �� ������� ��� (���� �� �����<b>.</b>�������):';
$strMoveTableOK = '��������� %s ���� ���������� ��� %s.';
$strMySQLCharset = 'MySQL ����� �� �������';
$strMySQLReloaded = 'MySQL � ����������.';
$strMySQLSaid = 'MySQL ��������: ';
$strMySQLServerProcess = 'MySQL %pma_s1% � ��������� �� %pma_s2% ���� %pma_s3%';
$strMySQLShowProcess = '������ ���������';
$strMySQLShowStatus = '������ ���������� �� ����������� �� MySQL';
$strMySQLShowVars = '������ ���������� ���������� �� MySQL';

$strName = '���';
$strNext = '�������';
$strNo = '��';
$strNoDatabases = '���� ���� �� �����';
$strNoDatabasesSelected = '���� ������� ���� �����.';
$strNoDescription = '���� ��������';
$strNoDropDatabases = '"DROP DATABASE" ������� � ���������.';
$strNoExplain = '�������� Explain SQL';
$strNoFrames = 'phpMyAdmin � �� ���������� ��� ���������� �������, ����� �������� <b>frames</b>.';
$strNoIndex = '�� � ��������� ������!';
$strNoIndexPartsDefined = '�� �� ���������� ����� �� ������!';
$strNoModification = '���� �������';
$strNoPassword = '���� ������';
$strNoPhp = '��� PHP ���';
$strNoPrivileges = '���� ����������';
$strNoQuery = '���� SQL ������!';
$strNoRights = '� ������� �� ����������� � ���������� ����� �� �� �� �������� ���!';
$strNoTablesFound = '� ������ ����� ���� �������.';
$strNoUsersFound = '���� ����������(�).';
$strNoUsersSelected = '�� �� ������� �����������.';
$strNoValidateSQL = '�������� Validate SQL';
$strNone = '����';
$strNotNumber = '���� �� � �����!';
$strNotOK = '�� � OK';
$strNotSet = '�������  <b>%s</b> �� � �������� ��� �� � ���������� � %s';
$strNotValidNumber = ' �� � ������� ����� �� ���!';
$strNull = '������';
$strNumSearchResultsInTable = '%s ����������(�) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>����:</b> <i>%s</i> ����������(�)';
$strNumTables = '�������'; 

$strOK = 'OK';
$strOftenQuotation = '���������� �������. �� ����� ��������, �� ���� ������ char � varchar �� ��������� � �������.';
$strOperations = '��������';
$strOptimizeTable = '������������ �� ���������';
$strOptionalControls = '�� �����. ���������� ��� �� �� ����� ��� ����� ��������� �������.';
$strOptionally = '�� �����';
$strOptions = '�����';
$strOr = '���';
$strOverhead = '�������� �����';

$strPHP40203 = '��� ���������� PHP 4.2.3, ����� ��� �������� ��� � �����-������� ��������� (mbstring). ����� ���������� �� PHP ���� 19404. �� � �������������� �� ���������� ���� ������ �� PHP � phpMyAdmin.';
$strPHPVersion = '������ �� PHP';
$strPageNumber = '����� �� ����������:';
$strPartialText = '�������� ��������';
$strPassword = '������';
$strPasswordChanged = '�������� �� %s ���� ��������� �������.';
$strPasswordEmpty = '�������� � ������!';
$strPasswordNotSame = '�������� �� � ������!';
$strPdfDbSchema = '������� �� ���� ����� "%s" - �������� %s';
$strPdfInvalidPageNum = '����������� ����� �� PDF����������!';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPdfNoTables = '���� �������';
$strPerHour = '�� ���';
$strPhp = '������ PHP ���';  
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPmaUriError = '�� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ �� �� ������ �������� � ���������������� ����!';
$strPortrait = '���������';
$strPos1 = '������';
$strPrevious = '��������';
$strPrimary = 'PRIMARY';
$strPrimaryKey = '������ ����';
$strPrimaryKeyHasBeenDropped = ' ������� ���� ���� ������.';
$strPrimaryKeyName = '����� �� ������� ���� ������ �� �... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> �� � ����� �� <b>� ���������� ��</b> ������� ����!)';
$strPrint = '���������';
$strPrintView = '������ �� �����';
$strPrivDescAllPrivileges = '������� ������ ���������� ����� GRANT.';
$strPrivDescAlter = '��������� ��������� �� ����������� �� ������������ �������.';
$strPrivDescCreateDb = '��������� ��������� �� ���� ���� ����� � �������.';
$strPrivDescCreateTbl = '��������� ��������� �� ���� �������.';
$strPrivDescCreateTmpTable = '��������� ����������� �� �������� �������.';
$strPrivDescDelete = '��������� ��������� �� �����.';
$strPrivDescDropDb = '��������� ��������� �� ���� ����� � �������.';
$strPrivDescDropTbl = '��������� ��������� �� �������.';
$strPrivDescExecute = '��������� ������������ �� ��������� ���������; ���� ����� � ���� ������ �� MySQL.';
$strPrivDescFile = '��������� ����������� �� ����� �� � ������������ �� ����� ��� �������.';
$strPrivDescGrant = '��������� �������� �� ����������� � ���������� ��� ������������ �� ��������� � ������������.';
$strPrivDescIndex = '��������� ��������� � ���������� �� �������.';
$strPrivDescInsert = '��������� �������� � �������� �� �����.';
$strPrivDescLockTables = '��������� ���������� �� ������� �� �������� �����.';
$strPrivDescMaxConnections = '���������� ���� �� ������ ��������, ����� ����������� ���� �� ������ �� ���.';
$strPrivDescMaxQuestions = '���������� ���� �� ��������, ����� ����������� ���� �� ������� ��� ������� �� ���.';
$strPrivDescMaxUpdates = '���������� ���� �� ���������, ����� �������� ����� ������� ��� ���� �����, ����� ����� ���������� ���� �� �������� �� ���.';
$strPrivDescProcess3 = '��������� ��������� �� ������� �� ����� �����������.';
$strPrivDescProcess4 = '��������� ������� �� ������ ������ � ������� � ���������.';
$strPrivDescReferences = '���� ����� � ���� ������ �� MySQL.';
$strPrivDescReload = '��������� ������������ �� ���������� ��������� � ����������(flashing) �� ���� �� �������.'; 
$strPrivDescReplClient = '���� ������� �� ���������� �� ���� ���� �� slaves / masters.';
$strPrivDescReplSlave = '����� �� replication slaves.';
$strPrivDescSelect = '��������� ������ �� �����.';
$strPrivDescShowDb = '���� ������ �� ������ ������ �� ������ �����.';
$strPrivDescShutdown = '��������� ������� �� �������.';
$strPrivDescSuper = '��������� ���������, ���� ��� � ��������� ����������� ���� �� ����������; ������� �� �� �������� ��������������� ��������, ���� ������������ �� �������� ���������� ��� ������� �� ����� �� ����� �����������.';
$strPrivDescUpdate = '��������� ������� �� �����.';
$strPrivDescUsage = '���� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '������������ ���� ����������� �������.';
$strProcesslist = '������ �� ���������';
$strProperties = '��������';
$strPutColNames = '������� ������� �� �������� �� ������ ���';

$strQBE = '��������� �� ������';
$strQBEDel = '������';
$strQBEIns = '������';
$strQueryOnDb = 'SQL-������ ��� ������ �� ����� <b>%s</b>:';
$strQueryStatistics = '<b>���������� �� ��������</b>: �� ����� � ���������, %s ������ �� ��������� ��� �������.';
$strQueryType = '��� �� ��������';

$strReType = '������';
$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '�������� �� ����������� �� ��������';
$strRelationNotWorking = '�������������� ����������� �� ������ ��� �������� (linked) ������� �� ������������. �� �� ��������� ���� �������� %s���%s.';
$strRelationView = '������ �� ���������';
$strRelationalSchema = '���������� �����';
$strReloadFailed = '��������� ���� �� ������������ �� MySQL.';
$strReloadMySQL = '��������� MySQL';
$strReloadingThePrivileges = '������������ �� ������������';
$strRememberReload = '�� ���������� �� ����������� �������.';
$strRemoveSelectedUsers = '������������ �� ��������� �����������';
$strRenameTable = '����������� ��������� ��';
$strRenameTableOK = '������� %s ���� ������������ �� %s';
$strRepairTable = '��������� �� ���������';
$strReplace = '�������';
$strReplaceTable = '������� ������� �� ��������� � ������� �� �����';
$strReset = '�������';
$strResourceLimits = '�������� �����������';
$strRevoke = '������';
$strRevokeAndDelete = '������ ������� ������� ���������� �� ������������� � ���� ���� �� ������.';
$strRevokeAndDeleteDescr = '������������� ��� ��� �� ���� USAGE ���������� ������ �� �� ���������� ������������.';
$strRevokeGrant = '�������� �� ������&nbsp;����.';
$strRevokeGrantMessage = '��� ����������� �������� ���������� �� %s';
$strRevokeMessage = '��� ��������� ������������ �� %s';
$strRevokePriv = '������ �� ����������';
$strRowLength = '������� �� ����';
$strRowSize = ' ������ �� ��� ';
$strRows = '������';
$strRowsFrom = '���� ���������� ��';
$strRowsModeHorizontal = '������������';
$strRowsModeOptions = '� %s ��� � �������� ������� �� �������� ���� ����� %s<br />';
$strRowsModeVertical = '����������';
$strRowsStatistic = '���������� �� ��������';
$strRunQuery = '������� ��������';
$strRunSQLQuery = '���������� SQL ������/������ ��� ���� �� ����� %s';
$strRunning = '������ �� %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '��� �������� ���������� �� ��� �������� ��� � SQL �������. ���� �������� ��-�����, � ��������� ������������ �� ���������. ����� �������� ������� �� �������� ���� �� ����, �� ���������� ���� � �������� ��� ����� �������� ��������� � �������. ������ ���� ���� �� �� ������� �� ��������� �������� ���� ����������� �� �������� ��� �� MySQL. �������� ���������� �� MySQL ������� ��-����, ��� ��� ������, ���� ���� �� �� ������� ��� ����������� �� ��������. ��� ��� ��� ����� �������� ��� ������� ���� ������ ��� ������ ���������� �� ��������� ��� �� ����� ������, ���� ���������� ������ SQL ������ ���� �� ����������� ������, � ��������� ��������� �� ��� � ������� �� ������� � CUT �������� ��-����:';
$strSQLParserUserError = '�������, �� ��� ������ � SQL �������� ��. �������� ������� �� MySQL ������� �� ����, ��� ��� ������, �� ������ �� �� ������� � ��������������� �� ��������';
$strSQLQuery = 'SQL-���������';
$strSQLResult = 'SQL ��������';
$strSQPBugInvalidIdentifer = '��������� �������������';
$strSQPBugUnclosedQuote = '����������� �������'; 
$strSQPBugUnknownPunctuation = '��������� ���������� �� ������';
$strSave = '������';
$strScaleFactorSmall = '������ � ������ ����� �� �� �� ������ ������� �� ���� ��������';
$strSearch = '�������';
$strSearchFormTitle = '������� � ������ �����';
$strSearchInTables = '� ���������(���):';
$strSearchNeedle = '����(�) ��� ��������(�) �� ������� (������ �� ����������: "%"):';
$strSearchOption1 = '���� ���� �� ������';
$strSearchOption2 = '������ ����';
$strSearchOption3 = '������� �����';
$strSearchOption4 = '���� ��������� �����';
$strSearchResultsFor = '��������� �� ��������� �� "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '������';
$strSelectADb = '���� �������� ���� �����';
$strSelectAll = '���������� ������';
$strSelectFields = '������ ���� (������� ����):';
$strSelectNumRows = '� �����������';
$strSelectTables = '������ �������';  
$strSend = '�������';
$strSent = '���������';
$strServer = '������ %s';
$strServerChoice = '����� �� ������';
$strServerStatus = '���������� �� �����������';
$strServerStatusUptime = '���� MySQL ������ � ������ �� %s. ��������� � �� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '����������';
$strServerTrafficNotes = '<b>������ �� �������</b>: ���� ������� �������� ���������� �� �������� ������ �� MySQL ������� �� ����� � ���������.';
$strServerVars = '�������� ���������� � ���������';
$strServerVersion = '������ �� �������';
$strSessionValue = '�������� �� �������';
$strSetEnumVal = '��� ���� �� ������ � "enum" ��� "set", ���� �������� ����������� ����������� ���� ������: \'a\',\'b\',\'c\'...<br />��� � ���������� �� ������� ������� ����� ("\") ��� �������� ("\'") ����� ���� ���������, ������� ������� ����� ���� ��� (��������:  \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '������';
$strShowAll = '������ ������';
$strShowColor = '������ ����';
$strShowCols = '������ ��������';
$strShowDatadictAs = '������ �� ������� �� �������';
$strShowGrid = '������ �����';
$strShowPHPInfo = '������ ���������� �� PHP ';
$strShowTableDimension = '������ ������������ �� ���������';  
$strShowTables = '������ ���������';
$strShowThisQuery = ' ������ ���� ������ ������ ';
$strShowingRecords = '������� ������ ';
$strSingly = '(����������)';
$strSize = '������';
$strSort = '���������';
$strSpaceUsage = '���������� �����';
$strSplitWordsWithSpace = '������ ������ �� �� �������� � �������� (" ").';
$strStatement = '���������';
$strStatus = '��������';
$strStrucCSV = 'CSV �����';
$strStrucData = '����������� � �������';
$strStrucDrop = '������ \'������ ���������\'';
$strStrucExcelCSV = 'CSV �� Ms Excel �����';
$strStrucOnly = '���� �����������';
$strStructPropose = '�������� ��������� �� ���������';
$strStructure = '���������';
$strSubmit = '�������';
$strSuccess = '������ SQL-��������� ���� ��������� �������';
$strSum = '����';

$strTable = '������� ';
$strTableComments = '��������� ��� ���������';
$strTableEmpty = '����� �� ��������� � ������!';
$strTableHasBeenDropped = '��������� %s ���� �������';
$strTableHasBeenEmptied = '��������� %s ���� ����������';
$strTableHasBeenFlushed = '���� �� ������� %s ���� ���������';
$strTableMaintenance = '��������� �� ���������';
$strTableOfContents = '����������';
$strTableStructure = '��������� �� �������';
$strTableType = '��� �� ���������';
$strTables = '%s �������(�)';
$strTblPrivileges = '���������� �� ��������� ����������';
$strTextAreaLength = ' ������ ��������� ��,<br /> ���� ���� ���� �� �� � ������������ ';
$strTheContent = '������������ �� ����� ���� �����������.';
$strTheContents = '������������ �� ����� �������� ������������ �� ��������� �� ������ � ��������� �������� ��� �������� �������.';
$strTheTerminator = '������ �� ���� �� ����.';
$strThisHost = '���� ����';
$strThisNotDirectory = '���� �� ���� ����������';
$strThreadSuccessfullyKilled = '����� %s ���� ������� ����������.';
$strTime = '�����'; 
$strTotal = '����';
$strTotalUC = '����';
$strTraffic = '������';
$strType = '���';

$strUncheckAll = '����������� ������';
$strUnique = '��������';
$strUnselectAll = '������������ ������';
$strUpdatePrivMessage = '��� ���������� ������������ �� %s.';
$strUpdateProfile = '���������� �� ������:';
$strUpdateProfileMessage = '������� ���� �������.';
$strUpdateQuery = '������� �����������';
$strUsage = '����������';
$strUseBackquotes = '��������� ������� ������� ����� ����� �� ������� � ������';
$strUseTables = '��������� ���������';
$strUseTextField = '��������� ���������� ����';
$strUser = '����������';
$strUserAlreadyExists = '���������� %s ���� ����������!';
$strUserEmpty = '��������������� ��� � ������!';
$strUserName = '������������� ���';
$strUserNotFound = '�������� ���������� �� ���� ������ � ��������� � ������������.';
$strUserOverview = '������� �� �������������';
$strUsers = '�����������';
$strUsersDeleted = '��������� ����������� ���� ������� �������.';
$strUsersHavingAccessToDb = '����������� ����� ���� ������ �� &quot;%s&quot;';

$strValidateSQL = '��������� SQL-�';
$strValidatorError = 'SQL ���������� �� ���� �� ���� �������������. ���� ��������� ���� ��� ����������� ������������ PHP ����������, ���� ����� � ������� � %s��������������%s.';
$strValue = '��������';
$strVar = '����������'; 
$strViewDump = '������ ���� (�����) �� ���������';
$strViewDumpDB = '������ ���� (�����) �� ��';

$strWebServerUploadDirectory = '������������ �� upload �� ��� �������';
$strWebServerUploadDirectoryError = '������������ ����� ��� ������� �� upload �� ���� �� ���� ����������';
$strWelcome = '����� ����� � %s';
$strWildcard = '������ �� ����������';
$strWithChecked = '������ ��� �������:';
$strWritingCommentNotPossible = '������ �� �������� �� � ��������';
$strWritingRelationNotPossible = '������ �� ��������� �� � ��������';
$strWrongUser = '������ ���/������. ������� ������.';

$strYes = '��';

$strZeroRemovesTheLimit = '���������: �������������� �� ���� ����� � 0 (����) �������� �������������.';
$strZip = '"zip-����"';
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strAutodetect = 'Autodetect';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCSVOptions = 'CSV options';//to translate

$strDBComment = 'Database comment: ';//to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate 

$strInnodbStat = 'InnoDB Status';  //to translate

$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_file = 'Filename';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate

$strNoOptions = 'This format has no options';//to translate

$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate

$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate

$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate

$strSQLOptions = 'SQL options';//to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate

$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate

$strUseHostTable = 'Use Host Table';  //to translate

$strXML = 'XML';//to translate

$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
?>
