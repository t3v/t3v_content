# === New Content Element Wizard configuration ===

mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          header = LLL:EXT:t3v_content/Resources/Private/Language/locallang_wizard.xlf:mod.wizards.newContentElement.wizardItems.contentElements.header

          elements {
            # ...
          }

          show = *
        }
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/SpacerContentElement.ts">