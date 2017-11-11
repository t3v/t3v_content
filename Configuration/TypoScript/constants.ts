# -------------------------
# | T3v Content Constants |
# -------------------------

t3v {
  content {
    defaults {
      gridElements {
        viewportGridElement {
          # cat=t3v/content/defaults/gridElements/viewportGridElement; type=string; label=The default container type
          container =
        }
      }
    }
  }
}

# === Plugin Constants ===

plugin {
  tx_t3vcontent {
    persistence {
      # cat=plugin/tx_t3vcontent/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vcontent/persistence; type=int+; label=The PID of the storage
      storagePid = 0

      # cat=plugin/tx_t3vcontent/persistence; type=boolean; label=Updates reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      # ...
    }

    view {
      # cat=plugin/tx_t3vcontent/view; type=string; label=The default path to the layouts
      layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/

      # cat=plugin/tx_t3vcontent/view; type=string; label=The default path to the templates
      templateRootPath = EXT:t3v_content/Resources/Private/Templates/

      # cat=plugin/tx_t3vcontent/view; type=string; label=The default path to the partials
      partialRootPath = EXT:t3v_content/Resources/Private/Partials/
    }
  }
}

<INCLUDE_TYPOSCRIPT: source="FILE: ./Vendor/constants.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./GridElements/constants.ts">