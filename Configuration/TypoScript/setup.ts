# -----------------------------
# | T3v Content Configuration |
# -----------------------------

# === Plugin Configuration ===

plugin {
  tx_t3vcontent {
    persistence {
      enableAutomaticCacheClearing = {$plugin.tx_t3vcontent.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vcontent.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vcontent.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vcontent.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vcontent.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vcontent.view.partialRootPath}
      }
    }
  }
}

<INCLUDE_TYPOSCRIPT: source="FILE: ./Vendor/setup.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./GridElements/setup.ts">