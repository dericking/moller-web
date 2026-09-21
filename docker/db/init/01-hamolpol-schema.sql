/*M!999999\- enable the sandbox mode */
-- MariaDB dump 10.19  Distrib 10.5.29-MariaDB, for Linux (x86_64)
--
-- Host: halladb    Database: hamolpol
-- ------------------------------------------------------
-- Server version	10.3.39-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `molana_accidental_analysis`
--

DROP TABLE IF EXISTS `molana_accidental_analysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `molana_accidental_analysis` (
  `id_run` int(11) NOT NULL COMMENT 'run number',
  `acc_freq` float DEFAULT NULL COMMENT 'effective helicity frequency (Hz)',
  `acc_rl` float DEFAULT NULL COMMENT 'average left singles rate (Hz)',
  `acc_rl_err` float DEFAULT NULL COMMENT 'average left singles rate error (Hz)',
  `acc_rr` float DEFAULT NULL COMMENT 'average right singles rate (Hz)',
  `acc_rr_err` float DEFAULT NULL COMMENT 'average right singles rate error (Hz)',
  `acc_rc` float DEFAULT NULL COMMENT 'average coincidence rate (Hz)',
  `acc_rc_err` float DEFAULT NULL COMMENT 'average coincidence rate error (Hz)',
  `acc_ra` float DEFAULT NULL COMMENT 'average accidental rate (Hz)',
  `acc_ra_err` float DEFAULT NULL COMMENT 'average accidental rate error (Hz)',
  `acc_al` float DEFAULT NULL COMMENT 'left singles asymmetry',
  `acc_al_err` float DEFAULT NULL COMMENT 'left singles asymmetry error',
  `acc_ar` float DEFAULT NULL COMMENT 'right singles asymmetry',
  `acc_ar_err` float DEFAULT NULL COMMENT 'right singles asymmetry error',
  `acc_aa` float DEFAULT NULL COMMENT 'accidental asymmetry',
  `acc_aa_err` float DEFAULT NULL COMMENT 'accidental asymmetry error',
  `acc_amol_raw` float DEFAULT NULL COMMENT 'deadtime-uncorrected, accidental-uncorrected moller asymmetry',
  `acc_amol_raw_err` float DEFAULT NULL COMMENT 'deadtime-uncorrected, accidental-uncorrected moller asymmetry error',
  `acc_amol_meas` float DEFAULT NULL COMMENT 'deadtime-corrected, accidental-uncorrected moller asymmetry',
  `acc_amol_meas_err` float DEFAULT NULL COMMENT 'deadtime-corrected, accidental-uncorrected moller asymmetry error',
  `acc_amol_hist` float DEFAULT NULL COMMENT 'deadtime-corrected, accidental-corrected moller asymmetry',
  `acc_amol_hist_err` float DEFAULT NULL COMMENT 'deadtime-corrected, accidental-corrected moller asymmetry error',
  `acc_exp` varchar(255) DEFAULT NULL COMMENT 'experiment name',
  `acc_dt` float DEFAULT NULL COMMENT 'deadtime tau parameter used in analysis',
  `acc_burst` int(11) DEFAULT NULL COMMENT 'burst size (patterns per burst)',
  PRIMARY KEY (`id_run`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_quality`
--

