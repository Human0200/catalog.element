<?$bTab = isset($tabCode) && $tabCode === 'char';?>
<?// show char block?>
<?if ($templateData['SHOW_CHARACTERISTICS']):?>
    <?if ($bTab):?>
        <?if (!isset($arTabs[$tabCode])):?>
            <?
            $arTabs[$tabCode] = ['classList' => []];
            if (empty($templateData['VISIBLE_PROPS_BLOCK'])) {
                $arTabs[$tabCode]['classList'][] = 'hidden';
            }
            ?>
        <?else:?>
            <div class="tab-pane<?=TSolution\Utils::implodeClasses($arTabs[$tabCode]['classList'], leadingDelimiter: true);?>" id="char">
                <?$APPLICATION->ShowViewContent('PRODUCT_PROPS_INFO');?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block char<?=empty($templateData['VISIBLE_PROPS_BLOCK']) ? ' hidden' : '';?>">
            <h3 class="switcher-title"><?=$arParams['T_CHAR'];?></h3>
            <?$APPLICATION->ShowViewContent('PRODUCT_PROPS_INFO');?>
        </div>
    <?endif;?>
    <?TSolution\Extensions::init(['chars']);?>
<?endif;?>
