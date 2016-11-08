<div id="reputasi2">
		<div style="margin-top:5%; margin-left:1%;">
		<label>Informasi Karya dan Pameran (wajib diisi salah satu):</label>
		<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp a. Nama Tempat & Alamat Website</label>
		
		<div style="margin-top:5%; margin-left:8%;">
			<?php echo $form->textFieldRow($model,'n_tempat',array('class'=>'span4','maxlength'=>100));?> 
			
			<div style="margin-top:-1%; margin-left:-1%;">
				&nbsp;<?php echo $url ;?>
			</div>

			<div style="margin-top:-7%; margin-left:33%;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form->textField($model,'url',array('class'=>'span4','maxlength'=>100)); ?>
			</div>
			
		</div>
		<br>
		
		<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp b. Informasi Pameran</label>	
		
		<div style="margin-top:3%; margin-left:8%;">
			<?php echo $form->textFieldRow($model,'n_pameran',array('class'=>'span4','maxlength'=>300)); ?>
			<?php echo $form->textFieldRow($model,'kota',array('class'=>'span3','maxlength'=>100)); ?>
		</div>
		
		</div>
		
<div style="float:left; margin-top:2%;">

<div style="margin-left:19%; margin-top:-4%;">
<label for="Publikasi_tanggal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Periode Pameran</label>
</div>

<div class="rows" style="margin-top:-10%; margin-left:80%;">
     <?php
          echo $form->labelEx($model, '');
          $this->widget('zii.widgets.jui.CJuiDatePicker', array('attribute' => 'tgl_periode',
               'language' => 'en',
               'model' => $model,
			   'attribute'=>'tgl_periode', 
               'options' => array(
                    'mode' => 'focus',
                    'dateFormat' => 'd MM, yy',
                    'showAnim' => 'slideDown'),
               'htmlOptions' => array('size' => 30, 'class' => 'date')
               )
            );
            echo $form->error($model, 'tgl_periode');
			echo "s/d";
      ?>

</div>

<div style="float:left; margin-top:6%;">
<div class="rows" style="margin-top:-9%; margin-left:103%;">
     <?php echo $form->labelEx($model,''); ?>
     <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
         'name' => 'tgl_period',
         'model'=>$model,
		 'attribute' => 'tgl_period',
         'options'=> array(
			 'mode' => 'focus',
             'dateFormat' =>'d MM yy',
             'altFormat' =>'yy-mm-dd',
         ),
     )); 
     ?>
     <?php echo $form->error($model,'tgl_period'); ?>
 </div>
		
	</div>
	<br>