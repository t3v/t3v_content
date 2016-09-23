# === Plugin Configuration ===

plugin {
  tx_t3vcontent {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vcontent.persistence.storagePid}
    }

    view {
      layoutRootPath = {$plugin.tx_t3vcontent.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vcontent.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vcontent.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}