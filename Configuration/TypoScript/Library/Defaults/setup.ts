lib {
  plugin {
    tx_t3vcontent {
      defaults {
        gridElements {
          columnLayoutGridElement {
            2Columns {
              container = TEXT
              container {
                value = {$plugin.tx_t3vcontent.defaults.gridElements.columnLayoutGridElement.2Columns.container}
              }
            }

            3Columns {
              container = TEXT
              container {
                value = {$plugin.tx_t3vcontent.defaults.gridElements.columnLayoutGridElement.3Columns.container}
              }
            }
          }

          accordionGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.accordionGridElement.container}
            }
          }

          accordGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.accordGridElement.container}
            }
          }

          documentSectionGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.documentSectionGridElement.container}
            }
          }

          panelGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.panelGridElement.container}
            }
          }

          timelineGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.timelineGridElement.container}
            }
          }

          eventGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.eventGridElement.container}
            }
          }

          viewportGridElement {
            container = TEXT
            container {
              value = {$plugin.tx_t3vcontent.defaults.gridElements.viewportGridElement.container}
            }
          }
        }
      }
    }
  }
}