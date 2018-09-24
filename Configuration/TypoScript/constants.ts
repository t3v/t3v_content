# -------------------------
# | T3v Content Constants |
# -------------------------

# === Plugin Constants ===

plugin {
  tx_t3vcontent {
    defaults {
      gridElements {
        columnLayoutGridElement {
          2Columns {
            # plugin/tx_t3vcontent/defaults/gridElements/columnLayoutGridElement/2Columns; type=string; label=The grid element's container
            container = default
          }

          3Columns {
            # plugin/tx_t3vcontent/defaults/gridElements/columnLayoutGridElement/3Columns; type=string; label=The grid element's container
            container = default
          }
        }

        accordionGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/accordionGridElement; type=string; label=The grid element's container
          container = none
        }

        accordGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/accordGridElement; type=string; label=The grid element's container
          container = none
        }

        documentSectionGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/documentSectionGridElement; type=string; label=The grid element's container
          container = default
        }

        panelGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/panelGridElement; type=string; label=The grid element's container
          container = none
        }

        timelineGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/timelineGridElement; type=string; label=The grid element's container
          container = none
        }

        eventGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/eventGridElement; type=string; label=The grid element's container
          container = none
        }

        viewportGridElement {
          # plugin/tx_t3vcontent/defaults/gridElements/viewportGridElement; type=string; label=The grid element's container
          container = none
        }
      }
    }

    persistence {
      # cat=plugin/tx_t3vcontent/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vcontent/persistence; type=int+; label=The PID of the default storage
      storagePid = 0

      # cat=plugin/tx_t3vcontent/persistence; type=boolean; label=Updates the reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      extbase {
        # cat=plugin/tx_t3vcontent/settings/extbase; type=string; label=The controller extension name
        controllerExtensionName = T3vContent
      }

      # cat=plugin/tx_t3vcontent/settings; type=options[Strict=strict,Fallback=fallback]; label=The mode in which T3v Content runs
      mode = strict
    }

    view {
      # cat=plugin/tx_t3vcontent/view; type=string; label=The path where the layouts are stored
      layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/

      # cat=plugin/tx_t3vcontent/view; type=string; label=The path where the templates are stored
      templateRootPath = EXT:t3v_content/Resources/Private/Templates/

      # cat=plugin/tx_t3vcontent/view; type=string; label=The path where the partials are stored
      partialRootPath = EXT:t3v_content/Resources/Private/Partials/
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Vendor/constants.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./GridElements/constants.ts">