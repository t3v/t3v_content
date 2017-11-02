# === Replace content Configuration ===

config {
  tx_replacecontent {
    search {
      99 = ~<table class="contenttable">~
    }

    replace {
      99 = <table class="table--content table">
    }
  }
}