DROP TABLE IF EXISTS `moller_quality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_quality` (
  `id_qual_record` int(11) NOT NULL,
  `qual_run` int(11) DEFAULT NULL,
  `qual_user` int(11) DEFAULT NULL,
  `qual_noted` varchar(255) DEFAULT NULL,
  `qual_comment` varchar(255) DEFAULT NULL,
  `qual_recdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_qual_record`),
  KEY `qual_run` (`qual_run`),
  KEY `qual_user` (`qual_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_run`
--

DROP TABLE IF EXISTS `moller_run`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_run` (
  `id_run` int(11) NOT NULL,
  `run_leftrate` float DEFAULT NULL,
  `run_rightrate` float DEFAULT NULL,
  `run_coinrate` float DEFAULT NULL,
  `run_accrate` float DEFAULT NULL,
  `run_bcm` int(11) DEFAULT NULL,
  `run_clock` int(11) DEFAULT NULL,
  `run_asym` float DEFAULT NULL,
  `run_asymerr` float DEFAULT NULL,
  `run_anpow` float(7,6) DEFAULT NULL,
  `run_ptarg` float(7,6) DEFAULT NULL,
  `run_pol` float DEFAULT NULL,
  `run_polerr` float DEFAULT NULL,
  `run_qasym` float DEFAULT NULL,
  `run_qasymerr` float DEFAULT NULL,
  `run_qpedused` float DEFAULT NULL,
  `run_qpedcalc` float(7,6) DEFAULT NULL,
  `run_deadtimetau` float DEFAULT NULL,
  `run_leftrate_err` float DEFAULT NULL,
  `run_rightrate_err` float DEFAULT NULL,
  `run_coinrate_err` float DEFAULT NULL,
  `run_accrate_err` float DEFAULT NULL,
  PRIMARY KEY (`id_run`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_run_details`
--

DROP TABLE IF EXISTS `moller_run_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_run_details` (
  `id_rundet` int(11) NOT NULL,
  `rundet_day` date DEFAULT NULL,
  `rundet_anpow` float(7,6) DEFAULT NULL,
  `rundet_type` varchar(32) DEFAULT NULL,
  `rundet_pcrex_group` float(7,1) DEFAULT NULL,
  `rundet_qpedset` float DEFAULT NULL,
  `rundet_deadtimetau` float DEFAULT NULL,
  `rundet_comment` varchar(255) DEFAULT NULL,
  `experiment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_rundet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_run_epics_sbs`
--

DROP TABLE IF EXISTS `moller_run_epics_sbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_run_epics_sbs` (
  `run_id_epcs` int(11) NOT NULL,
  `HALLA_p_epcs` float DEFAULT NULL,
  `HALLA_dpp_epcs` float DEFAULT NULL,
  `HALLC_p_epcs` float DEFAULT NULL,
  `halla_current_epcs` float DEFAULT NULL,
  `hallc_current_epcs` float DEFAULT NULL,
  `wien_h_epcs` float DEFAULT NULL,
  `wien_ideal_epcs` float DEFAULT NULL,
  `halla_qe_epcs` float DEFAULT NULL,
  `INJ_E_epcs` float DEFAULT NULL,
  `NLE_epcs` float DEFAULT NULL,
  `SLE_epcs` float DEFAULT NULL,
  `prod_pd_start_epcs` datetime DEFAULT NULL,
  `prod_pd_end_epcs` datetime DEFAULT NULL,
  `prod_pd_dpp_epcs` float DEFAULT NULL,
  `moller_pd_dpp_epcs` float DEFAULT NULL,
  `max_pol_epcs` float DEFAULT NULL,
  `q_ped_epcs` float DEFAULT NULL,
  `dt_corr_epcs` float DEFAULT NULL,
  `accid_corr_epcs` float DEFAULT NULL,
  `qped_corr_epcs` float DEFAULT NULL,
  `hallb_current_epcs` double DEFAULT NULL,
  `halld_current_epcs` double DEFAULT NULL,
  `ihwp_epcs` varchar(10) DEFAULT NULL,
  `wien_v_epcs` double DEFAULT NULL,
  `wien_epcs` float DEFAULT NULL,
  `A_raw_epcs` double DEFAULT NULL,
  `accid_corr_new_epcs` double DEFAULT NULL,
  `dt_corr_new_epcs` double DEFAULT NULL,
  `corrected_asym_epcs` double DEFAULT NULL,
  `A_raw_err_epcs` double DEFAULT NULL,
  `accid_corr_new_err` double DEFAULT NULL,
  `dt_corr_new_err` double DEFAULT NULL,
  `qped_corr_err` double DEFAULT NULL,
  `corrected_asym_err` double DEFAULT NULL,
  `A_raw_group_epcs` double DEFAULT NULL,
  `accid_corr_new_group` double DEFAULT NULL,
  `dt_corr_new_group` double DEFAULT NULL,
  `qped_corr_group` double DEFAULT NULL,
  `corr_A_gr` double DEFAULT NULL,
  `A_raw_err_group` double DEFAULT NULL,
  `accid_corr_new_group_err` double DEFAULT NULL,
  `dt_corr_new_group_err` double DEFAULT NULL,
  `qped_corr_group_err` double DEFAULT NULL,
  `corr_A_gr_err` double DEFAULT NULL,
  PRIMARY KEY (`run_id_epcs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_run_magnets`
--

DROP TABLE IF EXISTS `moller_run_magnets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_run_magnets` (
  `id_runmag` int(11) NOT NULL COMMENT 'run number',
  `runmag_q1set` float DEFAULT NULL COMMENT 'Q1 Set Current',
  `runmag_q2set` float DEFAULT NULL COMMENT 'Q2 Set Current',
  `runmag_q3set` float DEFAULT NULL COMMENT 'Q3 Set Current',
  `runmag_q4set` float DEFAULT NULL COMMENT 'Q4 Set Current',
  `runmag_dpset` float DEFAULT NULL COMMENT 'DP Set Current',
  `runmag_hhset` float DEFAULT NULL COMMENT 'HH Set Current',
  PRIMARY KEY (`id_runmag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `moller_settings`
--

DROP TABLE IF EXISTS `moller_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moller_settings` (
  `id_set_run` int(11) NOT NULL,
  `set_run_type` varchar(255) DEFAULT NULL,
  `set_run_start` datetime DEFAULT NULL,
  `set_run_end` datetime DEFAULT NULL,
  `set_run_length` time DEFAULT NULL,
  `set_trig_thresh_ch0` float(10,5) DEFAULT NULL,
  `set_trig_thresh_ch1` float(10,5) DEFAULT NULL,
  `set_ihwp_in` varchar(255) DEFAULT NULL,
  `set_target` int(11) DEFAULT NULL,
  `set_E_beam` float(10,5) DEFAULT NULL,
  `set_E_inj` float(10,5) DEFAULT NULL,
  `set_E_Slinac` float(10,5) DEFAULT NULL,
  `set_E_Nlinac` float(10,5) DEFAULT NULL,
  `set_n_pass` varchar(255) DEFAULT NULL,
  `set_bcm_avg` float(10,5) DEFAULT NULL,
  `set_unser` float(10,5) DEFAULT NULL,
  `set_bcm_us` float(10,5) DEFAULT NULL,
  `set_bcm_ds` float(10,5) DEFAULT NULL,
  `set_inj_bcm_tot` float(10,5) DEFAULT NULL,
  `set_inj_bcm_halla` float(10,5) DEFAULT NULL,
  `set_bpm01_X` float(10,5) DEFAULT NULL,
  `set_bpm01_Y` float(10,5) DEFAULT NULL,
  `set_bpm04_X` float(10,5) DEFAULT NULL,
  `set_bpm04_Y` float(10,5) DEFAULT NULL,
  `set_bpm04a_X` float(10,5) DEFAULT NULL,
  `set_bpm04a_Y` float(10,5) DEFAULT NULL,
  `set_q1_cur` float(10,5) DEFAULT NULL,
  `set_q2_cur` float(10,5) DEFAULT NULL,
  `set_q3_cur` float(10,5) DEFAULT NULL,
  `set_q4_cur` float(10,5) DEFAULT NULL,
  `set_dip_cur` float(10,5) DEFAULT NULL,
  `set_tgt_angle` float(10,5) DEFAULT NULL,
  `set_tgt_angle_deg` float(10,5) DEFAULT NULL,
  `set_tgt_lin_pos` float(10,5) DEFAULT NULL,
  `set_tgt_lin_pos_mm` float(10,5) DEFAULT NULL,
  `set_las_mode_halla` varchar(255) DEFAULT NULL,
  `set_las_mode_hallb` varchar(255) DEFAULT NULL,
  `set_las_mode_hallc` varchar(255) DEFAULT NULL,
  `set_las_pow_halla` float(10,5) DEFAULT NULL,
  `set_las_pow_hallb` float(10,5) DEFAULT NULL,
  `set_las_pow_hallc` float(10,5) DEFAULT NULL,
  `set_las_attn_halla` float(10,5) DEFAULT NULL,
  `set_las_attn_hallb` float(10,5) DEFAULT NULL,
  `set_las_attn_hallc` float(10,5) DEFAULT NULL,
  `set_slit_halla` float(10,5) DEFAULT NULL,
  `set_slit_hallb` float(10,5) DEFAULT NULL,
  `set_slit_hallc` float(10,5) DEFAULT NULL,
  `set_ihwp` varchar(16) DEFAULT NULL,
  `set_rhwp` float(10,5) DEFAULT NULL,
  `set_vwien_angle` float(10,5) DEFAULT NULL,
  `set_sol_phi_fg` float(10,5) DEFAULT NULL,
  `set_hwien_angle` float(10,5) DEFAULT NULL,
  `set_hel_pattern` varchar(255) DEFAULT NULL,
  `set_hel_freq` float(10,5) DEFAULT NULL,
  `set_hel_delay` varchar(255) DEFAULT NULL,
  `set_t_settle` float(10,5) DEFAULT NULL,
  `set_t_stable` float(10,5) DEFAULT NULL,
  `set_bpm02a_X` float(10,5) DEFAULT NULL,
  `set_bpm02a_Y` float(10,5) DEFAULT NULL,
  `set_mol_mag_cur_set` float(10,5) DEFAULT NULL,
  `set_mol_mag_cur_meas` float(10,5) DEFAULT NULL,
  `set_mol_mag_v_meas` float(10,5) DEFAULT NULL,
  `set_mol_mag_field_meas` float(10,5) DEFAULT NULL,
  `set_mol_mag_ramp_state` float(10,5) DEFAULT NULL,
  `set_mol_cooler_temp` float(10,5) DEFAULT NULL,
  `set_mol_mag_T2temp` float(10,5) DEFAULT NULL,
  `set_mol_mag_lead1_temp` float(10,5) DEFAULT NULL,
  `set_mol_mag_lead2_temp` float(10,5) DEFAULT NULL,
  `set_det_hv_ch1` float(10,5) DEFAULT NULL,
  `set_det_hv_ch2` float(10,5) DEFAULT NULL,
  `set_det_hv_ch3` float(10,5) DEFAULT NULL,
  `set_det_hv_ch4` float(10,5) DEFAULT NULL,
  `set_det_hv_ch5` float(10,5) DEFAULT NULL,
  `set_det_hv_ch6` float(10,5) DEFAULT NULL,
  `set_det_hv_ch7` float(10,5) DEFAULT NULL,
  `set_det_hv_ch8` float(10,5) DEFAULT NULL,
  `set_det_ap_ch1` float(10,5) DEFAULT NULL,
  `set_det_ap_ch2` float(10,5) DEFAULT NULL,
  `set_det_ap_ch3` float(10,5) DEFAULT NULL,
  `set_det_ap_ch4` float(10,5) DEFAULT NULL,
  `set_det_ap_ch5` float(10,5) DEFAULT NULL,
  `set_det_ap_ch6` float(10,5) DEFAULT NULL,
  `set_det_ap_ch7` float(10,5) DEFAULT NULL,
  `set_det_ap_ch8` float(10,5) DEFAULT NULL,
  `set_trig_thresh` float(10,5) DEFAULT NULL,
  `set_trig_type` varchar(255) DEFAULT NULL,
  `set_mol_pow_sup_cur` float(10,5) DEFAULT NULL,
  PRIMARY KEY (`id_set_run`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_group_burst_analysis`
--

DROP TABLE IF EXISTS `pcrex_group_burst_analysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_group_burst_analysis` (
  `id_groupburst` int(11) NOT NULL,
  `groupburst_0_mean` float DEFAULT NULL,
  `groupburst_1_mean` float DEFAULT NULL,
  `groupburst_1_error` float DEFAULT NULL,
  `groupburst_2_mean` float DEFAULT NULL,
  `groupburst_2_error` float DEFAULT NULL,
  `groupburst_5_mean` float DEFAULT NULL,
  `groupburst_5_error` float DEFAULT NULL,
  `groupburst_10_mean` float DEFAULT NULL,
  `groupburst_10_error` float DEFAULT NULL,
  `groupburst_25_mean` float DEFAULT NULL,
  `groupburst_25_error` float DEFAULT NULL,
  `groupburst_50_mean` float DEFAULT NULL,
  `groupburst_50_error` float DEFAULT NULL,
  `groupburst_100_mean` float DEFAULT NULL,
  `groupburst_100_error` float DEFAULT NULL,
  `groupburst_250_mean` float DEFAULT NULL,
  `groupburst_250_error` float DEFAULT NULL,
  PRIMARY KEY (`id_groupburst`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_groups`
--

DROP TABLE IF EXISTS `pcrex_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_groups` (
  `id_group` int(6) NOT NULL,
  `group_date` date DEFAULT NULL,
  `group_type` varchar(30) DEFAULT NULL,
  `group_anpow` float DEFAULT NULL,
  `group_targpol` float DEFAULT NULL,
  `group_dttau` float DEFAULT NULL,
  `group_hwp` varchar(16) DEFAULT NULL,
  `group_wein` varchar(6) DEFAULT NULL,
  `group_target` int(3) DEFAULT NULL,
  `group_asym` float DEFAULT NULL,
  `group_asym_err` float DEFAULT NULL,
  `group_asymgaus` float DEFAULT NULL,
  `group_asymgaus_err` float DEFAULT NULL,
  `group_asymgaus_chi2ndf` float DEFAULT NULL,
  `group_block_asym` float DEFAULT NULL,
  `group_block_asym_err` float DEFAULT NULL,
  `group_block_asymgauss` float DEFAULT NULL,
  `group_block_asymgauss_err` float DEFAULT NULL,
  `group_block_asymgauss_chi2ndf` float DEFAULT NULL,
  `group_analysis_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `group_associated_compton_slug` int(11) DEFAULT NULL,
  `group_exp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_run_asym_burst`
--

DROP TABLE IF EXISTS `pcrex_run_asym_burst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_run_asym_burst` (
  `id_asym` int(11) NOT NULL COMMENT 'run number',
  `asym_raw` float DEFAULT NULL COMMENT 'raw asymmetry',
  `asym_raw_err` float DEFAULT NULL COMMENT 'raw asymmetry error',
  `asym_acc` float DEFAULT NULL COMMENT 'accid corrected asym',
  `asym_acc_err` float DEFAULT NULL COMMENT 'accid corrected asym error',
  `asym_bcm` float DEFAULT NULL COMMENT 'raw bcm normalized',
  `asym_bcm_err` float DEFAULT NULL COMMENT 'raw bcm norm error',
  `asym_accbcm` float DEFAULT NULL COMMENT 'accid corrected bcm normalized asym',
  `asym_accbcm_err` float DEFAULT NULL COMMENT 'accid corrected bcm normalized asym error',
  `asym_dt` float DEFAULT NULL COMMENT 'raw asym deadtime corrected',
  `asym_dt_err` float DEFAULT NULL COMMENT 'raw asym deadtime corr error',
  `asym_full` float DEFAULT NULL COMMENT 'fully corrected asymmetry',
  `asym_full_err` float DEFAULT NULL COMMENT 'fully corrected asymmetry error',
  `asym_Aa` float DEFAULT NULL COMMENT 'accidental asymmetry over run (accidental corr)',
  `asym_Aa2` float DEFAULT NULL,
  `asym_Al` float DEFAULT NULL COMMENT 'left asym over run (deadtime corr)',
  `asym_Aq` float DEFAULT NULL COMMENT 'bcm asymmetry over run',
  `asym_Ra` float DEFAULT NULL COMMENT 'average accidental rate',
  `asym_Rl` float DEFAULT NULL COMMENT 'average left rate',
  `asym_Rq` float DEFAULT NULL COMMENT 'average bcm rate',
  `asym_Rc` float DEFAULT NULL,
  `asym_pattern` float DEFAULT NULL COMMENT '4:quartet; 8:octet',
  `asym_freq` float DEFAULT NULL COMMENT 'helicity frequency',
  PRIMARY KEY (`id_asym`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_run_burst_analysis`
--

DROP TABLE IF EXISTS `pcrex_run_burst_analysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_run_burst_analysis` (
  `id_runburst` int(11) NOT NULL,
  `runburst_0_mean` float DEFAULT NULL,
  `runburst_1_mean` float DEFAULT NULL,
  `runburst_1_error` float DEFAULT NULL,
  `runburst_2_mean` float DEFAULT NULL,
  `runburst_2_error` float DEFAULT NULL,
  `runburst_5_mean` float DEFAULT NULL,
  `runburst_5_error` float DEFAULT NULL,
  `runburst_10_mean` float DEFAULT NULL,
  `runburst_10_error` float DEFAULT NULL,
  `runburst_25_mean` float DEFAULT NULL,
  `runburst_25_error` float DEFAULT NULL,
  `runburst_50_mean` float DEFAULT NULL,
  `runburst_50_error` float DEFAULT NULL,
  `runburst_100_mean` float DEFAULT NULL,
  `runburst_100_error` float DEFAULT NULL,
  `runburst_250_mean` float DEFAULT NULL,
  `runburst_250_error` float DEFAULT NULL,
  PRIMARY KEY (`id_runburst`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_run_quality_approvals`
--

DROP TABLE IF EXISTS `pcrex_run_quality_approvals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_run_quality_approvals` (
  `id_runqual` int(11) NOT NULL DEFAULT 0,
  `runqual_user1` int(11) DEFAULT NULL,
  `runqual_value1` int(11) DEFAULT NULL,
  `runqual_user2` int(11) DEFAULT NULL,
  `runqual_value2` int(11) DEFAULT NULL,
  `runqual_objection` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_runqual`),
  KEY `runqual_user1` (`runqual_user1`),
  KEY `runqual_user2` (`runqual_user2`),
  KEY `runqual_objection` (`runqual_objection`),
  KEY `runqual_value1` (`runqual_value1`),
  KEY `runqual_value2` (`runqual_value2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_run_quality_approvers`
--

DROP TABLE IF EXISTS `pcrex_run_quality_approvers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_run_quality_approvers` (
  `id_user` int(11) NOT NULL,
  `user_jlab_name` varchar(255) DEFAULT NULL,
  `user_display_name` varchar(255) DEFAULT NULL,
  `user_privilege` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pcrex_run_quality_types`
--

DROP TABLE IF EXISTS `pcrex_run_quality_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pcrex_run_quality_types` (
  `id_dataqual` int(11) NOT NULL DEFAULT 0,
  `dataqual_desc` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_dataqual`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-08-27 10:48:58
