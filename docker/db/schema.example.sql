-- PROVISIONAL / INFERRED ONLY — replace with real SHOW CREATE TABLE output.
-- Not loaded automatically (keep this file outside db/init/ or rename into
-- init/01-schema.sql once verified).
--
-- Column lists taken from data/*/data_pull.php SELECTs so a dummy can be
-- sketched before the lab schema arrives. Types are guesses; indexes/keys
-- may not match production.

CREATE TABLE IF NOT EXISTS moller_run (
  id_run            INT NOT NULL,
  run_leftrate      DOUBLE NULL,
  run_rightrate     DOUBLE NULL,
  run_coinrate      DOUBLE NULL,
  run_accrate       DOUBLE NULL,
  run_bcm           DOUBLE NULL,
  run_clock         DOUBLE NULL,
  run_asym          DOUBLE NULL,
  run_asymerr       DOUBLE NULL,
  run_anpow         DOUBLE NULL,
  run_ptarg         DOUBLE NULL,
  run_pol           DOUBLE NULL,
  run_polerr        DOUBLE NULL,
  run_qasym         DOUBLE NULL,
  run_qasymerr      DOUBLE NULL,
  run_qpedused      DOUBLE NULL,
  run_deadtimetau   DOUBLE NULL,
  PRIMARY KEY (id_run)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS moller_run_details (
  id_rundet         INT NOT NULL,
  rundet_deadtimetau DOUBLE NULL,
  rundet_day        VARCHAR(32) NULL,
  rundet_anpow      DOUBLE NULL,
  rundet_type       VARCHAR(64) NULL,
  rundet_pcrex_group DOUBLE NULL,
  rundet_comment    TEXT NULL,
  rundet_qpedset    DOUBLE NULL,
  experiment        VARCHAR(64) NULL,
  PRIMARY KEY (id_rundet),
  KEY idx_experiment (experiment),
  KEY idx_type (rundet_type),
  KEY idx_day (rundet_day)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS moller_settings (
  id_set_run        INT NOT NULL,
  set_target        VARCHAR(64) NULL,
  set_ihwp          VARCHAR(32) NULL,
  set_hel_pattern   VARCHAR(64) NULL,
  set_hel_freq      DOUBLE NULL,
  PRIMARY KEY (id_set_run)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS pcrex_groups (
  id_group                      INT NOT NULL,
  group_date                    VARCHAR(32) NULL,
  group_type                    VARCHAR(64) NULL,
  group_hwp                     VARCHAR(32) NULL,
  group_wein                    VARCHAR(32) NULL,
  group_asym                    DOUBLE NULL,
  group_asym_err                DOUBLE NULL,
  group_asymgaus                DOUBLE NULL,
  group_asymgaus_err            DOUBLE NULL,
  group_asymgaus_chi2ndf        DOUBLE NULL,
  group_block_asym              DOUBLE NULL,
  group_block_asym_err          DOUBLE NULL,
  group_block_asymgauss         DOUBLE NULL,
  group_block_asymgauss_err     DOUBLE NULL,
  group_block_asymgauss_chi2ndf DOUBLE NULL,
  group_analysis_timestamp      VARCHAR(64) NULL,
  group_target                  VARCHAR(64) NULL,
  group_anpow                   DOUBLE NULL,
  group_targpol                 DOUBLE NULL,
  group_dttau                   DOUBLE NULL,
  PRIMARY KEY (id_group),
  KEY idx_group_type (group_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
