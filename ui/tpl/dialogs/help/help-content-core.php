<?php
/**
 * Template:Dialog:Help Content
 * 
 * @title      Help Content - Core
 * @desc       Template for the help content - loaded both directly and with AJAX inside [data-role="content"]
 * @copyright  (c) 2020, Stephino
 * @author     Mark Jivko <stephino.team@gmail.com>
 * @package    stephino-rpg
 * @license    GPL v3+, gnu.org/licenses/gpl-3.0.txt
 */
!defined('STEPHINO_RPG_ROOT') && exit();

/* @var $configObject Stephino_Rpg_Config_Core */
/* @var $itemId string */
?>
<div class="col-12 p-2 text-center">
    <h4>
        <span data-click="settingsViewCredits"><?php echo Stephino_Rpg_Utils_Lingo::getGameName();?></span>
    </h4>
    <h6><?php echo esc_html__('Customized by', 'stephino-rpg');?> <?php echo esc_html(get_bloginfo('name'));?></h6>
</div>
<?php 
    require Stephino_Rpg_Renderer_Ajax_Dialog_Help::dialogTemplatePath(
        Stephino_Rpg_Renderer_Ajax_Dialog_Help::TEMPLATE_FRAGMENT_DESCRIPTION
    );
?>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_GAME_RES == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php echo esc_html__('Common resources', 'stephino-rpg');?></span></h6>
    <div class="col-12 text-center">
        <?php 
            echo sprintf(
                esc_html__('These resources are generated by and accessible to: %s', 'stephino-rpg'),
                $configObject->getConfigCitiesName(true)
            );
        ?>
    </div>
    <?php if (null !== $configObject->getResourceGoldDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_GOLD;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceGoldName(true);?></b>:
                    <?php echo $configObject->getResourceGoldDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceGemDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_GEM;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceGemName(true);?></b>:
                    <?php echo $configObject->getResourceGemDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceResearchDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_RESEARCH;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceResearchName(true);?></b>:
                    <?php echo $configObject->getResourceResearchDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
</div>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_CITY_RES == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php 
        echo sprintf(
            esc_html__('%s: resources', 'stephino-rpg'),
            $configObject->getConfigCityName(true)
        );
    ?></span></h6>
    <div class="col-12 text-center">
        <?php 
            echo sprintf(
                esc_html__('These resources are generated and stored in: %s', 'stephino-rpg'),
                $configObject->getConfigCitiesName(true)
            );
        ?>
    </div>
    <?php if (null !== $configObject->getResourceAlphaDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_ALPHA;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceAlphaName(true);?></b>:
                    <?php echo $configObject->getResourceAlphaDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceBetaDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_BETA;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceBetaName(true);?></b>:
                    <?php echo $configObject->getResourceBetaDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceGammaDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_GAMMA;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceGammaName(true);?></b>:
                    <?php echo $configObject->getResourceGammaDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceExtra1Description(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_EXTRA_1;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceExtra1Name(true);?></b>:
                    <?php echo $configObject->getResourceExtra1Description(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getResourceExtra2Description(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_RES_EXTRA_2;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getResourceExtra2Name(true);?></b>:
                    <?php echo $configObject->getResourceExtra2Description(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
</div>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_CITY_METRICS == $itemId ? 'framed active' : '');?>">
    <h6 class="heading">
        <span><?php 
            echo sprintf(
                esc_html__('%s: metrics', 'stephino-rpg'),
                $configObject->getConfigCityName(true)
            );
        ?></span>
    </h6>
    <div class="col-12 text-center">
        <?php 
            echo sprintf(
                esc_html__('%s: these metrics are not affected by workers', 'stephino-rpg'),
                $configObject->getConfigCityName(true)
            );
        ?>
    </div>
    <?php if (null !== $configObject->getMetricPopulationDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_MTR_POPULATION;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getMetricPopulationName(true);?></b>:
                    <?php echo $configObject->getMetricPopulationDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getMetricSatisfactionDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_MTR_SATISFACTION;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getMetricSatisfactionName(true);?></b>:
                    <?php echo $configObject->getMetricSatisfactionDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
    <?php if (null !== $configObject->getMetricStorageDescription(true)):?>
        <div class="col-12">
            <span class="res res-<?php echo Stephino_Rpg_Renderer_Ajax::RESULT_MTR_STORAGE;?>">
                <div class="icon"></div>
                <span>
                    <b><?php echo $configObject->getMetricStorageName(true);?></b>:
                    <?php echo $configObject->getMetricStorageDescription(true);?>
                </span>
            </span>
        </div>
    <?php endif;?>
</div>
<?php if ((Stephino_Rpg::get()->isDemo() || is_super_admin()) && $configObject->getConsoleEnabled()):?>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_CONSOLE == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php echo esc_html__('Game console', 'stephino-rpg');?></span></h6>
    <ul>
        <li>
            <?php 
                echo sprintf(
                    esc_html__('You can toggle the game console visibility with %s', 'stephino-rpg'),
                    '<b>Alt+Ctrl+C</b>'
                );
            ?>
        </li>
        <li>
            <?php echo esc_html__('The console allows you a fine level of control over the game', 'stephino-rpg');?>
        </li>
    </ul>
</div>
<?php endif;?>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_SCORE == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php echo esc_html__('Total score', 'stephino-rpg');?></span></h6>
    <div class="col-12 text-center">
        <?php echo esc_html__('Your total score is calculated as follows:', 'stephino-rpg');?>
    </div>
    <ul>
        <?php if (0 != $configObject->getScoreQueueBuilding()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each upgrade (%s) multiplied by level', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreQueueBuilding() > 0 ? '+' : '') . $configObject->getScoreQueueBuilding() . '</b> ' 
                            . _n('point', 'points', $configObject->getScoreQueueBuilding(), 'stephino-rpg'),
                        $configObject->getConfigBuildingName(true)
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if (0 != $configObject->getScoreQueueEntity()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each entity recruited', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreQueueEntity() > 0 ? '+' : '') . $configObject->getScoreQueueEntity() . '</b> '
                            . _n('point', 'points', $configObject->getScoreQueueEntity(), 'stephino-rpg')
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if (0 != $configObject->getScoreQueueResearch()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each upgrade (%s) multiplied by level', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreQueueResearch() > 0 ? '+' : '') . $configObject->getScoreQueueResearch() . '</b> ' 
                            . _n('point', 'points', $configObject->getScoreQueueResearch(), 'stephino-rpg'),
                        $configObject->getConfigResearchFieldName(true)
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if (0 != $configObject->getScoreBattleDefeat()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each defeat', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreBattleDefeat() > 0 ? '+' : '') . $configObject->getScoreBattleDefeat() . '</b> '
                            . _n('point', 'points', $configObject->getScoreBattleDefeat(), 'stephino-rpg')
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if (0 != $configObject->getScoreBattleDraw()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each draw', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreBattleDraw() > 0 ? '+' : '') . $configObject->getScoreBattleDraw() . '</b> '
                            . _n('point', 'points', $configObject->getScoreBattleDraw(), 'stephino-rpg')
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if (0 != $configObject->getScoreBattleVictory()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('%s for each victory', 'stephino-rpg'),
                        '<b>' . ($configObject->getScoreBattleVictory() > 0 ? '+' : '') . $configObject->getScoreBattleVictory() . '</b> '
                            . _n('point', 'points', $configObject->getScoreBattleVictory(), 'stephino-rpg')
                    );
                ?>
            </li>
        <?php endif;?>
    </ul>
</div>
<?php if ($configObject->getPtfEnabled()):?>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_GAME_ARENA == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php echo esc_html__('Game arena', 'stephino-rpg');?></span></h6>
    <ul>
        <li>
    <?php 
        if (Stephino_Rpg_Config::get()->core()->getPtfRewardPlayer()) {
            echo sprintf(
                esc_html__('Earn %s by playing games', 'stephino-rpg'),
                '<b>' . Stephino_Rpg_Config::get()->core()->getPtfRewardPlayer() . '</b> ' . Stephino_Rpg_Config::get()->core()->getResourceGemName(true)
            );
        }
    ?>
        </li>
        <li>
    <?php 
        if (Stephino_Rpg_Config::get()->core()->getPtfRewardAuthor()) {
            echo sprintf(
                esc_html__('Earn %s each time a game you created is won', 'stephino-rpg'),
                '<b>' . Stephino_Rpg_Config::get()->core()->getPtfRewardAuthor() . '</b> ' . Stephino_Rpg_Config::get()->core()->getResourceGemName(true)
            );
        }
    ?>
        </li>
        <li>
    <?php 
        if (Stephino_Rpg_Config::get()->core()->getPtfRewardPlayer() || Stephino_Rpg_Config::get()->core()->getPtfRewardAuthor()) {
            echo sprintf(
                esc_html__('Rewards reset after %s', 'stephino-rpg'),
                '<b>' . Stephino_Rpg_Config::get()->core()->getPtfRewardResetHours() . '</b> ' 
                    . esc_html(_n('hour', 'hours', Stephino_Rpg_Config::get()->core()->getPtfRewardResetHours(), 'stephino-rpg'))
            );
        } else {
            echo esc_html__('Engage with other users by creating and playing games', 'stephino-rpg');
        }
    ?>
        </li>
        <li>
    <?php 
        if (Stephino_Rpg_Config::get()->core()->getPtfAuthorLimit() > 0) {
            echo sprintf(
                esc_html__('Each user can create a maximum of %s', 'stephino-rpg'),
                '<b>' . Stephino_Rpg_Config::get()->core()->getPtfAuthorLimit() . '</b> ' 
                    . esc_html(_n('game', 'games', Stephino_Rpg_Config::get()->core()->getPtfAuthorLimit(), 'stephino-rpg'))
            );
        } else {
            echo esc_html__('Each user can create an unlimited number of games', 'stephino-rpg');
        }
    ?>
            </li>
        </ul>
</div>
<?php endif;?>
<div class="col-12 p-2 <?php echo (Stephino_Rpg_Renderer_Ajax_Dialog_Help::CORE_SECTION_RULES == $itemId ? 'framed active' : '');?>">
    <h6 class="heading"><span><?php echo esc_html__('Game rules', 'stephino-rpg');?></span></h6>
    <ul>
        <li><?php echo esc_html__('Resource gathering may require workers', 'stephino-rpg');?></li>
        <?php if (count($configObject->cityInitialBuildings())):?>
            <li>
                <?php if (count($configObject->cityInitialBuildings()) > 1):?>
                    <?php 
                        echo sprintf(
                            esc_html__('%s: when newly founded, they get the following %s:', 'stephino-rpg'),
                            $configObject->getConfigCitiesName(true),
                            $configObject->getConfigBuildingsName(true)
                        );
                    ?>
                    <ul>
                        <?php foreach ($configObject->cityInitialBuildings() as $buildingConfig):?>
                        <li>
                            <span 
                                data-effect="helpMenuItem"
                                data-effect-args="<?php echo Stephino_Rpg_Config_Buildings::KEY;?>,<?php echo $buildingConfig->getId();?>">
                                <?php echo $buildingConfig->getName(true);?>
                            </span>
                            <?php if ($buildingConfig->isMainBuilding()):?>
                                (<?php echo esc_html__('main', 'stephino-rpg');?>)
                            <?php endif;?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                <?php 
                    else: 
                        $cityInitialBuilding = current($configObject->cityInitialBuildings());
                ?>
                    <?php 
                        echo sprintf(
                            esc_html__('%s: Initialized with a level 1 %s', 'stephino-rpg'),
                            $configObject->getConfigCitiesName(true),
                            '<span data-effect="helpMenuItem" data-effect-args="' . Stephino_Rpg_Config_Buildings::KEY . ',' . $cityInitialBuilding->getId() . '">'
                                . $cityInitialBuilding->getName(true)
                            . '</span>'
                        );
                    ?>
                    <?php if ($cityInitialBuilding->isMainBuilding()):?>
                        (<?php echo esc_html__('main', 'stephino-rpg');?>)
                    <?php endif;?>
                <?php endif; ?>
            </li>
        <?php endif;?>
        <li>
            <?php 
                if ($configObject->getMessageDailyLimit() <= 0) {
                    echo esc_html__('Contact between players is forbidden', 'stephino-rpg');
                } else {
                    echo sprintf(
                        esc_html__('Each player can send a maximum of %s %s per day', 'stephino-rpg'),
                        '<b>' . $configObject->getMessageDailyLimit() . '</b>',
                        _n('message', 'messages', $configObject->getMessageDailyLimit(), 'stephino-rpg')
                    );
                }
            ?>
        </li>
        <li>
            <?php 
                echo sprintf(
                    esc_html__('Your inbox can hold a maximum of %s messages', 'stephino-rpg'),
                    '<b>' . $configObject->getMessageInboxLimit() . '</b>'
                );
            ?>
        </li>
        <li>
            <?php
                echo sprintf(
                    esc_html__('Messages are automatically deleted after %s %s', 'stephino-rpg'),
                    '<b>' . $configObject->getMessageMaxAge() . '</b>',
                    _n('day', 'days', $configObject->getMessageMaxAge(), 'stephino-rpg')
                );
            ?>
        </li>
        <li>
            <?php 
                if ($configObject->getTravelTime() > 0) {
                    echo sprintf(
                        esc_html__('The distance between %s is traveled in %s seconds', 'stephino-rpg'),
                        $configObject->getConfigCitiesName(true),
                        '<b>' . $configObject->getTravelTime() . '</b>'
                    );
                } else {
                    echo esc_html__('All travel is instantaneous', 'stephino-rpg');
                }
            ?>
        </li>
        <li>
            <?php 
                if ($configObject->getInitialIslandsCount() > 0) {
                    echo sprintf(
                        esc_html__('The game world was initialized with %s %s (empty)', 'stephino-rpg'),
                        '<b>' . $configObject->getInitialIslandsCount() . '</b>',
                        1 == $configObject->getInitialIslandsCount()
                            ? $configObject->getConfigIslandName()
                            : $configObject->getConfigIslandsName()
                    );
                } else {
                    echo sprintf(
                        esc_html__('The game world was initialized with no %s', 'stephino-rpg'),
                        $configObject->getConfigIslandsName()
                    );
                }
            ?>
        </li>
        <li>
            <?php 
                if ($configObject->getInitialIslandsPerUser() > 0) {
                    echo sprintf(
                        esc_html__('%s new %s are created for each player', 'stephino-rpg'),
                        '<b>' . $configObject->getInitialIslandsPerUser() . '</b>',
                        $configObject->getConfigIslandsName()
                    );
                } else {
                    echo sprintf(
                        esc_html__('No new %s are created with new players', 'stephino-rpg'),
                        $configObject->getConfigIslandsName()
                    );
                }
            ?>
        </li>
        <li>
            <?php
                if ($configObject->getInitialRobotsPerUser() > 0) {
                    echo sprintf(
                        esc_html__('%s new %s are spawned for each player', 'stephino-rpg'),
                        '<b>' . $configObject->getInitialRobotsPerUser() . '</b>',
                        _n('robot', 'robots', $configObject->getInitialRobotsPerUser(), 'stephino-rpg')
                    );
                } else {
                    echo esc_html__('No new robots are spawned with new players', 'stephino-rpg');
                }
            ?>
        </li>
        <li>
            <?php 
                if ($configObject->getRobotTimeLapsesPerRequest() > 0) {
                    echo sprintf(
                        esc_html__('Each player action triggers %s %s by robots', 'stephino-rpg'),
                        '<b>' . $configObject->getRobotTimeLapsesPerRequest() . '</b>',
                        _n('action', 'actions', $configObject->getRobotTimeLapsesPerRequest(), 'stephino-rpg')
                    );
                } else {
                    echo esc_html__('All robots are inactive', 'stephino-rpg');
                }
            ?>
        </li>
        <?php if (is_super_admin()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('The cool-down period between time-lapse procedures is %s seconds for each player', 'stephino-rpg'),
                        '<b>' . $configObject->getTimeLapseCooldown() . '</b>'
                    );
                ?>
            </li>
        <?php endif;?>
        <li>
            <?php 
                echo sprintf(
                    esc_html__('%s needs to be higher than %s to ensure growth of our bases (%s)', 'stephino-rpg'),
                    '<b>' . $configObject->getMetricSatisfactionName(true) . '</b>',
                    '<b>' . $configObject->getMetricPopulationName(true) . '</b>',
                    $configObject->getConfigCitiesName(true)
                );
            ?>
        </li>
        <li><?php echo esc_html__('The growth factor is calculated as follows', 'stephino-rpg');?>:<br/>
            <ul>
                <li>
                    <b>-1</b> <?php echo esc_html__('if', 'stephino-rpg');?> 
                    <b><?php echo $configObject->getMetricSatisfactionName(true);?></b> = <b>0</b>
                </li>
                <li>
                    <b>+0</b> <?php echo esc_html__('if', 'stephino-rpg');?> 
                    <b><?php echo $configObject->getMetricSatisfactionName(true);?></b> = <b><?php echo $configObject->getMetricPopulationName(true);?></b>
                </li>
                <li>
                    <b>+1</b> <?php echo esc_html__('if', 'stephino-rpg');?> 
                    <b><?php echo $configObject->getMetricSatisfactionName(true);?></b> = <b>2 &times; <?php echo $configObject->getMetricPopulationName(true);?></b>
                </li>
                <li>
                    <b>+2</b> <?php echo esc_html__('if', 'stephino-rpg');?> 
                    <b><?php echo $configObject->getMetricSatisfactionName(true);?></b> &gt;= <b>3 &times; <?php echo $configObject->getMetricPopulationName(true);?></b>
                </li>
            </ul>
        </li>
        <li>
            <?php
                echo sprintf(
                    esc_html__('Metropolises are marked with "%s"', 'stephino-rpg'),
                    '<b>' . Stephino_Rpg_Renderer_Ajax_Html::SYMBOL_CAPITAL . '</b>'
                );
            ?>
        </li>
        <?php if ($configObject->getCapitalSatisfactionBonus() > 0):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('Metropolises get a %s boost of %s', 'stephino-rpg'),
                        '<b>' . $configObject->getMetricSatisfactionName(true) . '</b>',
                        '<b>' . $configObject->getCapitalSatisfactionBonus() . '</b>%'
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if ($configObject->getInitialUserResourceGold() || $configObject->getInitialUserResourceGem() || $configObject->getInitialUserResourceResearch()):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('Players get the following resources with their first base (%s)', 'stephino-rpg'),
                        $configObject->getConfigCityName()
                    );
                ?>:
                <ul>
                    <?php if ($configObject->getInitialUserResourceGold() > 0):?>
                        <li><b><?php echo $configObject->getInitialUserResourceGold();?></b> <?php echo $configObject->getResourceGoldName(true);?></li>
                    <?php endif;?>
                    <?php if ($configObject->getInitialUserResourceGem() > 0):?>
                        <li><b><?php echo $configObject->getInitialUserResourceGem();?></b> <?php echo $configObject->getResourceGemName(true);?></li>
                    <?php endif;?>
                    <?php if ($configObject->getInitialUserResourceResearch() > 0):?>
                        <li><b><?php echo $configObject->getInitialUserResourceResearch();?></b> <?php echo $configObject->getResourceResearchName(true);?></li>
                    <?php endif;?>
                </ul>
            </li>
        <?php endif;?>
        <?php if ($configObject->getGemToGoldRatio() > 0):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('Players can trade %s for %s', 'stephino-rpg'),
                        '<b>' . number_format(1, 2) . '</b> ' . $configObject->getResourceGemName(true),
                        '<b>' . number_format($configObject->getGemToGoldRatio(), 2) . '</b> ' . $configObject->getResourceGoldName(true)
                    );
                ?>
            </li>
        <?php endif;?>
        <?php if ($configObject->getGemToResearchRatio() > 0):?>
            <li>
                <?php 
                    echo sprintf(
                        esc_html__('Players can trade %s for %s', 'stephino-rpg'),
                        '<b>' . number_format(1, 2) . '</b> ' . $configObject->getResourceGemName(true),
                        '<b>' . number_format($configObject->getGemToResearchRatio(), 2) . '</b> ' . $configObject->getResourceResearchName(true)
                    );
                ?>
            </li>
        <?php endif;?>
        <li>
            <?php echo esc_html__('Maximum queues', 'stephino-rpg');?>:
            <ul>
                <li>
                    <?php 
                        echo sprintf(
                            esc_html__('%s - Queues per %s', 'stephino-rpg'),
                            '<b>' . $configObject->getConfigBuildingsName(true) . '</b>',
                            $configObject->getConfigCityName(true)
                        );
                    ?>: <b><?php echo $configObject->getMaxQueueBuildings();?></b>
                </li>
                <li>
                    <?php 
                        echo sprintf(
                            esc_html__('%s - Queues per %s', 'stephino-rpg'),
                            '<b>' . $configObject->getConfigUnitsName(true) . '/' . $configObject->getConfigShipsName(true) . '</b>',
                            $configObject->getConfigCityName(true)
                        );
                    ?>: <b><?php echo $configObject->getMaxQueueEntities();?></b>
                </li>
                <li>
                    <?php 
                        echo sprintf(
                            esc_html__('%s - Queues in %s (total)', 'stephino-rpg'),
                            '<b>' . $configObject->getConfigResearchFieldsName(true) . '</b>',
                            $configObject->getConfigCitiesName(true)
                        );
                    ?>: <b><?php echo $configObject->getMaxQueueResearchFields();?></b>
                </li>
            </ul>
        </li>
    </ul>
</div>