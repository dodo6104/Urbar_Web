import GSheetProcessor from "../google/gsheetsprocessor.js";

// test sheet id, Sheets API key, and valid auth scope
const demoSheetId = "1IinQGIciZSDeksaI-QYvPHVqctdKnqZIn-YDcxObBMk";
const apiKey = "AIzaSyDLKym7JLtw8pI7F-Gzb4b6foLYkmPyri4";
const options = {
  apiKey: apiKey,
  sheetId: demoSheetId,
  sheetNumber: 1,
  returnAllResults: true,
};

GSheetProcessor(
  options,
  (results) => {
    window.oznamy = [];

    results.forEach((result) => {
      Object.keys(result).forEach((key) => {
        if (key === "nazov") {
          const t = results.filter((res) => res.nazov === result[key]);
          if (t[0] && t[0].nazov && t[0].datum && t[0].text) {
            window.oznamy.push(...t);
          }
        }
      });
    });
    let event = new Event("OznamyLoaded");
    document.dispatchEvent(event);
  },
  (error) => {
    console.log("error from sheets API", error);
  }
);
