
<?php $switch_settings = $this->custom_element_options(); ?>

<?php if( is_array( $switch_settings ) ): ?>

    <?php foreach($switch_settings as $item_key => $item): ?>

        <?php if( $item['type'] == 'switch' ): ?>
                <div class="qs-dark-mode-block-row qs-dark-mode-swicth-row">
                    <div class="qs-dark-mode-block-col qs-dark-mode-block-col-xl-3 qs-dark-mode-block-col-lg-4 qs-dark-mode-block-col-md-6">
                        <div class="quomodo_switch_common qs-dark-mode-common <?php echo esc_attr($item['is_pro']?'qs-dark-mode-pro qs-dark-mode-dash-modal-open-btn':''); ?>">
                            <div class="quomodo_sm_switch">
                                <a href="<?php echo esc_url($item['demo_link']); ?>" class="qs-dark-mode-data-tooltip"><?php echo esc_html__('view demo','qs-dark-mode'); ?></a>
                                
                                <strong>
                                    <?php echo esc_html( $item[ 'lavel' ] ); ?>
                                    <?php if( $item['is_pro'] ): ?>
                                        <span> <?php echo esc_html__( 'PRO', 'qs-dark-mode' ) ?> </span>
                                    <?php endif; ?>
                                </strong>
                                
                                <input <?php echo esc_attr( $item[ 'is_pro' ]?'readonly disabled':''); ?> <?php echo esc_attr( $item[ 'default' ]==1?'checked':''); ?> name="qs-dark-mode-custom-element-option[<?php echo esc_attr( $item_key ); ?>]" class="quomodo_switch <?php echo esc_attr( $item_key ); ?>" id="quomodo-modules-<?php echo esc_attr( $item_key ); ?>" type="checkbox">
                                <label for="quomodo-dark-mode-option-<?php echo esc_attr( $item_key ); ?>"></label>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endif; ?>
        <?php if( $item['type'] == 'image-choose' ): ?>
            <div class="qs-dark-mode-block-row qs-dark-mode-swicth-row qs-dark-mode-img-choose">
                <div class="qs-dark-mode-block-col qs-dark-mode-block-col-xl-12 qs-dark-mode-block-col-lg-12 qs-dark-mode-block-col-md-12">
                    <div class="qs-dark-mode-option-header">
                       <h3 class="qs-dark-mode-option-heading"> <?php echo esc_html( $item[ 'lavel' ] ); ?> </h3>
                    </div>
                    
                    <div class="qs-dark-mode-block-image-wrapper-list">
                        <?php foreach( $item['options'] as $img_option ): ?>
                            <div class="qs-dark-mode-img-block-wrapper"> 
                                <input <?php echo esc_attr($img_option['value'] == $item['value']?'checked':''); ?> id="<?php echo esc_attr($item_key.'_'.$img_option['value']); ?>" type="radio" name="qs-dark-mode-custom-element-option[<?php echo esc_attr( $item_key ); ?>]" value="<?php echo esc_attr($img_option['value']); ?>"  />
                                <label for="<?php echo esc_attr($item_key.'_'.$img_option['value']); ?>">
                                    <img src="<?php echo esc_url( $img_option[ 'src' ] ); ?>">
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( $item['type'] == 'select' ): ?>
           
            <div class="qs-dark-mode-option-header">
                <h3 class="qs-dark-mode-option-heading"> <?php echo esc_html( $item[ 'lavel' ] ); ?> </h3>
            </div>
            <div class="qs-dark-mode-select-list-wrapper">
                <div class="qs-dark-mode-select-list-inner-wrapper"> 
                   <select class="qs-dark-mode-select-dropdown" name="qs-dark-mode-custom-element-option[<?php echo esc_attr( $item_key ); ?>]"> 
                        <?php foreach($item['options'] as $select_key => $select_option): ?>
                            <option <?php echo esc_attr($select_key == $item['value']?'selected':''); ?> value="<?php echo esc_attr($select_key); ?>"> <?php echo esc_html($select_option); ?> </option>
                        <?php endforeach; ?>  
                   </select>
                </div> 
            </div>

        <?php endif; ?>

        <?php if( $item['type'] == 'textarea' ): ?>
           <div class="qs-dark-mode-elements-wrapper">
                <div class="qs-dark-mode-option-header">
                    <h3 class="qs-dark-mode-option-heading"> <?php echo esc_html( $item[ 'lavel' ] ); ?> </h3>
                </div>
                <div class="qs-dark-mode-textarea-wrapper">
                    <div class="qs-dark-mode-textarea-inner-wrapper"> 
                        <textarea  name="qs-dark-mode-custom-element-option[<?php echo esc_attr( $item_key ); ?>]" class="qs-dark-mode-textarea-option " cols="10" rows="10"><?php echo esc_html(isset($item['value']) && $item['value'] !=''?$item['value']:''); ?></textarea>

                    </div> 
                </div>
           </div>
           <?php if(isset($item['help'])): ?>
                <p> <?php echo esc_html($item['help']); ?> </p>
            <?php endif; ?>

       <?php endif; ?>

       <?php if( $item['type'] == 'select2' ): ?>
            <div class="qs-dark-mode-elements-wrapper qs-dark-mode-select-list-inner-wrapper">
                <div class="qs-dark-mode-option-header qs-dark-mode-custom-element-option-<?php echo $item_key ?>">
                    <h3 class="qs-dark-mode-option-heading"><?php echo esc_html( $item[ 'lavel' ] ); ?></h3>
                </div>

                <div class="qs-dark-mode-select-list-wrapper qs-dark-mode-custom-element-container-<?php echo $item_key ?>">
                    <div class="qs-dark-mode-select-list-inner-wrapper <?php echo esc_attr($item['is_pro']?'qs-dark-mode-pro qs-pro qs-dark-mode-dash-modal-open-btn':''); ?>"> 
                        <select multiple="multiple" class="qs-dark-mode-select-dropdown js-qs-dark-mode-select2-single" name="qs-dark-mode-custom-element-option[<?php echo esc_attr( $item_key ); ?>][]"> 
                            <?php foreach($item['options'] as $select_key => $select_option): ?>
                                <option <?php echo esc_attr( is_array($item['value']) && in_array($select_key,$item['value'])?'selected':''); ?> value="<?php echo esc_attr($select_key); ?>"> <?php echo esc_html($select_option); ?> </option>
                            <?php endforeach; ?>  
                        </select>
                        <?php if(isset($item['help'])): ?>
                            <p><?php echo esc_html($item['help']); ?></p>
                        <?php endif; ?>
                        <?php if( $item['is_pro'] ): ?>
                            <span class="pro-css"> <?php echo esc_html__( 'PRO', 'qs-dark-mode' ) ?> </span>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>

       <?php endif; ?>

    <?php endforeach; ?>

     
<?php endif; ?>
