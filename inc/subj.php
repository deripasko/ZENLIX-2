<?php
session_start();
include ("../functions.inc.php");

if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) {
    if (validate_admin($_SESSION['helpdesk_user_id'])) {
        include ("head.inc.php");
        include ("navbar.inc.php");
?>
<section class="content-header">
                    <h1>
                        <i class="fa fa-tags"></i> <?php echo lang('SUBJ_title'); ?>
                        <small><?php echo lang('STATS_TITLE_ext'); ?></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="<?php echo $CONF['hostname'] ?>index.php"><span class="icon-svg"></span> <?php echo $CONF['name_of_firm'] ?></a></li>
                        <li class="active"><?php echo lang('SUBJ_title'); ?></li>
                    </ol>
                </section>
                
                
                <section class="content">

                    <!-- row -->
                    <div class="row">
                    <div class="col-md-3">
                    
                    <input type="text" class="form-control input-sm ui-autocomplete-input" id="subj_text" placeholder="<?php echo lang('SUBJ_name'); ?>" autocomplete="off">
      
        <button id="subj_add" class="btn btn-default btn-sm btn-block" type="submit"><?php echo lang('SUBJ_add'); ?></button>
      <br>
                    
                    
                    
                     <?php
        if ($CONF['fix_subj'] == "false") { ?>
                   <div class="callout callout-danger">
                                        
                                        <small> <i class="fa fa-info-circle"></i> 
<?php echo lang('DEPS_off'); ?>
       </small>
                                    </div><br>
                   <?php
        } ?>

                    <div class="callout callout-info">
                                        
                                        <small> <i class="fa fa-info-circle"></i> 
<?php echo lang('SUBJ_info'); ?>
       </small>
                                    </div></div>
                    <div class="col-md-9">
                    
                    
                    
                    
                    <div class="box box-solid">
                                
                                <div class="box-body">
                                <div class="" id="content_subj">
      
<?php
        
        //$results = mysql_query("select id, name from subj;");
        
        $stmt = $dbConnection->prepare('select id, name from subj');
        $stmt->execute();
        $res1 = $stmt->fetchAll();
?>      
      
      
      
<table class="table table-bordered table-hover" style=" font-size: 14px; " id="">
        <thead>
          <tr>
            <th><center>ID</center></th>
            <th><center><?php echo lang('SUBJ_n'); ?></center></th>
            <th><center><?php echo lang('SUBJ_action'); ?></center></th>
          </tr>
        </thead>
    <tbody>   
    <?php
        
        //while ($row = mysql_fetch_assoc($results)) {
        foreach ($res1 as $row) {
?>
    <tr id="tr_<?php echo $row['id']; ?>">
    
    
    <td><small><center><?php echo $row['id']; ?></center></small></td>
    <td><small id="small_<?php echo $row['id']; ?>"><?php echo $row['name']; ?></small></td>
<td><small><center><button id="subj_del" type="button" class="btn btn-danger btn-xs" value="<?php echo $row['id']; ?>">del</button></center></small></td>
    </tr>
        <?php
        } ?>
    
    
      
    </tbody>
</table>
      <br>
      </div>
                                </div>
                    </div>
                    </div>
                    </div>
                </section>


<?php
        include ("footer.inc.php");
?>

<?php
    }
} else {
    include '../auth.php';
}
?>