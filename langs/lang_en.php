<?php
$lang['SQL'] = 'SQL';
$lang['ClusterStatus'] = 'ClusterStatus';
$lang['Schema'] = 'Schema';
$lang['ThriftSchema'] = 'ThriftSchema';
$lang['QueryPlan'] = 'QueryPlan';
$lang['dieDatabaseChoose'] = 'Must Choose a database';
$lang['dieSchemaChoose'] = 'Must Choose a Schema';
$lang['dieTableChoose'] = 'Must Choose a table';
$lang['sqlQuery'] = 'SQL Query';
$lang['export'] = 'Export';
$lang['back'] = 'Back';
$lang['download'] = 'Download';
$lang['exportSQL'] = 'Please input SQL which to export the data that wanted below';
$lang['addDatabase'] = 'Add a new database: ';
$lang['addSchema'] = 'Add a new Schema: ';
$lang['submit'] = 'Submit';
$lang['cancel'] = 'Cancel';
$lang['createDbSuccess'] = 'Create Database Success';
$lang['createSchemaSuccess'] = 'Create Schema Success';
$lang['alterTable'] = 'Alter';
$lang['getFilelist'] = 'Filelist';
$lang['dropTable'] = 'Drop';
$lang['select'] = 'Select All';
$lang['deselect'] = 'DeSelect All';
$lang['alterTableWarning'] = 'Alter Table columns, Please be careful';
$lang['fileBrowser'] = "HDFS Browser";
$lang['filename'] = "Filename";
$lang['filesize'] = "Filesize";
$lang['tableName'] = "Table name: ";
$lang['fieldNums'] = "Column numbers: ";
$lang['addTable'] = "Add a Table";
$lang['addTableAlert'] = "Please enter Table name and column numbers both!";
$lang['fieldName'] = "Column Name: ";
$lang['fieldType'] = "Column Type: ";
$lang['createTableSuccess'] = "Create table Success!";
$lang['alterTableSuccess'] = "Alter table Success!";
$lang['dropTableSuccess'] = "Drop table Success!";
$lang['dropTableConfirm'] = "Are you sure you want to drop this Table?";
$lang['renameTable'] = "Table rename: (Only rooted-php can do this) ";
$lang['addColumns'] = "Add Columns";
$lang['comment'] = "Comment: ";
$lang['dropDatabase'] = "Drop Database";
$lang['dropDbSuccess'] = "Drop database success!";
$lang['dropSchemaSuccess'] = 'Drop Schema Success';
$lang['loadData'] = "Load(Internal Table Only)";
$lang['local'] = "Local";
$lang['hdfs'] = "HDFS";
$lang['chooseFS'] = "Choose filesystem";
$lang['pathToLoad'] = "Path to load(full unix path to data)";
$lang['ifPartition'] = "Partition?(Optional) ex:(ds='2008-08-08')";
$lang['ifExternal'] = "If an extenal table?";
$lang['externalPath'] = "Extenal path ex:(hdfs:///data/datawash/www): ";
$lang['columnTerminator'] = 'Column Terminator, support regular exp(, \t \n |) : ';
$lang['lineTerminator'] = 'Line Terminator, support regular exp(, \t \n |) : ';
$lang['overwrite'] = "Overwrite?";
$lang['mustEnterPath'] = "Must enter a fullpath and filename to load";
$lang['loadDataSuccess'] = "Loading success";
$lang['edit'] = "Edit";
$lang['delete'] = "Delete";
$lang['dropEtlConfirm'] = "Delete ETL config ini?";
$lang['execEtl'] = "Execute";
$lang['ETL'] = 'ETL (experimental)';
$lang['noFileChoose'] = 'Not choose any File';
$lang['noSuchFile'] = 'File not exists???';
$lang['save'] = 'Save';
$lang['success'] = 'Success!';
$lang['invalidEntry'] = 'Invalid entrance';
$lang['cliDone'] = "Already done, press 'Get Result Button for view and download'";
$lang['invalidFilename'] = 'Invalid Filename';
$lang['unknownError'] = "Unknown error";
$lang['downloadResultFile'] = "Download Result File";
$lang['noResultFetched'] = "No result fetched";
$lang['notReadyYet'] = "Not ready yet, plz wait...";
$lang['runningMapReduce'] = "Map/Reduce is Running...plz wait a second";
$lang['fingerprintOfMapReduce'] = "Map/Reduce Job Unique Finger Print:";
$lang['forceLimit'] = "Dont 'select * from', you should add limit!!!";
$lang['iniFileError'] = 'ini file parse error';
$lang['metaSummury'] = 'Meta Summury';
$lang['metaDbs'] = 'Databases: ';
$lang['metaTables'] = 'Tables: ';
$lang['metaPartitions'] = 'Partitions: ';
$lang['metaIndexes'] = 'Indexes: ';
$lang['dataFormat'] = 'Data Format: ';
$lang['textFile'] = 'Text File';
$lang['lzoped'] = 'LZO';
$lang['sequenced'] = 'Sequence File';
$lang['bzip2ed'] = 'BZIP2';
$lang['gziped'] = 'GZIP';
$lang['Partition'] = 'Partitions(numeric): ';
$lang['external'] = 'External';
$lang['managed'] = 'MANAGED (Internal)';
$lang['tableComment'] = 'Table Comment: ';
$lang['invalidFieldNums'] = 'Invalid Column number';
$lang['invalidPartitionNums'] = 'Invalid Partition number';
$lang['partitionName'] = "Parition Name: ";
$lang['partitionType'] = 'Partition Type: ';
$lang['partitionComment'] = 'Partition Comment: ';
$lang['noPartitionAdd'] = 'Leave Blank For not used.';
$lang['addPartitions'] = 'Add Partitions(numeric): ';
$lang['getResult'] = 'View Result';
$lang['sure'] = 'Are you sure???';
$lang['columnNumbers'] = 'Column numbers: ';
$lang['dropColumnConfirm'] = 'Drop this column? (This will not delete data on HDFS)';
$lang['rcfile'] = 'RCFile(hive 0.6.0 up only)';
$lang['asRcfile'] = 'AS select_statment (No use Leave it blank): ';
$lang['cloneTable'] = 'Clone';
$lang['putIni'] = 'Put ini file into: ';
$lang['dropDbConfirm'] = 'Are you sure to drop this DB';
$lang['history'] = 'History';
$lang['fileContent'] = 'File Content';
$lang['nextPage'] = 'Next Page';
$lang['previousPage'] = 'Previous Page';
$lang['welcome'] = 'Welcome to Big Data';
$lang['permissionDenied'] = 'You dont have enough permission to do this query.';
$lang['backToRoot'] = "Back To Root";
$lang['fileProperty'] = "File Property";
$lang['fileUser'] = "User";
$lang['fileGroup'] = "Group";
$lang['fileTime'] = "Create Time";
$lang['username'] = "Username";
$lang['password'] = 'Password';
$lang['logOut'] = 'Logout';
$lang['tableDetail'] = 'Table Details';
$lang['notExternalTable'] = 'Only MANAGED_TABLE can do load';
$lang['loadDataComment'] = 'For MANAGED_TABLE use only, choose load from local or HDFS, and enter path like /data/data1. (do not input hdfs:// for hdfs load)';
$lang['partitionSet'] = 'Partition set: input as (dtm=\'2012-06\')';
$lang['partitionLocation'] = 'Location to Store partition: input as /your/partition/location';
?>