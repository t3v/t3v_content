lib {
  t3v {
    content {
      defaults {
        gridElements {
          timelineGridElement {
            container = TEXT
            container {
              value = {$t3v.content.defaults.gridElements.timelineGridElement.container}
            }
          }

          eventGridElement {
            container = TEXT
            container {
              value = {$t3v.content.defaults.gridElements.eventGridElement.container}
            }
          }

          viewportGridElement {
            container = TEXT
            container {
              value = {$t3v.content.defaults.gridElements.viewportGridElement.container}
            }
          }
        }
      }
    }
  }
}