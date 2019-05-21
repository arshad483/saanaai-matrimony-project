<div class="direct-chat-contacts">
    <ul class="contacts-list">
        <div class="pt-3 pb-2 text-center" style="border-bottom: 1px solid rgba(0, 0, 0, .15); margin: 0; width: 90% !important; margin-left: 5%;">
            <h4 class="card-inner-title c-base-1"><i class="fa fa-users"></i> <?php echo translate('contact_list')?></h4>
        </div>
        <?php foreach ($listed_messaging_members as $listed_member): ?>
            <?php if ($this->db->get_where('member', array('member_id' => $listed_member['member_id']))->row()->member_id):
                   
                $member_info = $this->db->get_where('member', array('member_id' => $listed_member['member_id']))->row();
                if ($member_info->is_closed=='no') {
            ?>
                <li>
                    <a onclick="open_message_box(<?=$listed_member['message_thread_id']?>,this)" id="thread_<?=$listed_member['message_thread_id']?>">
                        <?php
                            $images = json_decode($member_info->profile_image, true);
                            if (file_exists('uploads/profile_image/'.$images[0]['thumb'])) {
                            ?>
                                <img class="contacts-list-img" src="<?=base_url()?>uploads/profile_image/<?=$images[0]['thumb']?>">
                            <?php
                            }
                            else {
                            ?>
                                <img class="contacts-list-img" src="<?=base_url()?>uploads/profile_image/default_image.png">
                            <?php
                            }
                        ?>
                        <div class="contacts-list-info">
                            <span class="contacts-list-name" data-member="<?=$member_info->member_id?>">
                                <?=$member_info->first_name.' '.$member_info->last_name?>
                            </span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</div>