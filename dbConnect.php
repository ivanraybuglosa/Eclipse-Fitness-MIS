<?php
/*
 * DB Class
 * This class is used for database related (connect, insert, update, and delete) operations
 * with PHP Data Objects (PDO)
 * @author    CodexWorld.com
 * @url       http://www.codexworld.com
 * @license   http://www.codexworld.com/license
 */
class dbConnect{
	private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "eclipse_db";


    
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            try{
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            }catch(PDOException $e){
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
        }
    }
    
    /*
     * Returns rows from the database based on the conditions
     * @param string name of the table
     * @param array select, where, order_by, limit and return_type conditions
     */
    public function getRows($table,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }
    
    public function getRowsDistinct($table,$row){
        $sql = 'SELECT DISTINCT ';
        $sql .= $row;
        $sql .= ' FROM '.$table;
        
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        
        return !empty($data)?$data:false;
    }

    public function getRowsJoin($table1,$table2,$column1,$column2,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table1.' INNER JOIN '.$table2.' ON '.$table1.'.'.$column1.' = '.$table2.'.'.$column2;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        
    }

    public function rowsInnerJoin($id,$conditions = array()){
        $sql = "SELECT (@row_number:=@row_number + 1) AS ParticipantNumber,client.CLIENT_ID,client.CLIENT_FirstName,client.CLIENT_LastName, clientassignment.CA_RegDate, clientassignment.CA_Code FROM (SELECT @row_number:=0) AS t, clientassignment INNER JOIN client ON clientassignment.CLIENT_ID = client.CLIENT_ID WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        
        return !empty($data)?$data:false;
    }




    public function getRowsInnerJoin($column1,$column2,$column3,$tblName1,$tblName2,$tblName3,$id2,$id3,$conditions = array()){
        $sql = "SELECT ";
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .="FROM ((".$tblName1. " ";
        $sql .="INNER JOIN " .$tblName2. " ON " .$tblName1.".".$id2."=".$tblName2.".".$id2.") "; 
        $sql .="INNER JOIN " .$tblName3. " ON " .$tblName1.".".$id3."=".$tblName3.".".$id3.")";
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        
    }
    //not working
    public function selectTraining($packageType,$coachType){
        $sql = "SELECT TP_Code FROM trainingpackage WHERE TP_PackageType = '".$packageType."' AND TP_CoachType = '".$coachType."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TP_Code'];
        return $result;    
    }

    public function selectIdCompare($type,$duration){
        $sql = "SELECT MS_Code FROM membership WHERE MS_Type = '".$type."' AND MS_Duration = '".$duration."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['MS_Code'];
        return $result;    
    }

    public function selectPrice($type,$duration){
        $sql = "SELECT MS_Price FROM membership WHERE MS_Type = '".$type."' AND MS_Duration = '".$duration."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['MS_Price'];
        return $result;    
    }
    public function selectMembershipPrice($type,$duration,$condition = array()){
        $sql = "SELECT * FROM membership WHERE  MS_Type = '".$type."' AND MS_Duration = '".$duration."'";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false; 
    }
    /*
     * Insert data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function insert($table,$data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;

            $columnString = implode(',', array_keys($data));
            $valueString = ":".implode(',:', array_keys($data));
            $sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
            $query = $this->db->prepare($sql);
            foreach($data as $key=>$val){
                 $query->bindValue(':'.$key, $val);
            }
            $insert = $query->execute();
            return $insert?$this->db->lastInsertId():false;
        }else{
            return false;
        }
    }

    public function getValidity($id,$val,$val2,$tblName){
        $sql = "(SELECT ".$id." FROM ".$tblName." WHERE TP_PackageType = '".$val."' AND TP_CoachType = '".$val2."')";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$id];
        return $result;    
    }

    public function selectWorkoutID($id,$tblName,$st,$et,$date){
        $sql = "(SELECT ".$id." FROM ".$tblName." WHERE TLS_StartTime = '".$st."' AND TLS_EndTime = '".$et."' AND TLS_Date = '".$date."' )";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$id];
        return $result;    
    }

    public function selectMember($MSCode,$date,$client){
        $sql = "(SELECT * FROM membershiptype  WHERE MS_Code = '".$MSCode."' AND M_regDate = '".$date."' AND CLIENT_ID = '".$client."')";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['M_Code'];
        return $result;    
    }

    public function selectID($id,$tblName,$val){
        $sql = "(SELECT ".$id." FROM ".$tblName." WHERE username = '".$val."')";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$id];
        return $result;    
    }

    public function selectEquip($type){
        $sql = "SELECT E_Code FROM equipment WHERE E_Type = '".$type."' ";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['E_Code'];
        return $result;    
    }

    public function innerjoin($tblName1,$tblName2,$tblName3,$id2,$id3){
        $sql = "SELECT *";
        $sql .="FROM ((".$tblName1. " ";
        $sql .="INNER JOIN " .$tblName2. " ON " .$tblName1.".".$id2."=".$tblName2.".".$id2.") "; 
        $sql .="INNER JOIN " .$tblName3. " ON " .$tblName1.".".$id3."=".$tblName3.".".$id3.")";           
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$column1];
        return $result;    
    }


// ".$tblName1.".".$column1.",".$tblName4.".".$column4.",".$tblName4.".".$column8.",".$tblName3.".".$column7.",".$tblName2.".".$column2.",".$tblName2.".".$column5.",".$tblName3.".".$column3.",".$tblName3.".".$column6. " 

    // $column1,$column4,$column2,$column5,$column3,$column6,$column7,$column8,
    public function rowsjoin($tblName1,$tblName2,$tblName3,$tblName4,$id2,$id3,$id4,$conditions = array()){
        $sql = "SELECT *";
        $sql .="FROM ".$tblName1. " ";
        $sql .="INNER JOIN " .$tblName2. " ON " .$tblName1.".".$id2."=".$tblName2.".".$id2." "; 
        $sql .="INNER JOIN " .$tblName3. " ON " .$tblName1.".".$id3."=".$tblName3.".".$id3." ";
        $sql .="INNER JOIN " .$tblName4. " ON " .$tblName1.".".$id4."=".$tblName4.".".$id4." ";           
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;    
    }

    public function IDrowsjoin($id,$conditions = array()){
        

        $sql = "SELECT (@row_number:=@row_number + 1) AS ContractNumber,traininglog.TL_ClientPerformance,traininglog.TL_HealthConditions, traininglog.TL_Code, traininglog.TL_Expiry, trainingpackage.TP_PackageType,client.CLIENT_ID, client.CLIENT_FirstName,client.CLIENT_LastName,coach.COACH_ID,coach.COACH_LastName,coach.COACH_FirstName,coach.Coach_Type,trainingpackage.TP_Validity,traininglog.TL_RegDate FROM (SELECT @row_number:=0) AS t,traininglog INNER JOIN client ON traininglog.CLIENT_ID = client.CLIENT_ID INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE TL_Code ='".$id."' " ;      
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;    
    }

    public function insertJoin($table1, $table2,$id,$var,$column,$data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;

            $columnString = implode(',', array_keys($data));
            $valueString = ":".implode(',:', array_keys($data));
            $sql = "INSERT INTO ".$table1." (".$columnString.",".$id.") VALUES (".$valueString.",(SELECT ".$id." FROM ".$table2." WHERE ".$column." = ".$var."))";
            $query = $this->db->prepare($sql);
            foreach($data as $key=>$val){
                 $query->bindValue(':'.$key, $val);
            }
            $insert = $query->execute();
            return $insert?$this->db->lastInsertId():false;
        }else{
            return false;
        }
    }
    
    /*
     * Update data into the database
     * @param string name of the table
     * @param array the data for updating into the table
     * @param array where condition on updating data
     */
    public function update($table,$data,$conditions){
        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
            
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $query = $this->db->prepare($sql);
            $update = $query->execute();
            return $update?$query->rowCount():false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete data from the database
     * @param string name of the table
     * @param array where condition on deleting data
     */
    public function delete($table,$conditions){
        $whereSql = '';
        if(!empty($conditions)&& is_array($conditions)){
            $whereSql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $sql = "DELETE FROM ".$table.$whereSql;
        $delete = $this->db->exec($sql);
        return $delete?$delete:false;
    }
    
    public function getProfileRow($id,$table,$dd,$conditions = array()){
        $sql = "SELECT * FROM ".$table. " WHERE ".$dd." = ".$id."  ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function getStudioClass($id,$conditions = array()){
        $sql = "SELECT * FROM studioclasssession INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function membershipInfo($id,$conditions = array()){
        $sql = "SELECT * FROM membershiptype INNER JOIN client on membershiptype.CLIENT_ID INNER JOIN membership ON membershiptype.MS_Code = membership.MS_Code WHERE membershipType.CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }
    


    public function membershipJoin($type,$duration){
        $sql =  "SELECT client.MS_Code "; 
        $sql .= "FROM client ";
        $sql .= "INNER JOIN membership ON client.MS_Code = membership.MS_Code ";
        $sql .= "WHERE MS_Type = ".$type." AND MS_duration = ".$duration." ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['MS_Code'];
        return $result;  
    }

    //not yet working
    public function checkRegStatus(){
        $sql = "INSERT INTO client (CLIENT_RegStatus) ";
        $sql .="VALUES ('Walk-in') ";
        $sql .="WHERE MS_Code IS NULL " ;
        $query = $this->db->prepare($sql);
        $insert = $query->execute();
        $insert?$this->db->lastInsertId():false;
    }

    // brix functions
    public function getRowsJoinF($table1,$table2,$column1, $A_sample, $start = "2",$conditions = array()){

        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['selstartect']:'*';
        $sql .= ' FROM '.$table1.' INNER JOIN '.$table2.' ON '.$table1.'.'.$column1.' = '.$table2.'.'.$column1. ' WHERE ' .$A_sample. ' = '. $start;
   
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        
    


    }

    public function getRowsF($table,$column,$val,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
 
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE '. $column. ' = ' .$val;
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
    }

    public function selectIDF($id,$tblName,$val){
        $sql = "(SELECT ".$id." FROM ".$tblName." WHERE A_TimeIn = '".$val."')";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$id];
        return $result;    
    }

    public function selectIDMEM($id,$tblName,$val){
        $sql = "(SELECT ".$id." FROM ".$tblName." WHERE CLIENT_ID = '".$val."')";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var[$id];
        return $result;    
    }
        
        //end of brix functions

        public function member($id,$conditions = array()){
        $sql = "SELECT * FROM client INNER JOIN membership ON client.MS_Code = membership.MS_Code 
                WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        }

    public function measurementInitial($id,$conditions = array()){
        $sql = "SELECT * FROM measurements INNER JOIN traininglog ON measurements.TL_Code = traininglog.TL_Code WHERE measurements.TL_Code = '".$id."' AND measurements.M_MeasurementType = 'Initial' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        }


    public function measurementFinal($id,$conditions = array()){
        $sql = "SELECT * FROM measurements INNER JOIN traininglog ON measurements.TL_Code = traininglog.TL_Code WHERE measurements.TL_Code = '".$id."' AND measurements.M_MeasurementType = 'Final' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        }

    public function sessions($id,$conditions = array()){
        
        $sql = "SELECT (@row_number:=@row_number + 1) AS SessionNumber, `TL_Code`,`TLS_Date`,`TLS_StartTime`,`TLS_EndTime`,`TLS_Exercise`,`TLS_Sets`,`TLS_Reps` FROM traininglogsession,(SELECT @row_number:=0) AS t WHERE traininglogsession.TL_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
        }

    public function getRowsType($table,$val,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        $sql .= ' WHERE MS_Code = '.$val. ' ' ;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function measurementClassInitial($id,$conditions = array()){
        $sql = "SELECT * FROM measurements WHERE M_MeasurementType = 'Initial' AND TL_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function measurementClassFinal($id,$conditions = array()){
        $sql = "SELECT * FROM measurements WHERE M_MeasurementType = 'Final' AND TL_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function contracts($id,$conditions = array()){
        $sql = "SELECT (@row_number:=@row_number + 1) AS ContractNumber, traininglog.TL_Code,coach.COACH_FirstName, coach.COACH_LastName, traininglog.TL_HealthConditions, traininglog.TL_ClientPerformance, trainingpackage.TP_PackageType, traininglog.TL_RegDate FROM (SELECT @row_number:=0) AS t, traininglog INNER JOIN coach ON traininglog.COACH_ID = coach.COACH_ID INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE CLIENT_ID = '".$id."' ";
        
        
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function status($id,$conditions= array()){
        $sql = "SELECT traininglog.TL_Expiry, trainingpackage.TP_PackageType, COUNT(traininglogsession.TLS_Code) as Sessions, traininglog.CLIENT_ID FROM traininglogsession,traininglog INNER JOIN trainingpackage ON traininglog.TP_Code = trainingpackage.TP_Code WHERE traininglog.TL_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function ptPrice($type,$validity){
        $sql = "SELECT TP_Price FROM trainingpackage WHERE TP_PackageType = '".$type."' AND TP_Validity ='".$validity."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TP_Price'];
        return $result;    
    }

    public function regStat($id){
        $sql = "SELECT CLIENT_RegStatus FROM client WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_RegStatus'];
        return $result; 
    }
    
    public function transClient($conditions= array()){
        $sql = "SELECT * FROM transaction INNER JOIN client on transaction.CLIENT_ID = client.CLIENT_ID WHERE TR_Status = 'unpaid' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function profileMembership($id,$conditions= array()){
        $sql = "SELECT * FROM membershiptype INNER JOIN client ON membershiptype.CLIENT_ID = client.CLIENT_ID INNER JOIN membership on membershiptype.MS_Code = membership.MS_Code WHERE membershiptype.CLIENT_ID = '".$id."' AND membershiptype.M_membershipStatus = 'Active' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function classStartTime($id){
        $sql = "SELECT SCS_StartTime FROM studioclasssession WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SCS_StartTime'];
        return $result; 
    }

    public function classEndTime($id){
        $sql = "SELECT SCS_EndTime FROM studioclasssession WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SCS_EndTime'];
        return $result; 
    }

    public function classDate($id){
        $sql = "SELECT SCS_Date FROM studioclasssession WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SCS_Date'];
        return $result; 
    }

    public function classCoach($id){
        $sql = "SELECT COACH_ID FROM studioclasssession WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['COACH_ID'];
        return $result; 
    }

    public function activityRows($id,$conditions = array()){
        $sql = "SELECT * FROM activitylog INNER JOIN coach on activitylog.COACH_ID = coach.COACH_ID WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function dashboardActs($date,$conditions = array()){
        $sql = "SELECT * FROM activitylog INNER JOIN coach ON activitylog.COACH_ID = coach.COACH_ID WHERE AL_Date = '".$date."' AND (CLIENT_ID IS NULL &&  Activity = 'Studio Class Session') OR (CLIENT_ID IS NOT NULL && Activity = 'Personal Training Session')";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function checkParticipants($id,$conditions = array()){
        $sql = "SELECT COUNT(CA_Code) as Participants FROM clientassignment WHERE SCS_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function checkTrainingSessions($id,$conditions = array()){
        $sql = "SELECT COUNT(TLS_Code) as Sessions FROM traininglogsession WHERE TL_Code = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function checkMembership($id){
        $sql = "SELECT M_expiryDate FROM membershiptype WHERE CLIENT_ID = '".$id."' ORDER BY M_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['M_expiryDate'];
        return $result; 
    }

    public function checkPTExpiry($id){
        $sql = "SELECT TL_Expiry FROM traininglog WHERE CLIENT_ID = '".$id."' ORDER BY TL_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TL_Expiry'];
        return $result;
    }

    public function checkTrainingStatus($id){
        $sql = "SELECT TL_TrainingStatus FROM traininglog WHERE CLIENT_ID = '".$id."' ORDER BY TL_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TL_TrainingStatus'];
        return $result;
    }

    public function checkStartTime($id,$date){
        $sql = "SELECT SCS_StartTime FROM studioclasssession WHERE COACH_ID = '".$id."' AND SCS_Date = '".$date."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SCS_StartTime'];
        return $result;
    }

    public function checkEndTime($id,$date){
        $sql = "SELECT SCS_EndTime FROM studioclasssession WHERE COACH_ID = '".$id."' AND SCS_Date = '".$date."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SCS_EndTime'];
        return $result;
    }

    public function checkAttendance($id,$date){
        $sql = "SELECT CLIENT_ID FROM attendance WHERE CLIENT_ID = '".$id."' AND A_Date ='".$date."' AND A_TimeOut IS NULL";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_ID'];
        return $result;
    }

    public function previousAvailable(){
        $sql = "SELECT TI_Available FROM towelinventory ORDER BY TI_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Available'];
        return $result;
    }

    public function attendance($date,$conditions = array()){
        $sql = "SELECT * FROM attendance INNER JOIN client ON attendance.CLIENT_ID = client.CLIENT_ID WHERE A_Date = '".$date."' AND A_TimeOut IS NULL";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;

    }

    public function previousBorrowed(){
        $sql = "SELECT TI_Borrowed FROM towelinventory ORDER BY TI_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Borrowed'];
        return $result;
    }


    public function getReturned(){
        $sql = "SELECT TI_Returned FROM towelinventory ORDER BY TI_Code LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Returned'];
        return $result;
    }

    public function sumReturned(){
        $sql = "SELECT SUM(TI_Returned) as returned FROM towelinventory";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['returned'];
        return $result;
    }

    public function previousSupplied(){
        $sql = "SELECT TI_Supplied FROM towelinventory ORDER BY TI_Code LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Supplied'];
        return $result;
    }

    public function previousReturned(){
        $sql = "SELECT TI_Returned FROM towelinventory ORDER BY TI_Code LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Returned'];
        return $result;
    }

    public function borrowed(){
        $sql = "SELECT TI_Borrowed FROM towelinventory ORDER BY TI_Code LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TI_Borrowed'];
        return $result;
    }

    public function towels($date,$conditions = array()){
        $sql = "SELECT SUM(TI_Supplied) as supply, SUM(TI_Laundry) as laundry, TI_Borrowed, TI_Returned FROM towelinventory WHERE TI_Date = '".$date."'  ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function towelSupplied($conditions = array()){
        $sql = "SELECT * FROM towelinventory"; 
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function equipmentRows($conditions = array()){
        $sql = "SELECT equipment.E_Type, equipment.E_Model, equipmentinventory.EI_Code, equipmentinventory.E_Code, EI_DeliveryDate, EI_DeliveryTime FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code GROUP BY EI_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function transReport($client,$date1,$date2,$conditions = array()){
        $sql = "SELECT * from transaction INNER JOIN client ON transaction.CLIENT_ID = client.CLIENT_ID WHERE transaction.CLIENT_ID = '".$client."' OR transaction.TR_TransactionDate BETWEEN '".$date1."' AND '".$date2."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function quantity($type,$model){
        $sql = "SELECT SUM(EI_Quantity) as quantity FROM equipmentinventory INNER JOIN equipment ON equipmentinventory.E_Code = equipment.E_Code WHERE E_Type='".$type."' AND E_Model='".$model."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['quantity'];
        return $result;
    }

    public function equipHistory($code,$conditions = array()){
        $sql ="SELECT * FROM equipmentinventory WHERE E_Code = '".$code."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }

    public function locker($date,$key){
        $sql = "SELECT A_LockerKey FROM attendance WHERE A_LockerKey = '".$key."' AND A_Date = '".$date."' AND A_TimeOut IS NULL";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['A_LockerKey'];
        return $result;

    }

    public function penaltyPrice($type){
        $sql = "SELECT P_Fee FROM penalties WHERE P_Type = '".$type."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['P_Fee'];
        return $result;    
    }

    public function checkTowels($Acode){
        $sql = "SELECT A_TowelQty FROM attendance WHERE A_Code = '".$Acode."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['A_TowelQty'];
        return $result;    
    }

    public function getMonth($id){
        $sql = "SELECT CLIENT_month FROM client WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_month'];
        return $result;
    }
    public function getDay($id){
        $sql = "SELECT CLIENT_day FROM client WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_day'];
        return $result;
    }

    public function getYear($id){
        $sql = "SELECT CLIENT_year FROM client WHERE CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_year'];
        return $result;
    }

    public function membershipExpire(){
        $sql = "SELECT M_membershipStatus FROM membershiptype";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['M_membershipStatus'];
        return $result;
    }

    public function membershipHistory($id,$conditions = array()){
        $sql = "SELECT * FROM membershiptype INNER JOIN membership ON membershiptype.MS_Code = membership.MS_Code WHERE membershiptype.CLIENT_ID = '".$id."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $query->rowCount();
                    break;
                case 'single':
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                    break;
                default:
                    $data = '';
            }
        }else{
            if($query->rowCount() > 0){
                $data = $query->fetchAll();
            }
        }
        return !empty($data)?$data:false;
    }


    public function expire($date){
        $sql = "SELECT TL_Expiry from traininglog WHERE TL_Expiry = '".$date."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TL_Expiry'];
        return $result;

    }

    public function memExpire($id){
        $sql = "SELECT M_expiryDate FROM membershiptype WHERE CLIENT_ID = '".$id."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['M_expiryDate'];
        return $result;

    }

    public function checkInitial($id){
        $sql = "SELECT TL_Code FROM measurements WHERE TL_Code = ".$id." AND M_MeasurementType = 'Initial' OR M_MeasurementType = 'Final' ";

        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['TL_Code'];
        return $result;

    }

    public function singleParticipant($id,$scs){
        $sql = "SELECT CLIENT_ID FROM clientassignment WHERE CLIENT_ID = '".$id."' AND SCS_CODE = '".$scs."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CLIENT_ID'];
        return $result;
    }

    public function countParticipant($scs){
        $sql = "SELECT COUNT(CLIENT_ID) as participant FROM clientassignment WHERE SCS_Code = '".$scs."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['participant'];
        return $result;
    }

    public function remaining($scs){
        $sql = "SELECT CA_Remaining from clientassignment WHERE SCS_Code = '".$scs."' ORDER BY CA_Code DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['CA_Remaining'];
        return $result;
    }

    public function cap($scs){
        $sql ="SELECT studioclass.SC_Capacity FROM studioclasssession INNER JOIN studioclass ON studioclasssession.SC_Code = studioclass.SC_Code WHERE SCS_Code = '".$scs."' ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $var = $query->fetch();
        $result = $var['SC_Capacity'];
        return $result;
    }










}


?>